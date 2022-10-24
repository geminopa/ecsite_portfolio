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
        return view('detail');
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
                    $cart->amount += $val[1];
                    $cart->update();
                } else {
                    $cart->user_id = Auth::user()->id;
                    $cart->items_detail_id = $val[0];
                    $cart->amount = $val[1];
                    $cart->save();
                }
            }
        }
        $itemId = Item::find($request->item_id)->id;
        $userId = Auth::user()->id;
        // if (Cart::where('item_id', $itemId)->where('user_id', $userId)->exists()) {
            
        // }
    }
}
