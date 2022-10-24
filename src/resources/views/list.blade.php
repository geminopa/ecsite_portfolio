<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        @foreach ($brands as $brand)
                        <li><a class="dropdown-item" href="#">{{ $brand->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORY
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownCategory">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <div>
                <a class="btn btn-sm btn-primary" href="{{ route('account.edit') }}">購入者情報</a>
                <a class="btn btn-sm btn-primary" href="{{ route('cart.list') }}">カート</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="mt-5">Bland A</h3>
    </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($allItems as $item)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('/assets/images/fashion_onepiece.png') }}" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">¥{{ number_format($item->price) }}</p>
                        <!-- <input type="hidden" name="item_id" value="{{ $item->id }}"> -->
                        <a class="btn btn-primary" href="{{ route('product.detail', $item->id) }}">カートに入れる</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>