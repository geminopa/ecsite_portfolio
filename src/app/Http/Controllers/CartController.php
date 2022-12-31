<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemDetail;
use App\Models\Cart;
use App\Models\OrderHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function list()
    {
        $cartList = Cart::where('user_id', Auth::user()->id)->get();
        $total = $this->getTotal($cartList);
        return view('cart', [
            'cartList' => $cartList,
            'total'=> $total,
        ]);
    }

    public function cartIn(Request $request)
    {
        try {
            $itemDetailId = $request->itemDetailId;
            $cart = Cart::where('user_id', Auth::user()->id)->where('items_detail_id', $itemDetailId)->firstOrNew();
            DB::beginTransaction();
            if ($cart->exists) {
                $cart->quantity += 1;
                $cart->update();
            } else {
                $cart->user_id = Auth::user()->id;
                $cart->items_detail_id = $itemDetailId;
                $cart->quantity = 1;    //TODO:マジックナンバー控える
                $cart->save();
            }
            DB::commit();
            return redirect()->route('cart.list');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            throw $e;
        }
    }

    public function recalculation(Request $request)
    {
        try {
            $itemDetail = ItemDetail::where('id', $request->itemDetailId)->first();
            if ($request->quantity > $itemDetail->stock) {
                return redirect()->route('cart.list')->with('error', '在庫が不足しています。');
            }
            DB::beginTransaction();
            $recalculationCart = Cart::where('id', $request->cartId)->first();
            $recalculationCart->quantity = $request->quantity;
            $recalculationCart->save();
            DB::commit();
            return redirect()->route('cart.list');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            throw $e;
        }
    }

    public function deleteCart(Request $request)
    {
        try {
            DB::beginTransaction();
            Cart::where('id', $request->cart_id)->delete();
            DB::commit();
            return redirect()->route('cart.list');
            // TODO:削除後、カート一覧画面に「（商品名）を削除しました。」と表示する
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            throw $e;
        }
    }

    public function execPurchase(Request $request)
    {
        try {
            $carts = cart::where('user_id', Auth::user()->id)->get();
            // order_historyテーブル登録
            foreach ($carts as $cart) {
                if ($cart->quantity > $cart->itemDetail->stock) {
                    return redirect()->route('cart.list')->with('error', '在庫が不足しています。');
                }
                DB::beginTransaction();
                $orderHistory = new OrderHistory;
                $orderHistory->user_id = $cart->user_id;
                $orderHistory->item_id = $cart->itemDetail->item_id;
                $orderHistory->items_detail_id = $cart->itemDetail->id;
                $orderHistory->quantity = $cart->quantity;
                $orderHistory->save();
                // items_detailテーブルの在庫数を変更
                $itemDetail = ItemDetail::where('id', $cart->items_detail_id)->first();
                $itemDetail->sales_quantity += $cart->quantity;
                $itemDetail->stock -= $cart->quantity;
                $itemDetail->update();
                $cart->delete();
                DB::commit();
            }
            return redirect()->route('cart.showComplete');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            throw $e;
        }
    }

    public function showComplete()
    {
        return view('complete');
    }

    private function getTotal($cartList)
    {
        $total = 0;
        foreach ($cartList as $cartItem) {
            $total += $cartItem->quantity * $cartItem->itemDetail->item->price;
        }
        return $total;
    }
}
