<!doctype html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TWGLX32');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cotação do dólar, cotação do bitcoin, valor do bitcoin, conversor de moedas, converter bitcoin para real, converter dólar para real.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Coin Now | Valor do Bitcoin, Valor do Dólar, Conversor de Moedas</title>
    <link rel=“canonical” href="{{ url()->current() }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('asset/css/custom.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('asset/img/icon.ico') }}" type="image/x-icon" />
    <meta name="coin" content="{{ $coin }}">
    <!-- Google Analytics -->
    <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'G-573R86RHG0', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->
{{--    ads--}}
    <script data-ad-client="ca-pub-4718082710520823" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
{{--    ads--}}
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWGLX32"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="loadingSetup">
    <span>↓</span>
    <span style="--delay: 0.1s">↓</span>
    <span style="--delay: 0.3s">↓</span>
    <span style="--delay: 0.4s">↓</span>
    <span style="--delay: 0.5s">↓</span>
</div>

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
