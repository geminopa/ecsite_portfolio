@extends('layouts.common')

@section('main')
<div class="container d-flex justify-content-center">
    <div class="mt-5 p-5 border text-center">
        <h5 class="mb-5">商品を購入いたしました。</h5>
        <a class="btn btn-outline-secondary " href="{{ route('product.list') }}">ショッピングに戻る</a>
    </div>
</div>
@endsection