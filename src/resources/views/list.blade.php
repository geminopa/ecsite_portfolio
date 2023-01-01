@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/productList.css') }}">
@endsection

@section('main')
<div class="container">
    <h3 class="pt-5 mb-5">商品一覧</h3>
</div>
<div class="container">
    <div class="row">
        @foreach ($items as $item)
        <div class="col-lg-3 mb-5 d-flex justify-content-center">
            <div class="card border-light" style="width: 18rem;">
                <a href="{{ route('product.detail', $item->id) }}">
                    <img class="product-img" src="{{ asset($item->image_1) }}" alt="#">
                </a>
                <div class="card-body c-body">
                    <a href="{{ route('product.detail', $item->id) }}">
                        <p class="card-title">{{ $item->category->name }}</p>
                        <p class="card-title">{{ $item->name }}</p>
                    </a>
                    <p class="card-text">¥{{ number_format($item->price) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection