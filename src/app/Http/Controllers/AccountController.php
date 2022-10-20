<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('address', [
            'user' => $user,
        ]);
    }

    public function editComplete(Request $request)
    {

        // TODO:バリデーション
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->post_code = $request->post_code;
        $user->prefecture = $request->prefecture;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->tel = $request->tel;

        $user->save();
    }
}
