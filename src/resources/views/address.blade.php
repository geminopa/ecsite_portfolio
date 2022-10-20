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
        <div class="container">
            <form method="post" action="{{ route('account.edit_complete') }}">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">お名前</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Eメールアドレス</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="post_code" class="col-sm-2 col-form-label">郵便番号</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="post_code" name="post_code">
                    </div>
                    <div class="col-sm-1" ></div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary" href="">住所検索</a>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="prefecture" class="col-sm-2 col-form-label">都道府県</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="prefecture" name="prefecture">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="city" class="col-sm-2 col-form-label">市区町村</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="address" class="col-sm-2 col-form-label">それ以降の住所</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tel" class="col-sm-2 col-form-label">電話番号</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="tel" name="tel">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-3">
                        <a class="btn btn-primary" href="{{ route('product.list') }}">戻る</a>
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" class="btn btn-primary" value="送信する">
                    </div>
                </div>
            </form>
        </div>

    </main>

    <footer id="footer" class="wrapper">
      <p class="copyright">© TOTALLY</p>
    </footer>

</body>
</html>