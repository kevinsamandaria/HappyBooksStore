<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="HeaderFooter.css">

    <title>Happy Book Store</title>
  </head>
  <body>

    <div id="header">
        <div class="d-flex justify-content-center bg-primary text-white p-4">
            <h3>Happy Books Store</h1>
        </div>

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @yield('navigation')
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>



    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <div class="d-flex bg-warning">
                        <p class="fs-3 ms-2 mt-2">@yield('judul')</p>
                    </div>
                    @yield('content')
                </div>
                <div class="col-3">
                    <div class="d-flex bg-warning">
                        <p class="fs-3 ms-3 mt-2">Category</p>
                    </div>
                    <div>
                        <p>@yield('category')</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="d-flex justify-content-center bg-primary text-white fixed-bottom p-4">
            <h5>&#169Happy Books 2021</h5>
        </div>
    </footer>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
