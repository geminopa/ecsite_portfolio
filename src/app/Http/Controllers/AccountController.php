<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Services\AccountService;

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
        $validator = AccountService::validate($request);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->post_code = $request->post_code;
        $user->prefecture = $request->prefecture;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->tel = $request->tel;

        $user->save();
        return redirect()->back()->with('message', 'お客様情報を更新しました');
    }
}
