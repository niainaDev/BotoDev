<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Commune Numérique</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">

    <style>
        html,body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-size: cover;
            background: #9053c7;
            background: linear-gradient(-135deg, #c850c0, #4158d0);

        }

        .titre {
            font-size: 30px;
            color: #c850c0;
            font-weight: inherit;
        }

        .btn_hiditra {
            background-color: #9053c7;
            border: none;
            width: 400px;
            height: 60px;
        }

        .btn_hiditra:hover {
            background-color: blueviolet;
        }

        .form-signin {
            width: 100%;
            max-width: 500px;
            padding: 30px;
            margin: auto;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group > input,.form-label-group > label {
            height: 3.125rem;
            padding: .75rem;
        }

        .form-label-group > label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0; /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            pointer-events: none;
            cursor: text; /* Match the input under the label */
            border: 1px solid transparent;
            border-radius: .30rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: 1.25rem;
            padding-bottom: .25rem;
        }

        .form-label-group input:not(:placeholder-shown) ~ label {
            padding-top: .25rem;
            padding-bottom: .25rem;
            font-size: 12px;
            color: #777;
        }

        /* Fallback for Edge
        -------------------------------------------------- */
        @supports (-ms-ime-align: auto) {
        .form-label-group > label {
            display: none;
        }
        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
        }

        /* Fallback for IE
        -------------------------------------------------- */
        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .form-label-group > label {
            display: none;
        }
        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }

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
<body >
    <form class="form-signin"  method="POST" action="{{ route('login') }}">
        @csrf
       <div class="card shadow-lg">
           <div class="card-body">
            <div class="text-center mb-4">
                <img class="mb-4" src="{{ asset('Images/logo.png') }}" alt="" width="300" height="100">
                <h1 class="display-4 titre" color="white">Commune Numérique</h1>
            </div>

            <div class="form-label-group">
                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="current-email" placeholder="" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="inputEmail">Anarana</label>

            </div>

            <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="inputPassword">Tenimiafina</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block btn_hiditra" type="submit">Hiditra</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Commune Numérique-2020</p>
           </div>
       </div>
    </form>
</body>
</html>
