@extends('layouts.common')

@section('main')
<div class="container">
    <h3 class="pt-5 mb-5">お客様情報編集</h3>
</div>
<div class="card border my-5 mx-auto" style="max-width: 1000px">
    <form method="post" action="{{ route('account.edit_complete') }}">
    @csrf
        <div class="row mt-5 mb-4">
            <label for="name" class="col-2 offset-2 col-form-label">お名前</label>
            <div class="col-6">
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
        </div>
        <div class="row mb-4">
            <label for="email" class="col-2 offset-2 col-form-label">Eメールアドレス</label>
            <div class="col-6">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="row mb-4">
            <label for="post_code" class="col-2 offset-2 col-form-label">郵便番号</label>
            <div class="col-3">
                <input type="text" class="form-control" id="post_code" name="post_code">
            </div>
            <div class="col-2">
                <a class="btn btn-outline-secondary d-flex justify-content-center" href="">住所検索</a>
            </div>
        </div>
        <div class="row mb-4">
            <label for="prefecture" class="col-2 offset-2 col-form-label">都道府県</label>
            <div class="col-6">
                <input type="text" class="form-control" id="prefecture" name="prefecture">
            </div>
        </div>
        <div class="row mb-4">
            <label for="city" class="col-2 offset-2 col-form-label">市区町村</label>
            <div class="col-6">
                <input type="text" class="form-control" id="city" name="city">
            </div>
        </div>
        <div class="row mb-4">
            <label for="address" class="col-2 offset-2 col-form-label">それ以降の住所</label>
            <div class="col-6">
                <input type="text" class="form-control" id="address" name="address">
            </div>
        </div>
        <div class="row mb-5">
            <label for="tel" class="col-2 offset-2 col-form-label">電話番号</label>
            <div class="col-6">
                <input type="text" class="form-control" id="tel" name="tel">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4 offset-4 d-flex justify-content-center">
                <input type="submit" class="btn btn-outline-secondary" style="width: 300px;" value="送信する">
            </div>
            <div class="col-4 d-flex justify-content-center">
                <a class="btn btn-outline-secondary" style="width: 100px;" href="{{ route('product.list') }}">戻る</a>
            </div>
        </div>
    </form>
</div>
@endsection