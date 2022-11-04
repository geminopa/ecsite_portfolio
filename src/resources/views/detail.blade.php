@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
@endsection

@section('main')
<div class="container pt-5">
    <form method="POST" action="{{ route('cart.cartIn') }}">
    @csrf
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
                                <tr>
                                    <td>{{ $itemDetail->color }}</td>
                                    <td>{{ $itemDetail->size }}</td>
                                    <input type="hidden" name="itemDetailId" value="{{ $itemDetail->id }}">
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary submit">BUY</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="item-image">
            <img src="{{ asset('/images/fashion_onepiece.png') }}" alt="">
        </div>
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
        </div> -->
    </form>
</div>
@endsection