@extends('layouts.common')

@section('main')
<div id="item" class="wrapper">
    <div class="item-image">
        <img src="{{ asset('/images/fashion_onepiece.png') }}" alt="">
    </div>
    <form method="POST" action="{{ route('cart.cartIn') }}">
        @csrf
        <div class="item-info">
        <h1 class="item-title">{{ $item->name }}</h1>
        <p>¥{{ number_format($item->price) }}</p>

        <table class="order-table">
            <thead>
            <tr>
                <th class="color">Color</th>
                <th class="size">Size</th>
                <th class="quantity"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($item->itemsDetail as $itemDetail)
            <tr>
                <td>{{ $itemDetail->color }}</td>
                <td>{{ $itemDetail->size }}</td>
                <td>
                <select name="cartInfo[]">
                    <option value=""></option>
                    <option value="{{ $itemDetail->id }}&1">1</option>
                    <option value="{{ $itemDetail->id }}&2">2</option>
                    <option value="{{ $itemDetail->id }}&3">3</option>
                </select>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary submit">ADD TO CART</button>
        </div>
    </form>
</div>
@endsection