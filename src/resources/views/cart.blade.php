@extends('layouts.common')

@section('main')

@foreach ($cartList as $cartItem)
<!-- <div id="item" class="wrapper">
    <div class="item-image">
    <img src="{{ asset('/images/fashion_onepiece.png') }}" alt="">
    </div>

    <div class="item-info">
    <h1 class="item-title">{{ $cartItem->itemDetail->item->name }}</h1>
    <p>￥{{ number_format($cartItem->itemDetail->item->price) }}</p>

    <form method="POST" action="{{ route('cart.recalculation') }}">
        @csrf
        <input type="hidden" name="cart_id" value="{{ $cartItem->id }}">
        <select name="quantity" id=""> -->
            <!-- TODO:商品の数量をみてセレクトボックスの値を出したい -->
            <!-- <option value="1">1</option>
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
</div> -->


<div class="container pt-5">
    <div class="card border-light mb-3 mx-auto" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-6 pr-3 bg">
                <img class="product-img" src="{{ asset('/images/fashion_onepiece.png') }}" alt="...">
            </div>
            <div class="col-md-1 c-body"></div>
            <div class="col-md-5 c-body">
                <div class="card-body">
                    <p class="card-text mb-2"><small>{{ $item->category->name }}</small></p>
                    <h4 class="card-title mb-3">{{ $item->name }}</h4>
                    <p class="card-text">¥{{ number_format($item->price) }}</p>
                    <p class="card-text"><small class="text-muted">{{ $item->description }}</small></p>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="color">Color</th>
                                <th class="size">Size</th>
                                <th class="quantity"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($item->itemsDetail as $itemDetail)
                            <form method="POST" action="{{ route('cart.cartIn') }}">
                                @csrf
                                <tr>
                                    <td>{{ $itemDetail->color }}</td>
                                    <td>{{ $itemDetail->size }}</td>
                                    <input type="hidden" name="itemDetailId" value="{{ $itemDetail->id }}">
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary submit">BUY</button>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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