@extends('layouts.common')

@section('main')
<div class="container">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">お名前</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="name" name="name" placeholder="{{ $user->name }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Eメールアドレス</label>
        <div class="col-sm-7">
            <input type="email" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="post_code" class="col-sm-2 col-form-label">郵便番号</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="post_code" name="post_code">
        </div>
        <div class="col-sm-1" ></div>
        <div class="col-sm-4">
            <a class="btn btn-primary" href="">住所検索</a>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="prefecture" class="col-sm-2 col-form-label">都道府県</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="prefecture" name="prefecture">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="city" class="col-sm-2 col-form-label">市区町村</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="city" name="city">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">それ以降の住所</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="address" name="address">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tel" class="col-sm-2 col-form-label">電話番号</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="tel" name="tel">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-3">
            <a class="btn btn-primary" href="">ショッピングに戻る</a>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-primary" href="">カートに戻る</a>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-primary" href="">購入する</a>
        </div>
    </div>
</div>
@endsection