<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guidelines Techneved:- JavaScript</title>
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
                    JavaScript Style Guide
                </h1>
                <h2>
                    Code Style
                </h2>
                <p class="font-14 font-weight-bold">
                    SPACING AND INDENTATION IN FUNCTIONS AND CONTROL STATEMENTS
                </p>
                <p>Code must be indented with 4 spaces.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">greet</span>(<span class="hljs-params">name</span>) </span>{
                            <span class="hljs-keyword">return</span> <span class="hljs-string">`Hello <span class="hljs-subst">${name}</span>!`</span>;
                        }

                        <span class="hljs-comment">// Bad, only 2 spaces.</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">greet</span>(<span class="hljs-params">name</span>) </span>{
                          <span class="hljs-keyword">return</span> <span class="hljs-string">`Hello <span class="hljs-subst">${name}</span>!`</span>;
                        }
                    </code>
                </pre>
                <p>When it comes to spaces around symbols or keywords, the rule of thumb is: add them. Everything in this section should be handled by ESLint.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">if</span> (<span class="hljs-literal">true</span>) {
                            <span class="hljs-comment">// ...</span>
                        } <span class="hljs-keyword">else</span> {
                            <span class="hljs-comment">// ...</span>
                        }

                        <span class="hljs-comment">// Bad, needs more spaces.</span>
                        <span class="hljs-keyword">if</span>(<span class="hljs-literal">true</span>){
                            <span class="hljs-comment">// ...</span>
                        }<span class="hljs-keyword">else</span>{
                            <span class="hljs-comment">// ...</span>
                        }
                    </code>
                </pre>
                <p>Infix operators need room to breath.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> two = <span class="hljs-number">1</span> + <span class="hljs-number">1</span>;

                        <span class="hljs-comment">// Bad, needs more spaces.</span>
                        <span class="hljs-keyword">const</span> two = <span class="hljs-number">1</span>+<span class="hljs-number">1</span>;
                    </code>
                </pre>
                <p>Opening braces should always be on the same line as their corresponding statement or declaration (known as <em>the one true brace style</em>).</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">if</span> (<span class="hljs-literal">true</span>) {
                            <span class="hljs-comment">// ...</span>
                        }

                        <span class="hljs-comment">// Bad</span>
                        <span class="hljs-keyword">if</span> (<span class="hljs-literal">true</span>)
                        {
                            <span class="hljs-comment">// ...</span>
                        }
                    </code>
                </pre>
                <p>Named functions don't have a space before their parameters. Anonymous ones do.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">save</span>(<span class="hljs-params">user</span>) </span>{
                            <span class="hljs-comment">// ...</span>
                        }

                        <span class="hljs-comment">// Bad, no space before the parameters.</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">save</span> (<span class="hljs-params">user</span>) </span>{
                            <span class="hljs-comment">// ...</span>
                        }
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        save(user, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params">response</span>) </span>{
                            <span class="hljs-comment">// ...</span>
                        });

                        <span class="hljs-comment">// Bad, anonymous functions require a space before the parameters.</span>
                        save(user, <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params">response</span>) </span>{
                            <span class="hljs-comment">// ...</span>
                        });
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    SPACING AND INDENTATION IN OBJECTS AND ARRAYS
                </p>
                <p>Objects and arrays require spaces between their braces and brackets. Arrays that contain an object or another array mustn't have a space between the brackets. Multiline objects and arrays require trailing commas.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> person = { <span class="hljs-attr">name</span>: <span class="hljs-string">'Sebastian'</span>, <span class="hljs-attr">job</span>: <span class="hljs-string">'Developer'</span> };

                        <span class="hljs-comment">// Bad, no spaces between parentheses.</span>
                        <span class="hljs-keyword">const</span> person = {<span class="hljs-attr">name</span>: <span class="hljs-string">'Sebastian'</span>, <span class="hljs-attr">job</span>: <span class="hljs-string">'Developer'</span>};
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> person = {
                            <span class="hljs-attr">name</span>: <span class="hljs-string">'Sebastian'</span>,
                            <span class="hljs-attr">job</span>: <span class="hljs-string">'Developer'</span>,
                        };

                        <span class="hljs-comment">// Bad, no trailing comma.</span>
                        <span class="hljs-keyword">const</span> person = {
                            <span class="hljs-attr">name</span>: <span class="hljs-string">'Sebastian'</span>,
                            <span class="hljs-attr">job</span>: <span class="hljs-string">'Developer'</span>
                        };
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> pairs = [[<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>], [<span class="hljs-string">'c'</span>, <span class="hljs-string">'d'</span>]];
                        <span class="hljs-keyword">const</span> people = [{ <span class="hljs-attr">name</span>: <span class="hljs-string">'Sebastian'</span> }, { <span class="hljs-attr">name</span>: <span class="hljs-string">'Willem'</span> }];

                        <span class="hljs-comment">// Bad, no extra spaces if the array contains arrays or objects.</span>
                        <span class="hljs-keyword">const</span> pairs = [ [<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>], [<span class="hljs-string">'c'</span>, <span class="hljs-string">'d'</span>] ];
                        <span class="hljs-keyword">const</span> people = [ { <span class="hljs-attr">name</span>: <span class="hljs-string">'Sebastian'</span> }, { <span class="hljs-attr">name</span>: <span class="hljs-string">'Willem'</span> } ];
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    LINE LENGTH
                </p>
                <p>Lines shouldn't be longer than 100 characters, and mustn't be longer than 120 characters (this isn't enforced by ESLint). Comments mustn't be longer than 80 characters.</p>
                <p class="font-14 font-weight-bold">
                    QUOTES
                </p>
                <p>Use single quotes if possible. If you need multiline strings or interpolation, use template strings.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> company = <span class="hljs-string">'Spatie'</span>;

                        <span class="hljs-comment">// Bad, single quotes can be used here.</span>
                        <span class="hljs-keyword">const</span> company = <span class="hljs-string">"Spatie"</span>;

                        <span class="hljs-comment">// Bad, single quotes can be used here.</span>
                        <span class="hljs-keyword">const</span> company = <span class="hljs-string">`Spatie`</span>;
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">greet</span>(<span class="hljs-params">name</span>) </span>{
                            <span class="hljs-keyword">return</span> <span class="hljs-string">`Hello <span class="hljs-subst">${name}</span>!`</span>;
                        }

                        <span class="hljs-comment">// Bad, template strings are preferred.</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">greet</span>(<span class="hljs-params">name</span>) </span>{
                            <span class="hljs-keyword">return</span> <span class="hljs-string">'Hello '</span> + name + <span class="hljs-string">'!'</span>;
                        }
                    </code>
                </pre>
                <p>Also, when writing html templates (or jsx for that matter), start multiline templates on a new line if possible.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">createLabel</span>(<span class="hljs-params">text</span>) </span>{
                            <span class="hljs-keyword">return</span> <span class="hljs-string">`
                                &lt;div class="label"&gt;
                                    <span class="hljs-subst">${text}</span>
                                &lt;/div&gt;
                            `</span>;
                        }
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    SEMICOLONS
                </p>
                <p>Always.</p>
                <p class="font-14 font-weight-bold">
                    VARIABLE ASSIGNMENT
                </p>
                <p>Prefer <code class="container-fluid__content__code">const</code> over <code class="container-fluid__content__code">let</code>. Only use <code class="container-fluid__content__code">let</code> to indicate that a variable will be reassigned. Never use <code class="container-fluid__content__code">var</code>.</p>
                <p class="font-14 font-weight-bold">
                    VARIABLE NAMES
                </p>
                <p>Variable names generally shouldn't be abbreviated.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">saveUser</span>(<span class="hljs-params">user</span>) </span>{
                            localStorage.set(<span class="hljs-string">'user'</span>, user);
                        }

                        <span class="hljs-comment">// Bad, it's hard to reason about abbreviations in blocks as they grow.</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">saveUser</span>(<span class="hljs-params">u</span>) </span>{
                            localStorage.set(<span class="hljs-string">'user'</span>, u);
                        }
                    </code>
                </pre>
                <p>In single-line arrow functions, abbreviations are allowed to reduce noise if the context is clear enough. For example, if you're calling <code class="container-fluid__content__code">map</code> of <code class="container-fluid__content__code">forEach</code> on a collection of items, it's clear that the parameter is an item of a certain type, which can be derived from the collection's substantive variable name.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">saveUserSessions</span>(<span class="hljs-params">userSessions</span>) </span>{
                            userSessions.forEach(<span class="hljs-function"><span class="hljs-params">s</span> =&gt;</span> saveUserSession(s));
                        }

                        <span class="hljs-comment">// Ok, but pretty noisy.</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">saveUserSessions</span>(<span class="hljs-params">userSessions</span>) </span>{
                            userSessions.forEach(<span class="hljs-function"><span class="hljs-params">userSession</span> =&gt;</span> saveUserSession(userSession));
                        }
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    COMPARISONS
                </p>
                <p>Always use a triple equal to do variable comparisons. If you're unsure of the type, cast it first.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> one = <span class="hljs-number">1</span>;
                        <span class="hljs-keyword">const</span> another = <span class="hljs-string">"1"</span>;

                        <span class="hljs-keyword">if</span> (one === <span class="hljs-built_in">parseInt</span>(another)) {
                            <span class="hljs-comment">// ...</span>
                        }

                        <span class="hljs-comment">// Bad</span>
                        <span class="hljs-keyword">const</span> one = <span class="hljs-number">1</span>;
                        <span class="hljs-keyword">const</span> another = <span class="hljs-string">"1"</span>;

                        <span class="hljs-keyword">if</span> (one == another) {
                            <span class="hljs-comment">// ...</span>
                        }
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    FUNCTION KEYWORD VS. ARROW FUNCTIONS
                </p>
                <p>Function declarations should use the function keyword.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">scrollTo</span>(<span class="hljs-params">offset</span>) </span>{
                            <span class="hljs-comment">// ...</span>
                        }

                        <span class="hljs-comment">// Using an arrow function doesn't provide any benefits here, while the</span>
                        <span class="hljs-comment">// `function`  keyword immediately makes it clear that this is a function.</span>
                        <span class="hljs-keyword">const</span> scrollTo = <span class="hljs-function">(<span class="hljs-params">offset</span>) =&gt;</span> {
                            <span class="hljs-comment">// ...</span>
                        };
                    </code>
                </pre>
                <p>Terse, single line functions can also use the arrow syntax. There's no hard rule here.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">sum</span>(<span class="hljs-params">a, b</span>) </span>{
                            <span class="hljs-keyword">return</span> a + b;
                        }

                        <span class="hljs-comment">// It's a short and simple method, so squashing it to a one-liner is ok.</span>
                        <span class="hljs-keyword">const</span> sum = <span class="hljs-function">(<span class="hljs-params">a, b</span>) =&gt;</span> a + b;
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">export</span> <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">query</span>(<span class="hljs-params">selector</span>) </span>{
                            <span class="hljs-keyword">return</span> <span class="hljs-built_in">document</span>.querySelector(selector);
                        }

                        <span class="hljs-comment">// This one's a bit longer, having everything on one line feels a bit heavy.</span>
                        <span class="hljs-comment">// It's not easily scannable unlike the previous example.</span>
                        <span class="hljs-keyword">export</span> <span class="hljs-keyword">const</span> query = <span class="hljs-function"><span class="hljs-params">selector</span> =&gt;</span> <span class="hljs-built_in">document</span>.querySelector(selector);
                    </code>
                </pre>
                <p>Higher-order functions can use arrow functions if it improves readability.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">sum</span>(<span class="hljs-params">a, b</span>) </span>{
                            <span class="hljs-keyword">return</span> a + b;
                        }

                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> adder = <span class="hljs-function"><span class="hljs-params">a</span> =&gt;</span> b =&gt; sum(a, b);

                        <span class="hljs-comment">// Ok, but unnecessarily noisy.</span>
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">adder</span>(<span class="hljs-params">a</span>) </span>{
                            <span class="hljs-keyword">return</span> <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params">b</span>) </span>{
                                <span class="hljs-keyword">return</span> sum(a, b);
                            };
                        }
                    </code>
                </pre>
                <p>Anonymous functions should use arrow functions.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        [<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>].map(<span class="hljs-function"><span class="hljs-params">a</span> =&gt;</span> a.toUpperCase());
                    </code>
                </pre>
                <p>Unless they need access to <code class="container-fluid__content__code">this</code>.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        $(<span class="hljs-string">'a'</span>).on(<span class="hljs-string">'click'</span>, <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params"></span>) </span>{
                        <span class="hljs-built_in">window</span>.location = $(<span class="hljs-keyword">this</span>).attr(<span class="hljs-string">'href'</span>);
                        });
                    </code>
                </pre>
                <p>Try to keep your functions pure and limit the usage of the <code class="container-fluid__content__code">this</code> keyword.</p>
                <p>Object methods must use the shorthand method syntax.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">export</span> <span class="hljs-keyword">default</span> {
                            <span class="hljs-attr">methods</span>: {
                                handleClick(event) {
                                    event.preventDefault();
                                },
                            },
                        };

                        <span class="hljs-comment">// Bad, the `function` keyword serves no purpose.</span>
                        <span class="hljs-keyword">export</span> <span class="hljs-keyword">default</span> {
                            <span class="hljs-attr">methods</span>: {
                                <span class="hljs-attr">handleClick</span>: <span class="hljs-function"><span class="hljs-keyword">function</span> (<span class="hljs-params">event</span>) </span>{
                                    event.preventDefault();
                                },
                            },
                        };
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    ARROW FUNCTION PARAMETER BRACKETS
                </p>
                <p>An arrow function's parameter brackets must be omitted if the function is a one-liner.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        [<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>].map(<span class="hljs-function"><span class="hljs-params">a</span> =&gt;</span> a.toUpperCase());

                        <span class="hljs-comment">// Bad, the parentheses are noisy.</span>
                        [<span class="hljs-string">'a'</span>, <span class="hljs-string">'b'</span>].map(<span class="hljs-function">(<span class="hljs-params">a</span>) =&gt;</span> a.toUpperCase());
                    </code>
                </pre>
                <p>If the arrow function has its own block, parameters must be surrounded by brackets.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good, although according to this style guide you shouldn't be using an</span>
                        <span class="hljs-comment">// arrow function here!</span>
                        <span class="hljs-keyword">const</span> saveUser = <span class="hljs-function">(<span class="hljs-params">user</span>) =&gt;</span> {
                            <span class="hljs-comment">//</span>
                        };

                        <span class="hljs-comment">// Bad</span>
                        <span class="hljs-keyword">const</span> saveUser = <span class="hljs-function"><span class="hljs-params">user</span> =&gt;</span> {
                            <span class="hljs-comment">//</span>
                        };
                    </code>
                </pre>
                <p>If you're writing a higher order function, you should emit the parentheses even if the returned function has braces.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> adder = <span class="hljs-function"><span class="hljs-params">a</span> =&gt;</span> b =&gt; {
                            sum(a, b);
                        };

                        <span class="hljs-comment">// Bad, looks inconsistent in this context.</span>
                        <span class="hljs-keyword">const</span> adder = <span class="hljs-function"><span class="hljs-params">a</span> =&gt;</span> (b) =&gt; {
                            sum(a, b);
                        };
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    OBJECT AND ARRAY DESTRUCTURING
                </p>
                <p>Destructuring is preferred over assigning variables to the corresponding keys.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-comment">// Good</span>
                        <span class="hljs-keyword">const</span> [hours, minutes] = <span class="hljs-string">'12:00'</span>.split(<span class="hljs-string">':'</span>);

                        <span class="hljs-comment">// Bad, unnecessarily verbose, and requires an extra assignment in this case.</span>
                        <span class="hljs-keyword">const</span> time = <span class="hljs-string">'12:00'</span>.split(<span class="hljs-string">':'</span>);
                        <span class="hljs-keyword">const</span> hours = time[<span class="hljs-number">0</span>];
                        <span class="hljs-keyword">const</span> minutes = time[<span class="hljs-number">1</span>];
                    </code>
                </pre>
                <p>Destructuring is very valuable for passing around configuration-like objects.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-js hljs javascript">
                        <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">uploader</span>(<span class="hljs-params">{
                            element,
                            url,
                            multiple = false,
                            beforeUpload = noop,
                            afterUpload = noop,
                        }</span>) </span>{
                            <span class="hljs-comment">// ...</span>
                        }
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    VUE TEMPLATES
                </p>
                <p>If a Vue component has so many props (or listeners, directives, ...) that they don't fit on one line anymore you need to put every prop on its own line. Every line needs to be intended with 4 spaces. The closing <code class="container-fluid__content__code">&gt;</code> goes on a new unintended line followed by the closing tag.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">template</span>&gt;</span>
                            <span class="hljs-comment">&lt;!-- Good --&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">my-component</span> <span class="hljs-attr">myProp</span>=<span class="hljs-string">"value"</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">my-component</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">template</span>&gt;</span>
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">template</span>&gt;</span>
                            <span class="hljs-comment">&lt;!-- Good --&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">my-component</span>
                                <span class="hljs-attr">v-if</span>=<span class="hljs-string">"shouldDisplay"</span>
                                <span class="hljs-attr">myProp</span>=<span class="hljs-string">"value"</span>
                                @<span class="hljs-attr">change</span>=<span class="hljs-string">"handleEvent"</span>
                            &gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">my-component</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">template</span>&gt;</span>
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">template</span>&gt;</span>
                            <span class="hljs-comment">&lt;!-- Bad: wrong indentation, closing `&gt;` is not correct placed --&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">my-component</span>
                                    <span class="hljs-attr">v-if</span>=<span class="hljs-string">"shouldDisplay"</span>
                                    <span class="hljs-attr">myProp</span>=<span class="hljs-string">"value"</span>
                                    @<span class="hljs-attr">change</span>=<span class="hljs-string">"handleEvent"</span>&gt;</span>
                            <span class="hljs-tag">&lt;/<span class="hljs-name">my-component</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">template</span>&gt;</span>
                    </code>
                </pre>
                <h2>
                    Credits
                </h2>
                <p>This style guide is mainly inspired by the <a href="https://github.com/airbnb/javascript">Airbnb JavaScript Style Guide</a>, and <a href="https://github.com/bendc/frontend-guidelines">Benjamin De Cock's frontend guidelines</a>.</p>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset(mix('/js/app.js'))}}"></script>
</html>
