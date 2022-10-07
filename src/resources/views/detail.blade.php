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
      <div id="item" class="wrapper">
        <div class="item-image">
          <img src="{{ asset('/images/fashion_onepiece.png') }}" alt="">
        </div>

        <div class="item-info">
          <h1 class="item-title">TOTALLY Short Sleeve Shirt</h1>
          <p>￥9,999 +tax</p>

          <table class="order-table">
            <thead>
              <tr>
                <th class="color">Color</th>
                <th class="size">Size</th>
                <th class="quantity"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>White</td>
                <td>S</td>
                <td>
                  <select name="quantity_s">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>White</td>
                <td>M</td>
                <td>
                  <select name="quantity_m">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>White</td>
                <td>L</td>
                <td>
                  <select name="quantity_l">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table>

          <a class="cart-btn" href="#">ADD TO CART</a>
        </div>
      </div>
    </main>

    <footer id="footer" class="wrapper">
      <p class="copyright">© TOTALLY</p>
    </footer>

    <!-- <div class="container my-5">
        <div class="row">
            <div class="col-5">
                <div class="card" style="height: 200px;">
                    <img src="{{ asset('/assets/images/fashion_onepiece.png') }}" alt="">
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <div class="card" style="height: 200px;">
                    <p>ブランド名</p>
                    <h5>商品名</h5>
                    <p>¥20,000</p>
                </div>
            </div>
        </div>
    </div>
</div> -->


</body>
</html>