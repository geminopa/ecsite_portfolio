@extends('layouts.common')

@section('main')
@foreach ($cartList as $cartItem)
<div id="item" class="wrapper">
    <div class="item-image">
    <img src="{{ asset('/images/fashion_onepiece.png') }}" alt="">
    </div>

    <div class="item-info">
    <h1 class="item-title">{{ $cartItem->itemDetail->item->name }}</h1>
    <p>￥{{ number_format($cartItem->itemDetail->item->price) }}</p>

    <form method="POST" action="{{ route('cart.recalculation') }}">
        @csrf
        <input type="hidden" name="cart_id" value="{{ $cartItem->id }}">
        <select name="quantity" id="">
            <!-- TODO:商品の数量をみてセレクトボックスの値を出したい -->
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <button class="btn btn-primary submit">変更する</button>
    </form>

    <form action="{{ route('cart.deleteCart') }}" method="POST">
        @csrf
        <input type="hidden" name="cart_id" value="{{ $cartItem->id }}">
        <button class="btn btn-danger submit">削除</button>
    </form>
    </div>
</div>
@endforeach
<div id="item" class="wrapper">
    <form method="POST" action="{{ route('cart.execPurchase') }}">
        @csrf
        <div class="item-info">
            <h1>商品合計</h1>
            <h5>￥{{ number_format($total) }}</h5>
            <button class="btn btn-primary mb-3 submit">購入する</butt>
            <br>
        </div>
    </form>
    <a class="btn btn-primary" href="{{ route('product.list') }}">ショッピングを続ける</a>
</div>
@endsection