<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link href="{{asset('https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.tech.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css')}}">
    <title>Guidelines</title>
</head>
<body>
    <div class="main-wrapper">
        @include('Main.Header')
        <section class="section bg-white">
            <div class="container">
                <div class="p-l-40 p-r-40">
                    <p class="font-weight-normal m-b-20 is-size-4">
                        This site contains a set of guidelines we use to bring our projects to a good end. We decided to document our workflow because consistency is one of the most valuable traits of maintainable software.
                    </p>
                    <p class="font-weight-normal m-b-20 is-size-5 has-text-grey">
                        The contents of this site exist for ourselves—more importantly, our future selves—and for giving future colleagues a reference to our way of doing things and their quirks. The guidelines cover workflow, code style, and other little things we consider worth documenting.
                    </p>
                    <p class="font-weight-normal m-b-20 is-size-5 has-text-grey">
                        All pages are hosted on <a href="https://github.com/">GitHub</a>, so edits and improvements are welcome. Note that these are our own opinionated ideas, so we'll be finicky when it comes to substantial changes.
                    </p>
                    <div class="row">
                        <div class="col-md-4 border">
                            <h3 class="font-weight-normal is-size-6 text-uppercase">workflow</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{asset('https://use.fontawesome.com/releases/v5.3.1/js/all.js')}}"></script>
</body>
</html>
