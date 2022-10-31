<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownBland" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            BLAND
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownBland">
                            <li><a class="dropdown-item" href="#">Bland A</a></li>
                            <li><a class="dropdown-item" href="#">Bland B</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORY
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownCategory">
                            <li><a class="dropdown-item" href="#">Category A</a></li>
                            <li><a class="dropdown-item" href="#">Category B</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
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
    </main>

    <footer id="footer" class="wrapper">
        <p class="copyright">© TOTALLY</p>
    </footer>

</body>
</html>