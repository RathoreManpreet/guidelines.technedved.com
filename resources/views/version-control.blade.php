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
                    Version Control
                </h1>
                <p>
                    All our projects use Git, mostly with a repository hosted on GitHub. Since we're a small team, and most projects have less than 4 people working on it simultaneously, we have pretty loose Git guidelines since we rarely bump into conflicts.
                </p>
            
                <h2>
                    Repo naming conventions
                </h2>
                <p>
                        If the repo contains the source code of a site its name should be the main naked domain name of that site. It should be lowercased.
                </p>
                <ul>
                    <li class="container-fluid__content_li">
                            Bad : <code class="container-fluid__content__code code__bad">https://www.techneved.com</code>, 
                            <code class="container-fluid__content__code code__bad">www.techneved.com</code>
                            <code class="container-fluid__content__code code__bad">Techneved.com</code>
                    </li>
                    <li class="container-fluid__content_li">
                            Good : <code class="container-fluid__content__code code__good">techneved.com</code>
                    </li>
                </ul>

                <p>
                    Sites that are hosted on a subdomain may use that subdomain in their name
                </p>
                <ul>
                    <li class="container-fluid__content_li">
                            Bad : <code class="container-fluid__content__code code__bad">techneved.com-guidelines</code>
                    </li>
                    <li class="container-fluid__content_li">
                            Good : <code class="container-fluid__content__code code__good">guidelines.techneved.com</code>
                    </li>
                </ul>

                <p>
                    If the repo concerns something else, for example a package, its name should be kebab-cased.
                </p>
                <ul>
                    <li class="container-fluid__content_li">
                            Bad : <code class="container-fluid__content__code code__bad">LaravelBackup</code>
                    </li>
                    <li class="container-fluid__content_li">
                            Good : <code class="container-fluid__content__code code__good">laravel-backup</code>
                    </li>
                </ul>
                <h2>
                    Branches
                </h2>
                <p>
                    If you're going to remember one thing in this guide, remember this: <strong>  Once a project has gone live, the master branch must always be stable.</strong> It should be safe to deploy the master branch to production at all times. All branches are assumed to be active; stale branches should get cleaned up accordingly.
                </p>
                <p class="font-14 font-weight-bold">
                    PROJECTS IN INITIAL DEVELOPMENT
                </p>
                <p>
                    Projects that aren't live yet have at least two branches: <code class="container-fluid__content__code">master</code> and <code class="container-fluid__content__code">develop</code>. Avoid committing directly on the master branch, always commit through develop.
                </p>
                <p>
                    Feature branches are optional, if you'd like to create a feature branch, make sure it's branched from <code class="container-fluid__content__code">develop</code>, not <code class="container-fluid__content__code">master</code>.
                </p>

                <p class="font-14 font-weight-bold">
                    LIVE PROJECTS
                </p>
                <p>
                        Once a project goes live, the <code class="container-fluid__content__code">develop</code> branch gets deleted. All future commits to <code class="container-fluid__content__code">master</code> must be added through a feature branch. In most cases, it's preferred to squash your commits on merge.
                </p>
                <p>
                        There's no strict ruling on feature branch names, just make sure it's clear enough to know what they're for. Branches may only contain lowercase letters and hyphens.
                </p>
                <ul>
                    <li class="container-fluid__content_li">
                            Bad : <code class="container-fluid__content__code code__bad">feature/mailchimp</code>,
                                    <code class="container-fluid__content__code code__bad">random-things</code>,
                                    <code class="container-fluid__content__code code__bad">develop</code>
                    </li>
                    <li class="container-fluid__content_li">
                            Good : <code class="container-fluid__content__code code__good">feature-mailchimp</code>,
                            <code class="container-fluid__content__code code__good">fix-deliverycosts</code>
                    </li>
                </ul>

                <p class="font-14 font-weight-bold">
                        PULL REQUESTS
                </p>
                <p>
                        Merging branches via GitHub pull requests isn't a requirement, but can be useful if:
                </p>
                <ul>
                    <li class="container-fluid__content_li">
                            You want a peer to review your changes
                    </li>
                    <li class="container-fluid__content_li">
                            You want to ensure your branch can be merged and commits can be squashed via an interface
                    </li>
                    <li class="container-fluid__content_li">
                            Future you wants a quick way to retrieve that point in history by browsing passed pull requests
                    </li>
                </ul>

                <p class="font-14 font-weight-bold">
                        MERGING AND REBASING
                </p>
                <p>
                    Ideally, rebase your branch regularly to reduce the chance of merge conflicts.
                </p>
                <ul>
                    <li class="container-fluid__content_li">
                            If you want to deploy a feature branch to master, use <code class="container-fluid__content__code"> git merge <branch> --squash</code>
                    </li>
                    <li class="container-fluid__content_li">
                            If your push is denied, rebase your branch first using <code class="container-fluid__content__code">git rebase</code>
                    </li>
                    <li class="container-fluid__content_li">
                            Future you wants a quick way to retrieve that point in history by browsing passed pull requests
                    </li>
                </ul>

                <p class="font-14 font-weight-bold">
                    Commits
                </p>
                <p>
                        There's not strict ruling on commits in projects in initial development, however, descriptive commit messages are recommended. After a project has gone live, descriptive commit messages are required. Always use present tense in commit messages.
                </p>
                <ul>
                    <li class="container-fluid__content_li">
                            Non-descriptive: <code class="container-fluid__content__code"> wip</code>,
                            <code class="container-fluid__content__code">a lot</code>,
                            <code class="container-fluid__content__code">solid</code>
                    </li>
                    <li class="container-fluid__content_li">
                            Descriptive: <code class="container-fluid__content_code">Update deps</code>,
                            <code class="container-fluid__content_code">Fix vat calculation in delivery costs</code>
                           
                    </li>
                    <li class="container-fluid__content_li">
                            Future you wants a quick way to retrieve that point in history by browsing passed pull requests
                    </li>
                </ul>

            </div>
        </div>
       
    </div>
</div>
</body>
<script src="{{asset(mix('/js/app.js'))}}"></script>
</html>