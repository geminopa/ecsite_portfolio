<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function list()
    {
        $cartList = Cart::where('user_id', Auth::user()->id)->get();
        return view('cart', [
            'cartList' => $cartList,
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
}
