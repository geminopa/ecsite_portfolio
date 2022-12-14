<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('css')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('js')
</head>
<body class="bg">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-0">
            <div class="container-fluid">
                <div class="shop-title">
                    <a class="navbar-brand" href="{{ route('product.list') }}">げんしのお店</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <form action="{{ route('product.search') }}" method="POST" class="d-flex justify-content-start">
                            @csrf
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownBland" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    BRAND
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownBland">
                                    <li><a class="dropdown-item" href="#">Bland A</a></li>
                                    <li><a class="dropdown-item" href="#">Bland B</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    CATEGORY
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownCategory">
                                    <li><a class="dropdown-item" href="#">Category A</a></li>
                                    <li><a class="dropdown-item" href="#">Category B</a></li>
                                </ul>
                            </li> -->
                            <input class="form-control me-2" type="text" name="keyword" placeholder="アイテム名" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </ul>
                    @if (Auth::check())
                    <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-start" name="logout">
                    @csrf
                        <div class="logout-icon-area d-flex justify-content-end">
                            <a href="javascript: logout.submit()"><img class="icon" src="{{ asset('images/logout_icon.png') }}" alt="#"></a>
                        </div>
                    </form>
                    @else
                    <div class="login-icon-area d-flex justify-content-end">
                        <a href="{{ route('login') }}"><img class="icon" src="{{ asset('images/login_icon.png') }}" alt="#"></a>
                    </div>
                    @endif
                    <div class="people-icon-area">
                        <a href="{{ route('account.edit') }}"><img class="icon" src="{{ asset('images/people_icon.png') }}" alt="#"></a>
                    </div>
                    <div class="shopping-cart-icon-area">
                        <a href="{{  route('cart.list')}}"><img class="icon" src="{{ asset('images/shopping_cart_icon.png') }}" alt="#"></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
            @yield('main')
    </main>
    <footer>
    </footer>
</body>
</html>
