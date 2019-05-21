<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guidelines Techneved</title>
    <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
@include('header')
<section class="home">
    <div class="home__banner">
        <p><span class="home__banner_title">Techneved</span> Guidlines</p>
    </div>
</section>
<div class="container">
    <div class="container-fluid__content">
        <h3>
            This <span class="font-weight-bold"> Techneved</span> site contains a set of guidelines we use to bring our projects to a good end. We decided to document our workflow because consistency is one of the most valuable traits of maintainable software.
        </h3>
        <h5>
            The contents of this site exist for ourselves—more importantly, our future selves—and for giving future colleagues a reference to our way of doing things and their quirks. The guidelines cover workflow, code style, and other little things we consider worth documenting.
        </h5>
        <h5>
            All pages are hosted on <a href="www.techneved.com">GitHub</a>, so edits and improvements are welcome. Note that these are our own opinionated ideas, so we'll be finicky when it comes to substantial changes.
        </h5>
    </div>
</div>
</body>
<script src="{{asset(mix('/js/app.js'))}}"></script>
</html>
