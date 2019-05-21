<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guidelines Techneved:- New Project Setup</title>
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
                            New Project Setup
                        </h1>
                        <h2>Git Repository</h2>
                        <p>
                            Create a repository on the Techneved organization on GitHub using the repo naming rules.
                        </p>
                        <p>
                           Example <code class="container-fluid__content__code">techneved/guidelines.techneved.tv</code>
                        </p>
                        <p>Lastly, update the <code class="container-fluid__content__code">.env.example</code> file with values relevant to the project.</p>
                        
                        <h2>
                            Server
                        </h2>
                        <ol>
                            <li class="container-fluid__content_li">
                                Provision a new server. Use a kebab-cased version of the domain name for the droplet 
                                ( Example <code class="container-fluid__content__code">guidelines-techneved-tv</code> )
                            </li>
                            <li class="container-fluid__content_li">
                                Create a new site with root
                                ( Example <code class="container-fluid__content__code">/current/public</code> )
                            </li>
                            <li class="container-fluid__content_li">
                                Ensure the name of the database makes sense
                            </li>
                            <li class="container-fluid__content_li">
                                Update the relevant .env variables
                                ( <code class="container-fluid__content__code">.env</code> )
                            </li>
                            <li class="container-fluid__content_li">
                                    Enable backups for the project
                            </li>
                            
                        </ol>
            </div>
        </div>
       
    </div>
</div>
</body>
<script src="{{asset(mix('/js/app.js'))}}"></script>
</html>