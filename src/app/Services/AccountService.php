<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class AccountService
{
    public static function validate($request)
    {
        $rules = [
            'name' => 'bail|required|max:40',
            'email' => 'bail|required|unique:users,email',
            'post_code' => 'bail|required|digits:7',
            'prefecture' => 'bail|required|max:40',
            'city' => 'bail|required|max:40',
            'address' => 'bail|required',
            'tel' => 'bail|required|numeric|digits_between:8,11',
        ];

        $customAttributes = [
            'required' => ':attributeは必須です',
            'max' => ':attributeは最大:max文字で入力してください',
            'unique' => '入力された:attributeは既に登録されています',
            'numeric' => ':attributeは半角数字を入力してください',
            'digits' => ':attributeは:digits桁の半角数字を入力してください',
            'digits_between' => ':attributeは:min桁から:max桁までの半角数字を入力してください',
        ];
        return Validator::make($request->all(), $rules, $customAttributes);
    }
}
