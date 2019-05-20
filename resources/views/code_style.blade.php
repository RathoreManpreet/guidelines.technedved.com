<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.tech.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css')}}">
    <title>Guidelines</title>
</head>
<body>
<div class="main-wrapper">
    @include('Main.Header')
    <section class="section">
        <div class="container">
            <div class="tabs is-centered">
                <ul>
                    <li class="is-active"><a>Pictures</a></li>
                    <li><a>Music</a></li>
                    <li><a>Videos</a></li>
                    <li><a>Documents</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
<script src="{{asset('https://use.fontawesome.com/releases/v5.3.1/js/all.js')}}"></script>
</body>
</html>
