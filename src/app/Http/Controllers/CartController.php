<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetail;
use App\Models\User;
use App\Models\Cart;
use App\Models\OrderHistory;
use Illuminate\Support\Facades\Auth;

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
        $arrReq = $request->cartInfo;
        foreach ($arrReq as $req) {
            $val = [];
            if ($req !== null) {
                $val = explode('&', $req);
                $cart = Cart::where('user_id', Auth::user()->id)->where('items_detail_id', $val[0])->firstOrNew();
                if ($cart->exists) {
                    $cart->quantity += $val[1];
                    $cart->update();
                } else {
                    $cart->user_id = Auth::user()->id;
                    $cart->items_detail_id = $val[0];
                    $cart->quantity = $val[1];
                    $cart->save();
                }
            }
        }
        return redirect()->route('cart.list');
    }

    public function recalculation(Request $request)
    {
        $recalculationCart = Cart::where('id', $request->cart_id)->first();
        $recalculationCart->quantity = $request->quantity;
        $recalculationCart->save();
        return redirect()->route('cart.list');
        // TODO:編集後、カート一覧画面に「（商品名）を編集しました。」と表示する
    }

    public function deleteCart(Request $request)
    {
        Cart::where('id', $request->cart_id)->delete();
        return redirect()->route('cart.list');
        // TODO:削除後、カート一覧画面に「（商品名）を削除しました。」と表示する
    }

    public function execPurchase(Request $request)
    {
        $carts = cart::where('user_id', Auth::user()->id)->get();
        // order_historyテーブル登録
        foreach ($carts as $cart) {
            $orderHistory = new OrderHistory;
            $orderHistory->user_id = $cart->user_id;
            $orderHistory->item_id = $cart->itemDetail->item_id;
            $orderHistory->items_detail_id = $cart->itemDetail->id;
            $orderHistory->quantity = $cart->quantity;
            $orderHistory->save();
            // items_detailテーブルの在庫数を変更
            // TODO:在庫を上回る数量がこないよう制御
            $itemDetail = ItemDetail::where('id', $cart->items_detail_id)->first();
            $itemDetail->sales_quantity += $cart->quantity;
            $itemDetail->stock -= $cart->quantity;
            $itemDetail->update();

            $cart->delete();
        }

        return redirect()->route('cart.showComplete');
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
