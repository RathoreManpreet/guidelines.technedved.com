<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guidelines Techneved:- Version Control</title>
    <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
@include('header')

<div class="container">
    <div class="container-fluid__content container-fluid__content-padding">
        <div class="card">
            <div class="card-body">
                <h1 class="font-weight-bold container-fluid__content__header text-center">
                    Laravel & PHP Style Guide
                </h1>
                <h2>
                    About Laravel
                </h2>
                <p>
                    First and foremost, Laravel provides the most value when you write things the way Laravel intended you to write. If there's a documented way to achieve something, follow it. Whenever you do something differently, make sure you have a justification for why you didn't follow the defaults.
                </p>
                <h2>
                    General PHP Rules
                </h2>
                <p>
                    Code style must follow <a href="http://www.php-fig.org/psr/psr-1/">PSR-1</a> and <a href="http://www.php-fig.org/psr/psr-2/">PSR-2</a>. Generally speaking, everything string-like that's not public-facing should use camelCase. Detailed examples on these are spread throughout the guide in their relevant sections.
                </p>
                <p class="font-14 font-weight-bold">
                    CLASS DEFAULTS
                </p>
                <p>
                    Try to keep the "O" of SOLID in your mind: code should be open for extension, but closed for modification. That's why you should use <code class="container-fluid__content__code">private</code> as the default visibility modifier, and <code class="container-fluid__content__code">final</code> as the default for classes.
                </p>
                <p>
                    This way you're encouraged to think before opening up your classes to the outside world. You should take a moment to think about possible other ways to solve a problem instead of opening up classes. You could for example rely more on composition, dependency injection and interfaces; instead of extending classes.
                </p>
                <p>
                    Especially in the context of open source packages, you're encouraged to think twice about making a method <code class="container-fluid__content__code">public</code> or <code class="container-fluid__content__code">protected</code>, or opening a class for extension. Every entry point in your code that is open for the public to use, is an entry point you'll have to maintain with backwards compatibility in mind.
                </p>
                <p>
                    For now we don't use <code class="container-fluid__content__code">declare(strict_types = 1);</code>
                </p>
                <p class="font-14 font-weight-bold">
                    VOID RETURN TYPES
                </p>
                <p>
                    If a method return nothing, it should be indicated with <code class="container-fluid__content__code">void</code>. This makes it more clear to the users of your code what your intention was when writing it.
                </p>
                <h2>
                    General PHP Rules
                </h2>
                <p>
                    Don't use docblocks for methods that can be fully type hinted (unless you need a description).
                </p>
                <p>
                    Only add a description when it provides more context than the method signature itself. Use full sentences for descriptions, including a period at the end.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">final</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword">class</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"> </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title">Url</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class">
                        </span></span></span></span></span></span></span></span></span></span></span>{
                            <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">public</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">static</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"> </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title">fromString</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params">(string $url)</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function">: </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title">Url</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function">
                            </span></span></span></span></span></span></span></span></span></span></span>{
                                <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// ...</span></span></span></span></span></span></span></span></span></span></span>
                            }
                        }

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad: The description is redundant, and the method is fully type-hinted.</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">final</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword">class</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"> </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title">Url</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class">
                        </span></span></span></span></span></span></span></span></span></span></span>{
                            <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/**
                             * Create a url from a string.
                             *
                             * </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@param</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> string $url
                             *
                             * </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@return</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> \Techneved\Url\Url
                             */</span></span></span></span></span></span></span></span></span></span></span>
                            <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">public</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">static</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"> </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title">fromString</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params"><span class="hljs-function"><span class="hljs-params">(string $url)</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function">: </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title"><span class="hljs-function"><span class="hljs-title">Url</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function"><span class="hljs-function">
                            </span></span></span></span></span></span></span></span></span></span></span>{
                                <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// ...</span></span></span></span></span></span></span></span></span></span></span>
                            }
                        }
                    </code>
                </pre>
                <p>
                    Always use fully qualified class names in docblocks.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/**
                         * </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@param</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> string $url
                         *
                         * </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@return</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> \Techneved\Url\Url
                         */</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/**
                         * </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@param</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> string $foo
                         *
                         * </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@return</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> Url
                         */</span></span></span></span></span></span></span></span></span></span></span>
                    </code>
                </pre>
                <p>
                    Docblocks for class variables are required, as there's currently no other way to typehint these.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">final</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword">class</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"> </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title">Foo</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class">
                        </span></span></span></span></span></span></span></span></span></span></span>{
                            <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/** </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@var</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> \Techneved\Url\Url */</span></span></span></span></span></span></span></span></span></span></span>
                            <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">private</span></span></span></span></span></span></span></span></span></span></span> $url;

                            <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/** </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@var</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> string */</span></span></span></span></span></span></span></span></span></span></span>
                            <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">private</span></span></span></span></span></span></span></span></span></span></span> $name;
                        }

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">final</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword"><span class="hljs-class"><span class="hljs-keyword">class</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"> </span></span></span></span></span></span></span></span></span></span><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title"><span class="hljs-class"><span class="hljs-title">Foo</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class"><span class="hljs-class">
                        </span></span></span></span></span></span></span></span></span></span></span>{
                            <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">private</span></span></span></span></span></span></span></span></span></span></span> $url;
                            <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">private</span></span></span></span></span></span></span></span></span></span></span> $name;
                        }
                    </code>
                </pre>
                <p>
                    When possible, docblocks should be written on one line.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/** </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@var</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> string */</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/** </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@test</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> */</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/**
                         * </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@test</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                         */</span></span></span></span></span></span></span></span></span></span></span>
                    </code>
                </pre>
                <p>
                    If a variable has multiple types, the most common occurring type should be first.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/** </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@var</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> \Techneved\Goo\Bar|null */</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">/** </span></span></span></span></span></span></span></span></span></span><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag"><span class="hljs-comment"><span class="hljs-doctag">@var</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"> null|\Techneved\Goo\Bar */</span></span></span></span></span></span></span></span></span></span></span>
                    </code>
                </pre>
                <h2>
                    Strings
                </h2>
                <p>
                    When possible prefer string interpolation above <code class="container-fluid__content__code">sprintf</code> and the <code class="container-fluid__content__code">.</code> operator.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Good</span></span></span></span></span></span></span></span></span></span></span>
                    $greeting = <span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string">"Hi, I am {$name}."</span></span></span></span></span></span></span></span></span></span></span>;
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad</span></span></span></span></span></span></span></span></span></span></span>
                    $greeting = <span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string">'Hi, I am '</span></span></span></span></span></span></span></span></span></span></span> . $name . <span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string">'.'</span></span></span></span></span></span></span></span></span></span></span>;

                    </code>
                </pre>
                <h2>
                    Ternary operators
                </h2>
                <p>
                    Every portion of a ternary expression should be on its own line unless it's a really short expression.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>
                        $result = $object <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">instanceof</span></span></span></span></span></span></span></span></span></span></span> Model
                            ? $object-&gt;name
                            : <span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string">'A default value'</span></span></span></span></span></span></span></span></span></span></span>;

                        $name = $isFoo ? <span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string">'foo'</span></span></span></span></span></span></span></span></span></span></span> : <span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string">'bar'</span></span></span></span></span></span></span></span></span></span></span>;

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad</span></span></span></span></span></span></span></span></span></span></span>
                        $result = $object <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">instanceof</span></span></span></span></span></span></span></span></span></span></span> Model ?
                            $object-&gt;name :
                           <span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string"><span class="hljs-string">'A default value'</span></span></span></span></span></span></span></span></span></span></span>;
                    </code>
                </pre>
                <h2>
                    If statements
                </h2>
                <p class="font-14 font-weight-bold">
                    BRACKET POSITION
                </p>
                <p>
                    Always use curly brackets.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">if</span></span></span></span></span></span></span></span></span></span></span> ($condition) {
                           ...
                        }

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// Bad</span></span></span></span></span></span></span></span></span></span></span>
                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">if</span></span></span></span></span></span></span></span></span></span></span> ($condition) ...
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    HAPPY PATH
                </p>
                <p>
                    Generally a function should have its unhappy path first and its happy path last. In most cases this will cause the happy path being in an unindented part of the function which makes it more readable.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Good</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">if</span></span></span></span></span></span></span></span></span></span></span> (! $goodCondition) {
                          <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">throw</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">new</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">Exception</span></span></span></span></span></span></span></span></span></span></span>;
                        }}

                        <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// do work</span></span></span></span></span></span></span></span></span></span></span>

                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">
                        // Bad</span></span></span></span></span></span></span></span></span></span></span>

                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">if</span></span></span></span></span></span></span></span></span></span></span> ($goodCondition) {
                         <span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment"><span class="hljs-comment">// do work</span></span></span></span></span></span></span></span></span></span></span>
                        }}

                        <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">throw</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">new</span></span></span></span></span></span></span></span></span></span></span> <span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword"><span class="hljs-keyword">Exception</span></span></span></span></span></span></span></span></span></span></span>;
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    AVOID ELSE
                </p>
                <p>
                    In general, <code class="container-fluid__content__code">else</code> should be avoided because it makes code less readable. In most cases it can be refactored using early returns. This will also cause the happy path to go last, which is desirable.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // Good</span>

                        <span class="hljs-keyword">if</span> (! $conditionBA) {
                           <span class="hljs-comment">// conditionB A failed</span>

                           <span class="hljs-keyword">return</span>;
                        }

                        <span class="hljs-keyword">if</span> (! $conditionB) {
                           <span class="hljs-comment">// conditionB A passed, B failed</span>

                           <span class="hljs-keyword">return</span>;
                        }

                        <span class="hljs-comment">// condition A and B passed</span>
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // Bad</span>

                        <span class="hljs-keyword">if</span> ($conditionA) {
                           <span class="hljs-keyword">if</span> ($conditionB) {
                              <span class="hljs-comment">// condition A and B passed</span>
                           }
                           <span class="hljs-keyword">else</span> {
                             <span class="hljs-comment">// conditionB A passed, B failed</span>
                           }
                        }
                        <span class="hljs-keyword">else</span> {
                           <span class="hljs-comment">// conditionB A failed</span>
                        }
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    COMPOUND IFS
                </p>
                <p>
                    In general, separate <code class="container-fluid__content__code">if</code> statements should be preferred over a compound condition. This makes debugging code easier.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // Good</span>
                        <span class="hljs-keyword">if</span> (! $conditionA) {
                           <span class="hljs-keyword">return</span>;
                        }

                        <span class="hljs-keyword">if</span> (! $conditionB) {
                           <span class="hljs-keyword">return</span>;
                        }

                        <span class="hljs-keyword">if</span> (! $conditionC) {
                           <span class="hljs-keyword">return</span>;
                        }

                        <span class="hljs-comment">// do stuff</span>
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // bad</span>
                        <span class="hljs-keyword">if</span> ($conditionA &amp;&amp; $conditionB &amp;&amp; $conditionC) {
                          <span class="hljs-comment">// do stuff</span>
                        }
                    </code>
                </pre>
                <h2>
                    Comments
                </h2>
                <p>
                    Comments should be avoided as much as possible by writing expressive code. If you do need to use a comment, format it like this:
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // There should be a space before a single line comment.</span>

                        <span class="hljs-comment">/*
                         * If you need to explain a lot you can use a comment block. Notice the
                         * single * on the first line. Comment blocks don't need to be three
                         * lines long or three characters shorter than the previous line.
                         */</span>
                    </code>
                </pre>
                <h2>
                    Whitespace
                </h2>
                <p>
                    Statements should have to breathe. In general always add blank lines between statements, unless they're a sequence of single-line equivalent operations. This isn't something enforceable, it's a matter of what looks best in its context.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                            // Good</span>
                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getPage</span><span class="hljs-params">($url)</span>
                            </span>{
                                $page = <span class="hljs-keyword">$this</span>-&gt;pages()-&gt;where(<span class="hljs-string">'slug'</span>, $url)-&gt;first();

                                <span class="hljs-keyword">if</span> (! $page) {
                                    <span class="hljs-keyword">return</span> <span class="hljs-keyword">null</span>;
                                }

                                <span class="hljs-keyword">if</span> ($page[<span class="hljs-string">'private'</span>] &amp;&amp; ! Auth::check()) {
                                    <span class="hljs-keyword">return</span> <span class="hljs-keyword">null</span>;
                                }

                                <span class="hljs-keyword">return</span> $page;
                            }

                            <span class="hljs-comment">// Bad: Everything's cramped together.</span>
                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">getPage</span><span class="hljs-params">($url)</span>
                            </span>{
                                $page = <span class="hljs-keyword">$this</span>-&gt;pages()-&gt;where(<span class="hljs-string">'slug'</span>, $url)-&gt;first();
                                <span class="hljs-keyword">if</span> (! $page) {
                                    <span class="hljs-keyword">return</span> <span class="hljs-keyword">null</span>;
                                }
                                <span class="hljs-keyword">if</span> ($page[<span class="hljs-string">'private'</span>] &amp;&amp; ! Auth::check()) {
                                    <span class="hljs-keyword">return</span> <span class="hljs-keyword">null</span>;
                                }
                                <span class="hljs-keyword">return</span> $page;
                            }
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // Good: A sequence of single-line equivalent operations.</span>
                        <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">up</span><span class="hljs-params">()</span>
                        </span>{
                            Schema::create(<span class="hljs-string">'users'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">(Blueprint $table)</span> </span>{
                                $table-&gt;increments(<span class="hljs-string">'id'</span>);
                                $table-&gt;string(<span class="hljs-string">'name'</span>);
                                $table-&gt;string(<span class="hljs-string">'email'</span>)-&gt;unique();
                                $table-&gt;string(<span class="hljs-string">'password'</span>);
                                $table-&gt;rememberToken();
                                $table-&gt;timestamps();
                            });
                        }
                    </code>
                </pre>
                <p>
                    Don't add any extra empty lines between <code class="container-fluid__content__code">{}</code> brackets.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // Good</span>
                        <span class="hljs-keyword">if</span> ($foo) {
                            <span class="hljs-keyword">$this</span>-&gt;foo = $foo;
                        }

                        <span class="hljs-comment">// Bad</span>
                        <span class="hljs-keyword">if</span> ($foo) {

                            <span class="hljs-keyword">$this</span>-&gt;foo = $foo;

                        }
                    </code>
                </pre>
                <h2>
                    Configuration
                </h2>
                <p>
                    Configuration files must use kebab-case.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs">config/
                        pdf-generator.php
                    </code>
                </pre>
                <p>
                    Configuration keys must use snake_case.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // config/pdf-generator.php</span>
                        <span class="hljs-keyword">return</span> [
                            <span class="hljs-string">'chrome_path'</span> =&gt; env(<span class="hljs-string">'CHROME_PATH'</span>),
                        ];
                    </code>
                </pre>
                <p>
                    Avoid using the <code class="container-fluid__content__code">env</code> helper outside of configuration files. Create a configuration value from the env variable like above.
                </p>
                <h2>
                    Artisan commands
                </h2>
                <p>
                    The names given to artisan commands should all be kebab-cased.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-bash hljs"><span class="hljs-comment">
                        # Good</span>
                        php artisan delete-old-records

                        <span class="hljs-comment"># Bad</span>
                        php artisan deleteOldRecords
                    </code>
                </pre>
                <p>
                    A command should always give some feedback on what the result is. Minimally you should let the <code class="container-fluid__content__code">handle</code> method spit out a comment at the end indicating that all went well.
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-comment">
                        // in a Command</span>
                        <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">handle</span><span class="hljs-params">()</span>
                        </span>{
                            <span class="hljs-comment">// do some work</span>

                            <span class="hljs-keyword">$this</span>-&gt;comment(<span class="hljs-string">'All ok!'</span>);
                        }
                    </code>
                </pre>
                <p>If possible use a descriptive success message eg. <code class="container-fluid__content__code">Old records deleted</code>.</p>
                <h2>
                    Routing
                </h2>
                <p>Public-facing urls must use kebab-case.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs javascript">
                        https:<span class="hljs-comment">//Techneved.com/open-source</span>
                        https:<span class="hljs-comment">//Techneved.com/jobs/front-end-developer</span>
                    </code>
                </pre>
                <p>Route names must use camelCase.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs">
                        Route::get(<span class="hljs-string">'open-source'</span>, <span class="hljs-string">'OpenSourceController@index'</span>)-&gt;name(<span class="hljs-string">'openSource'</span>);
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">
                            &lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"route('openSource') "</span>&gt;</span>
                            Open Source
                            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
                    </code>
                </pre>
                <p>All routes have an http verb, that's why we like to put the verb first when defining a route. It makes a group of routes very readable. Any other route options should come after it.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs">
                        <span class="hljs-comment">// good: all http verbs come first</span>
                        Route::get(<span class="hljs-string">'/'</span>, <span class="hljs-string">'HomeController@index'</span>)-&gt;name(<span class="hljs-string">'home'</span>);
                        Route::get(<span class="hljs-string">'open-source'</span>, <span class="hljs-string">'OpenSourceController@index'</span>)-&gt;middleware(<span class="hljs-string">'openSource'</span>);

                        <span class="hljs-comment">// bad: http verbs not easily scannable</span>
                        Route::name(<span class="hljs-string">'home'</span>)-&gt;get(<span class="hljs-string">'/'</span>, <span class="hljs-string">'HomeController@index'</span>);
                        Route::middleware(<span class="hljs-string">'openSource'</span>)-&gt;get(<span class="hljs-string">'OpenSourceController@index'</span>);
                    </code>
                </pre>
                <p>Route parameters should use camelCase.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs">
                        Route::get(<span class="hljs-string">'news/{newsItem}'</span>, <span class="hljs-string">'NewsItemsController@index'</span>);
                    </code>
                </pre>
                <p>A route url should not start with <code class="container-fluid__content__code">/</code> unless the url would be an empty string.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs">
                        <span class="hljs-comment">
                            // good</span>
                            Route::get(<span class="hljs-string">'/'</span>, <span class="hljs-string">'HomeController@index'</span>);
                            Route::get(<span class="hljs-string">'open-source'</span>, <span class="hljs-string">'OpenSourceController@index'</span>);

                            <span class="hljs-comment">//bad</span>
                            Route::get(<span class="hljs-string">''</span>, <span class="hljs-string">'HomeController@index'</span>);
                            Route::get(<span class="hljs-string">'/open-source'</span>, <span class="hljs-string">'OpenSourceController@index'</span>);
                    </code>
                </pre>
                <h2>
                    Controllers
                </h2>
                <p>Controllers that control a resource must use the plural resource name.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-keyword">
                        final</span> <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">PostsController</span>
                        </span>{
                        <span class="hljs-comment">// ...</span>
                        }
                    </code>
                </pre>
                <p>Try to keep controllers simple and stick to the default CRUD keywords (<code class="container-fluid__content__code">index</code>, <code class="container-fluid__content__code">create</code>, <code class="container-fluid__content__code">store</code>, <code class="container-fluid__content__code">show</code>, <code class="container-fluid__content__code">edit</code>, <code class="container-fluid__content__code">update</code>, <code class="container-fluid__content__code">destroy</code>). Extract a new controller if you need other actions.</p>
                <p>In the following example, we could have <code class="container-fluid__content__code">PostsController@favorite</code>, and <code class="container-fluid__content__code">PostsController@unfavorite</code>, or we could extract it to a separate <code class="container-fluid__content__code">FavoritePostsController</code>.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-keyword">
                        final</span> <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">PostsController</span>
                        </span>{
                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">create</span><span class="hljs-params">()</span>
                            </span>{
                                <span class="hljs-comment">// ...</span>
                            }

                            <span class="hljs-comment">// ...</span>

                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">favorite</span><span class="hljs-params">(Post $post)</span>
                            </span>{
                                request()-&gt;user()-&gt;favorites()-&gt;attach($post);

                                <span class="hljs-keyword">return</span> response(<span class="hljs-keyword">null</span>, <span class="hljs-number">200</span>);
                            }

                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">unfavorite</span><span class="hljs-params">(Post $post)</span>
                            </span>{
                                request()-&gt;user()-&gt;favorites()-&gt;detach($post);

                                <span class="hljs-keyword">return</span> response(<span class="hljs-keyword">null</span>, <span class="hljs-number">200</span>);
                            }
                        }
                    </code>
                </pre>
                <p>Here we fall back to default CRUD words, <code class="container-fluid__content__code">create</code> and <code class="container-fluid__content__code">destroy</code>.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-keyword">
                        final</span> <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">FavoritePostsController</span>
                        </span>{
                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">create</span><span class="hljs-params">(Post $post)</span>
                            </span>{
                                request()-&gt;user()-&gt;favorites()-&gt;attach($post);

                                <span class="hljs-keyword">return</span> response(<span class="hljs-keyword">null</span>, <span class="hljs-number">200</span>);
                            }

                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">destroy</span><span class="hljs-params">(Post $post)</span>
                            </span>{
                                request()-&gt;user()-&gt;favorites()-&gt;detach($post);

                                <span class="hljs-keyword">return</span> response(<span class="hljs-keyword">null</span>, <span class="hljs-number">200</span>);
                            }
                        }
                    </code>
                </pre>
                <p>This is a loose guideline that doesn't need to be enforced.</p>
                <h2>
                    Views
                </h2>
                <p>View files must use camelCase.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs">
                        resources/
                            views/
                             openSource.blade.php
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs"><span class="hljs-keyword">
                        final</span> <span class="hljs-class"><span class="hljs-keyword">class</span> <span class="hljs-title">OpenSourceController</span>
                        </span>{
                            <span class="hljs-keyword">public</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">index</span><span class="hljs-params">()</span> </span>{
                                <span class="hljs-keyword">return</span> view(<span class="hljs-string">'openSource'</span>);
                            }
                        }
                    </code>
                </pre>
                <h2>
                    Validation
                </h2>
                <p>All custom validation rules must use snake_case:</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs">
                        Validator::extend(<span class="hljs-string">'organisation_type'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">($attribute, $value)</span> </span>{
                            <span class="hljs-keyword">return</span> OrganisationType::isValid($value);
                        });
                    </code>
                </pre>
                <h2>
                    Blade Templates
                </h2>
                <p>Indent using four spaces.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">"/open-source"</span>&gt;</span>
                            Open Source
                        <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
                    </code>
                </pre>
                <p>Don't add spaces after control structures.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span>@</span>if($condition)
                            Something
                        <span>@</span><span>endif</span>
                    </code>
                </pre>
                <h2>
                    Authorization
                </h2>
                <p>Policies must use camelCase.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-php hljs">
                        Gate::define(<span class="hljs-string">'editPost'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-params">($user, $post)</span> </span>{
                            <span class="hljs-keyword">return</span> $user-&gt;id == $post-&gt;user_id;
                        });
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span>@</span>can('editPost', $post)
                            <span class="hljs-tag">&lt;<span class="hljs-name">a</span> <span class="hljs-attr">href</span>=<span class="hljs-string">" route('posts.edit', $post) "</span>&gt;</span>
                                Edit
                            <span class="hljs-tag">&lt;/<span class="hljs-name">a</span>&gt;</span>
                        <span>@</span><span>endcan</span>
                    </code>
                </pre>
                <p>Try to name abilities using default CRUD words. One exception: replace <code class="container-fluid__content__code">show</code> with <code class="container-fluid__content__code">view</code>. A server shows a resource, a user views it.</p>
{{--                <h2>--}}
{{--                    Translations--}}
{{--                </h2>--}}
{{--                <p>Translations must be rendered with the <code class="container-fluid__content__code">__</code> function. We prefer using this over <code class="container-fluid__content__code">@lang</code> in Blade views because <code class="container-fluid__content__code">__</code> can be used in both Blade views and regular PHP code. Here's an example:</p>--}}
{{--                <pre class="container-fluid__content_pre" style="padding-top: 20px">--}}
{{--                    <code class="language-php hljs">--}}
{{--                        &lt;h2&gt;{{ __(<span class="hljs-string">'newsletter.form.title'</span>) }}&lt;/h2&gt;--}}

{{--                        {!! __(<span class="hljs-string">'newsletter.form.description'</span>) !!}--}}
{{--                    </code>--}}
{{--                </pre>--}}
                <h2>
                    Naming Classes
                </h2>
                <p>Naming things is often seen as one of the harder things in programming. That's why we've established some high level guidelines for naming classes.</p>
                <p class="font-14 font-weight-bold">
                    CONTROLLERS
                </p>
                <p>Generally controllers are named by the plural form of their corresponding resource and a <code class="container-fluid__content__code">Controller</code> suffix. This is to avoid naming collisions with models that are often equally named.</p>
                <p>e.g. <code class="container-fluid__content__code">UsersController</code> or <code class="container-fluid__content__code">EventDaysController</code></p>
                <p>When writing non-resourceful controllers you might come across invokable controllers that perform a single action. These can be named by the action they perform again suffixed by <code class="container-fluid__content__code">Controller</code>.</p>
                <p>e.g. <code class="container-fluid__content__code">PerformCleanupController</code></p>
                <p class="font-14 font-weight-bold">
                    RESOURCES (AND TRANSFORMERS)
                </p>
                <p>Both Eloquent resources and Fractal transformers are plural resources suffixed with <code class="container-fluid__content__code">Resource</code> or <code class="container-fluid__content__code">Transformer</code> accordingly. This is to avoid naming collisions with models.</p>
                <p class="font-14 font-weight-bold">
                    JOBS
                </p>
                <p>A job's name should describe its action.</p>
                <p>E.g. <code class="container-fluid__content__code">CreateUser</code> or <code class="container-fluid__content__code">PerformDatabaseCleanup</code></p>
                <p class="font-14 font-weight-bold">
                    EVENTS
                </p>
                <p>Events will often be fired before or after the actual event. This should be very clear by the tense used in their name.</p>
                <p>E.g. <code class="container-fluid__content__code">ApprovingLoan</code> before the action is completed and <code class="container-fluid__content__code">LoanApproved</code> after the action is completed.</p>
                <p class="font-14 font-weight-bold">
                    LISTENERS
                </p>
                <p>Listeners will perform an action based on an incoming event. Their name should reflect that action with a <code class="container-fluid__content__code">Listener</code> suffix. This might seem strange at first but will avoid naming collisions with jobs.</p>
                <p>E.g. <code class="container-fluid__content__code">SendInvitationMailListener</code></p>
                <p class="font-14 font-weight-bold">
                    MAILABLES
                </p>
                <p>Again to avoid naming collisions we'll suffix mailables with <code class="container-fluid__content__code">Mail</code>, as they're often used to convey an event, action or question.</p>
                <p>e.g. <code class="container-fluid__content__code">AccountActivatedMail</code> or <code class="container-fluid__content__code">NewEventMail</code></p>
                
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset(mix('/js/app.js'))}}"></script>
</html>
