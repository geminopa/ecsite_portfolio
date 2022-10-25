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
        dd('test');
    }
}
