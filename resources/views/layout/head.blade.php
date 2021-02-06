<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cotação do dólar, cotação do bitcoin, valor do bitcoin, conversor de moedas, converter bitcoin para real, converter dólar para real.">
    <meta name="coin" content="{{ $coin }}">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Coin Now | Valor do Bitcoin, Valor do Dólar, Conversor de Moedas</title>
    <link rel=“canonical” href="{{ url()->current() }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('asset/css/custom.css') }}" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <script src="{{ asset('asset/js/app.js') }}"></script>
    <link rel="icon" href="{{ asset('asset/img/icon.ico') }}" type="image/x-icon" />
</head>
<body>

<header class="">
    <div class="navbar navbar-dark bg-dark border-bottom shadow-sm p-3 px-md-4 mb-3">
        <div class="container">
            <p class="h5 my-0 me-md-auto fw-normal">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo Coin Now" height="60px">
            </p>
            <div class=" me-md-auto">
                <select name="moedas" id="cusSelectbox" class="moedas form-select form-select-md mb-2 me-md-auto custom-select">
                    <option value="" disabled>Selecione uma moeda.</option>
                </select>
            </div>
{{--            <nav class="my-2 my-md-0 me-md-3">--}}
{{--                <a class="p-2 text-white" href="#">Alerta de Taxa</a>--}}
{{--                <a class="p-2 text-white" href="#">Ajuda</a>--}}
{{--            </nav>--}}
{{--            <a class="btn btn-outline-success text-white" href="#">Entrar</a>--}}
        </div>
    </div>
</header>
