@extends('layouts.common')

@section('main')
@if (session()->has('message'))
<div class="alert alert-success" role="alert">
  {{ session()->get('message') }}
</div>
@endif
<div class="container">
    <h3 class="pt-5 mb-5">お客様情報編集</h3>
</div>
<div class="card border my-5 mx-auto" style="max-width: 1000px">
    <form method="post" action="{{ route('account.edit_complete') }}">
    @csrf
        <div class="row mt-5">
            <label for="name" class="col-2 offset-2 col-form-label">お名前</label>
            <div class="col-6">
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-4">
                @error('name')
                    <small class="text-danger m-0">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <label for="email" class="col-2 offset-2 col-form-label">Eメールアドレス</label>
            <div class="col-6">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-4">
                @error('email')
                    <p class="text-danger m-0">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <label for="post_code" class="col-2 offset-2 col-form-label">郵便番号</label>
            <div class="col-3">
                <input type="text" class="form-control" id="post_code" name="post_code" value="{{ old('post_code', $user->post_code) }}">
            </div>
            <div class="col-2">
                <a class="btn btn-outline-secondary d-flex justify-content-center" href="">住所検索</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-4">
                @error('post_code')
                    <p class="text-danger m-0">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <label for="prefecture" class="col-2 offset-2 col-form-label">都道府県</label>
            <div class="col-6">
                <input type="text" class="form-control" id="prefecture" name="prefecture" value="{{ old('prefecture', $user->prefecture) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-4">
                @error('prefecture')
                    <p class="text-danger m-0">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <label for="city" class="col-2 offset-2 col-form-label">市区町村</label>
            <div class="col-6">
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $user->city) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-4">
                @error('city')
                    <p class="text-danger m-0">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <label for="address" class="col-2 offset-2 col-form-label">それ以降の住所</label>
            <div class="col-6">
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-4">
                @error('address')
                    <p class="text-danger m-0">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row mt-4">
            <label for="tel" class="col-2 offset-2 col-form-label">電話番号</label>
            <div class="col-6">
                <input type="text" class="form-control" id="tel" name="tel" value="{{ old('tel', $user->tel) }}">
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-4">
                @error('tel')
                    <p class="text-danger m-0">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row mt-4 mb-5">
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