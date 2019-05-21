<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guidelines Techneved:- CSS</title>
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
                    CSS Style Guide
                </h1>
                <h2>
                    Preprocessing
                </h2>
                <p>
                    We use PostCSS with <a href="http://cssnext.io" target="_blank">CSSNext</a>, but these principles are applicable to any pre- or postprocessors out there.
                </p>
                <p class="font-14 font-weight-bold">
                    BEVM
                </p>
                <p>
                    We use a BEM-like syntax with some custom accents. The 'variation' is a concept picked up from <a href="https://webuild.envato.com/blog/chainable-bem-modifiers/" target="_blank">Chainable BEM modifiers</a>
                </p>
                <p>We only use classes for styling, with the following ingredients:</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-css hljs">
                        <span class="hljs-selector-class">.component</span>                      <span class="hljs-comment">/* Component */</span>
                        <span class="hljs-selector-class">.component__element</span>             <span class="hljs-comment">/* Child */</span>
                        <span class="hljs-selector-class">.component__element__element</span>    <span class="hljs-comment">/* Grandchild */</span>

                        <span class="hljs-selector-class">.items</span>                          <span class="hljs-comment">/* Use plurals if possible */</span>
                        <span class="hljs-selector-class">.item</span>

                        <span class="hljs-selector-class">.-modifier</span>                      <span class="hljs-comment">/* Single property modifier, can be chained */</span>

                        <span class="hljs-selector-class">.component--variation</span>           <span class="hljs-comment">/* Standalone variation of a component */</span>
                        <span class="hljs-selector-class">.component__element--variation</span>  <span class="hljs-comment">/* Standalone variation of an element */</span>

                        <span class="hljs-selector-class">.helper-property</span>                <span class="hljs-comment">/* Generic helper grouped by type (eg. `align-right`, `margin-top-s`) */</span>

                        <span class="hljs-selector-class">.js-hook</span>                        <span class="hljs-comment">/* Script hook, not used for styling */</span>
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    .COMPONENT AND .COMPONENT__ELEMENT
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"news"</span>&gt;</span>
                    </code>
                </pre>
                <ul>
                    <li class="container-fluid__content_li">
                        A single reusable component or pattern
                    </li>
                    <li class="container-fluid__content_li">
                        Children are separated with <code class="container-fluid__content__code">__</code>
                    </li>
                    <li class="container-fluid__content_li">
                        All lowercase, can contain <code class="container-fluid__content__code">-</code> in name
                    </li>
                    <li class="container-fluid__content_li">
                        Avoid more than 3 levels deep
                    </li>
                </ul>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"news"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"news__item"</span>&gt;</span>
                                <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"news__item__publish-date"</span>&gt;</span>
                    </code>
                </pre>
                <p>Be descriptive with component elements. Consider <code class="container-fluid__content__code">class="team__member"</code> instead of <code class="container-fluid__content__code">class="team__item"</code></p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"team"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"team__member"</span>&gt;</span>
                    </code>
                </pre>
                <p>You can use plurals &amp; singulars for readability. Consider <code class="container-fluid__content__code">class="member"</code> instead of <code class="container-fluid__content__code">class="members__member"</code></p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"members"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"member"</span>&gt;</span>
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    .-MODIFIER
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button -rounded -active"</span>&gt;</span>
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-css hljs">
                        <span class="hljs-selector-class">.button</span> {
                            &amp;.-rounded {
                                …
                            }

                            &amp;<span class="hljs-selector-class">.-active</span> {
                                …
                            }
                        }
                    </code>
                </pre>
                <ul>
                    <li class="container-fluid__content_li">A modifier changes only simple properties of a component, or adds a property</li>
                    <li class="container-fluid__content_li">Modifiers are <strong>always tied</strong> to a component, don't work on their own (make sure you never write "global" modifier selectors)</li>
                    <li class="container-fluid__content_li">Multiple modifiers are possible. Each modifier is responsible for a property: <code class="container-fluid__content__code">class="alert -success -rounded -large"</code>. If you keep using these modifiers together, consider a <strong>variation</strong> (see below)</li>
                    <li class="container-fluid__content_li">Since modifiers have a single responsibility, the order in HTML or CSS shouldn't matter</li>
                </ul>
                <p class="font-14 font-weight-bold">
                    .COMPONENT--VARIATION
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"button--delete"</span>&gt;</span>
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-css hljs">
                        <span class="hljs-selector-class">.button--delete</span> {
                        <span class="hljs-comment">/* Base button classes */</span>
                        …

                        <span class="hljs-comment">/* Variations */</span>
                        <span class="hljs-attribute">background-color</span>: red;
                        <span class="hljs-attribute">color</span>: white;
                        <span class="hljs-attribute">text-transform</span>: uppercase;
                        }
                    </code>
                </pre>
                <ul>
                    <li class="container-fluid__content_li">A variation adds more than one properties at once to a class, and acts as a shorthand for multiple modifiers often used together</li>
                    <li class="container-fluid__content_li">It's used stand-alone without the need to use the base class <code class="container-fluid__content__code">button</code>
                    </li>
                    <li class="container-fluid__content_li">It's a logical case to use <code class="container-fluid__content__code">@apply</code> here, so the variation can inherit the original modifiers (<strong>under consideration</strong>)</li>
                    <li class="container-fluid__content_li">Even variations should be generic and reusable if possible: <code class="container-fluid__content__code">class="team--large"</code> is better than <code class="container-fluid__content__code">class="team--management"</code>
                    </li>
                </ul>
                <p class="font-14 font-weight-bold">
                    .HELPER-PROPERTY
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"align-right"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"visibility-hidden"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"text-ellipsis"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"margin-top-s"</span>&gt;</span>
                    </code>
                </pre>
                <ul>
                    <li class="container-fluid__content_li">Reusable utility classes throughout the entire project</li>
                    <li class="container-fluid__content_li">Prefixed by type (= the property that will be effected)</li>
                    <li class="container-fluid__content_li">Each helper class is responsible for a well-defined set of properties. It should be clear that these are not components</li>
                </ul>
                <p class="font-14 font-weight-bold">
                    .JS-HOOK
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"js-map …"</span>
                             <span class="hljs-attr">data-map-icon</span>=<span class="hljs-string">"url.png"</span>
                             <span class="hljs-attr">data-map-lat</span>=<span class="hljs-string">"4.56"</span>
                             <span class="hljs-attr">data-map-lon</span>=<span class="hljs-string">"1.23"</span>&gt;</span>
                    </code>
                </pre>
                <ul>
                    <li class="container-fluid__content_li">Use <code class="container-fluid__content__code">js-hook</code> to initiate handlers like <code class="container-fluid__content__code">document.getElementsByClassName('js-hook')</code>
                    </li>
                    <li class="container-fluid__content_li">Use <code class="container-fluid__content__code">data-attributes</code> only for data storage or configuration storage</li>
                    <li class="container-fluid__content_li">Has no effect on styling whatsoever</li>
                </ul>
                <h2>
                    DOM structure
                </h2>
                <ul>
                    <li class="container-fluid__content_li">All styling is done by classes (except for HTML that is out of our control)</li>
                    <li class="container-fluid__content_li">Avoid #id's for styling</li>
                    <li class="container-fluid__content_li">Make elements easily reusable, moveable in a project, or between projects</li>
                    <li class="container-fluid__content_li">Avoid multiple components on 1 DOM-element. Break them up.</li>
                </ul>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-comment">&lt;!-- Try to avoid, news padding or margin could break the grid--&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"grid__col -1/2 news"</span>&gt;</span>
                            …
                        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>

                        <span class="hljs-comment">&lt;!-- More flexible, readable &amp; moveable --&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"grid__col -1/2"</span>&gt;</span>
                            <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"news"</span>&gt;</span>
                                …
                            <span class="hljs-tag">&lt;/<span class="hljs-name">article</span>&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                    </code>
                </pre>
                <p>Tags are interchangeable since styling is done by class.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-comment">&lt;!-- All the same --&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"article"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">section</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"article"</span>&gt;</span>
                        <span class="hljs-tag">&lt;<span class="hljs-name">article</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"article"</span>&gt;</span>
                    </code>
                </pre>
                <p>Html tags that are out of control (eg. the output of an editor) are scoped by the component.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"article"</span>&gt;</span>
                        <span class="hljs-comment">&lt;!-- custom html output --&gt;</span>
                        <span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
                    </code>
                </pre>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-css hljs">
                        <span class="hljs-selector-class">.article</span> {
                            <span class="hljs-comment">/* Tag instead of class here */</span>
                            &amp; h2 {
                                …
                            }

                            &amp; <span class="hljs-selector-tag">p</span> {
                                …
                            }
                        }
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    CLASS ORDER
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"js-hook component__element -modifier helper"</span>&gt;</span>
                    </code>
                </pre>
                <p>Visual class grouping can be done with <code class="container-fluid__content__code">… | …</code>:</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-html hljs xml">
                        <span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"js-masonry | news__item -blue -small -active | padding-top-s align-right"</span>&gt;</span>
                    </code>
                </pre>
                <h2>
                    Code style
                </h2>
                <p>We use <a href="https://github.com/stylelint/stylelint" target="_blank">stylelint</a> to lint our stylesheets.
                    Configuration is done a custom <code class="container-fluid__content__code">.stylelintrc</code> which extends <code class="container-fluid__content__code">stylelint-config-standard</code>.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs json">
                        {
                          <span class="hljs-attr">"extends"</span>: <span class="hljs-string">"stylelint-config-standard"</span>,
                          <span class="hljs-attr">"ignoreFiles"</span>: <span class="hljs-string">"resources/assets/css/vendor/*"</span>,
                          <span class="hljs-attr">"rules"</span>: {
                              <span class="hljs-attr">"indentation"</span>: [<span class="hljs-number">4</span>],
                              <span class="hljs-attr">"at-rule-empty-line-before"</span>: <span class="hljs-literal">null</span>,
                              <span class="hljs-attr">"number-leading-zero"</span>: <span class="hljs-literal">null</span>,
                              <span class="hljs-attr">"selector-pseudo-element-colon-notation"</span>: <span class="hljs-string">"single"</span>,
                            }
                        }
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    INSTALLATION
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs nginx">
                        <span class="hljs-attribute">yarn</span> add stylelint
                        yarn add stylelint-config-standard
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    USAGE
                </p>
                <p>Most projects have a lint script (with the <code class="container-fluid__content__code">--fix</code> flag) available in their <code class="container-fluid__content__code">package.json</code>.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs nginx">
                        <span class="hljs-attribute">stylelint</span> resources/assets/css/**/*<span class="hljs-regexp">*.css</span> --fix -r
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    EXAMPLES
                </p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-css hljs">
                        <span class="hljs-comment">/* Comment */</span>

                        <span class="hljs-selector-class">.component</span> {                      <span class="hljs-comment">/* Indent 4 spaces, space before bracket */</span>
                            @at-rule …;                   <span class="hljs-comment">/*  @at-rules first */</span>

                            <span class="hljs-attribute">a-property</span>: value;            <span class="hljs-comment">/* Props sorted automatically by eg. PostCSS-sorting */</span>
                            <span class="hljs-attribute">b-property</span>: value;
                            <span class="hljs-attribute">c-property</span>: .<span class="hljs-number">45em</span>;            <span class="hljs-comment">/* No leading zero's */</span>

                            &amp;:hover {                     <span class="hljs-comment">/* Pseudo class */</span>
                                …
                            }

                            &amp;<span class="hljs-selector-pseudo">:before</span>,                     <span class="hljs-comment">/* Pseudo-elements */</span>
                            &amp;<span class="hljs-selector-pseudo">:after</span> {                     <span class="hljs-comment">/* Each on a line */</span>
                                …
                            }

                            &amp;<span class="hljs-selector-class">.-modifier</span> {
                                …
                            }

                            &amp;<span class="hljs-selector-class">.-modifier2</span> {
                                …
                            }

                            <span class="hljs-comment">/* Try to avoid */</span>

                            @<span class="hljs-keyword">apply</span> …;                     <span class="hljs-comment">/* Use only for variations */</span>

                            &amp;_<span class="hljs-selector-tag">subclass</span> {                  <span class="hljs-comment">/* Unreadable and not searchable */</span>
                                …
                            }

                            <span class="hljs-selector-tag">h1</span> {                          <span class="hljs-comment">/* Avoid unless you have no control over the HTML inside the `.component` */</span>
                                …
                            }

                        }
                                                          <span class="hljs-comment">/* Line between classes */</span>
                        <span class="hljs-selector-class">.component--variation</span> {           <span class="hljs-comment">/* A component with few extra modifications often used together */</span>
                            @apply .component;            <span class="hljs-comment">/* Only good use for @apply */</span>
                            …
                        }

                        <span class="hljs-selector-class">.component__element</span> {             <span class="hljs-comment">/* Separate class for readability, searchability instead of `&amp;__element`*/</span>
                            …
                        }

                    </code>
                </pre>
                <h2>
                    File structure
                </h2>
                <p>We typically use 5 folders and a main <code class="container-fluid__content__code">app.css</code> file:</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs sql">
                        |<span class="hljs-comment">-- base       : basic html elements</span>
                        |<span class="hljs-comment">-- components : single components</span>
                        |<span class="hljs-comment">-- helpers    : helper classes</span>
                        |<span class="hljs-comment">-- settings   : variables</span>
                        |<span class="hljs-comment">-- vendor     : custom files from 3rd party components like fancybox, select2 etc.</span>
                        `<span class="hljs-comment">-- app.css    : main file</span>
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    APP.CSS
                </p>
                <ul>
                    <li class="container-fluid__content_li">We use <code class="container-fluid__content__code">postcss-easy-import</code> for glob imports</li>
                    <li class="container-fluid__content_li">Source order shouldn't matter, except for order of folders: import npm libraries, settings or utilities first</li>
                    <li class="container-fluid__content_li">Import is done by glob pattern so files can be added easily</li>
                </ul>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="language-css hljs">
                        @<span class="hljs-keyword">import</span> <span class="hljs-string">'settings/**/*'</span>;
                        @<span class="hljs-keyword">import</span> <span class="hljs-string">'base/**/*'</span>;
                        @<span class="hljs-keyword">import</span> <span class="hljs-string">'components/**/*'</span>;
                        @<span class="hljs-keyword">import</span> <span class="hljs-string">'helpers/**/*'</span>;
                        @<span class="hljs-keyword">import</span> <span class="hljs-string">'vendor/**/*'</span>;
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    BASE FOLDER
                </p>
                <p>Contains resets and sensible defaults for basic html elements.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs sql">
                        |<span class="hljs-comment">-- universal.css</span>
                        |<span class="hljs-comment">-- html.css</span>
                        |<span class="hljs-comment">-- a.css</span>
                        |<span class="hljs-comment">-- p.css</span>
                        |<span class="hljs-comment">-- heading.css (h1, h2, h3)</span>
                        |<span class="hljs-comment">-- list.css (ul, ol, dl)</span>
                        `<span class="hljs-comment">-- …</span>
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    COMPONENTS FOLDER
                </p>
                <p>Stand-alone reusable components with their modifiers and variations.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs sql">
                        |<span class="hljs-comment">-- alert.css</span>
                        |<span class="hljs-comment">-- avatar.css</span>
                        `<span class="hljs-comment">-- …</span>
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    HELPERS FOLDER
                </p>
                <p>Stand-alone helper classes for small layout issues.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs sql">
                        |<span class="hljs-comment">-- align.css</span>
                        |<span class="hljs-comment">-- margin.css</span>
                        |<span class="hljs-comment">-- padding.css</span>
                        `<span class="hljs-comment">-- …</span>
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    SETTINGS FOLDER
                </p>
                <p>Settings for colors, breakpoints, typography, etc. You can start small with one <code class="container-fluid__content__code">settings.css</code> and split them up into different files if your variables grow.</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs sql">
                        |<span class="hljs-comment">-- breakpoint.css</span>
                        |<span class="hljs-comment">-- color.css</span>
                        |<span class="hljs-comment">-- grid.css</span>
                        `<span class="hljs-comment">-- …</span>
                    </code>
                </pre>
                <p class="font-14 font-weight-bold">
                    VENDOR FOLDER
                </p>
                <p>Imported and customized CSS from 3rd party components (this is the syntactical Wild West, you probably don't want to lint this).</p>
                <pre class="container-fluid__content_pre" style="padding-top: 20px">
                    <code class="hljs sql">
                        |<span class="hljs-comment">-- pikaday.css</span>
                        |<span class="hljs-comment">-- select2.css</span>
                        `<span class="hljs-comment">-- …</span>
                    </code>
                </pre>
                <h2>
                    Inspiration
                </h2>
                <ul>
                    <li>
                        <a href="https://csswizardry.com" target="_blank">CSS Wizardry</a>
                    </li>
                    <li>
                        <a href="https://webuild.envato.com/blog/chainable-bem-modifiers/" target="_blank">Chainable BEM modifiers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset(mix('/js/app.js'))}}"></script>
</html>
