<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Larashop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="{{ asset('fontaws/ll.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="{{ route('cart.index') }}">Panier
                    <span class="badge badge-pill badge-dark">{{ Cart::count() }}</span></a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="{{ route('products.index') }}">Larashop</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                 @include('partials.search')
                <a class="text-muted" href="#" aria-label="Search">

                </a>

                <a class="btn btn-sm btn-outline-success" href="#">Connexion</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach (App\Category::all() as $category)
                <a class="p-2 text-muted" href="{{ route('products.index', ['categorie' =>  $category->slug]) }}">
                   {{ $category->name}}
                </a>
            @endforeach
        </nav>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark text-center">
        <h1 class="display-4 font-italic ">Bienvenue sur Larashop</h1>
    </div>

    <div class="row mb-2">
        @yield('content')
    </div>
</div>

<footer class="blog-footer">
    <p>Site e-commerce by <a href="https://twitter.com/mdo">Niaina Mahefa</a>.</p>
    <p>
        <a href="#">Revenir en haut</a>
    </p>
</footer>
</body>
</html>
