@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/cart.css') }}">
@endsection

@section('main')

@foreach ($cartList as $cartItem)
<div class="container pt-5">
    <div class="card border-light mb-3 mx-auto" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-3 pr-3 bg">
                <img class="product-img" src="{{ asset($cartItem->itemDetail->item->image_1) }}" alt="...">
            </div>
            <div class="col-md-1 c-body"></div>
            <div class="col-md-4 c-body">
                <div class="card-body">
                    <p class="card-text mb-2"><small>{{ $cartItem->itemDetail->item->brand->name }}</small></p>
                    <h4 class="card-title mb-3">{{ $cartItem->itemDetail->item->name }}</h4>
                    <p class="card-text">¥{{ number_format($cartItem->itemDetail->item->price) }}</p>
                    <p class="card-text"><small class="text-muted">{{ $cartItem->itemDetail->item->description }}</small></p>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="color">Color</th>
                                <th class="size">Size</th>
                                <th class="quantity">Quantity</th>
                                <th class="update"></th>
                                <th class="delete"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form method="POST" action="">
                                @csrf
                                <tr>
                                    <td>{{ $cartItem->itemDetail->color }}</td>
                                    <td>{{ $cartItem->itemDetail->size }}</td>
                                    <td>
                                        <select name="quantity">
                                            @for($i = 1; $i <= 3; $i++)
                                            <option value="{{ $i }}" @if($i === $cartItem->quantity) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </td>
                                    <input type="hidden" name="cartId" value="{{ $cartItem->id }}">
                                    <td>
                                        <button class="btn btn-sm btn-outline-success submit" formaction="{{ route('cart.recalculation') }}">UPDATE</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger submit" formaction="{{ route('cart.deleteCart') }}">DELETE</button>
                                    </td>
                                </tr>
                            </form>
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