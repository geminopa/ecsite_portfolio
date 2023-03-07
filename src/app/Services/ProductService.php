<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class ProductService
{
    public static function searchValidate($request)
    {
        $rules = [
            'keyword' => 'nullable|max:40',
        ];

        $attributes = [
            'keyword' => 'キーワード',
        ];

        $customAttributes = [
            'max' => ':attributeは最大:max文字で入力してください',
        ];
        return Validator::make($request->all(), $rules, $customAttributes, $attributes);
    }
}
