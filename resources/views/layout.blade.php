<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Instagram Project</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        #loading-indicator {
            position:fixed;
            left:50%;
            top:50%;
            transform: translate(-50%, -50%);
        }
        .hidden {
            display: none;
        }
        </style>
        <!-- Custom styles for this template -->
        <link href="css/album.css" rel="stylesheet">
    </head>
    <body>

        <header>
            @include ('layouts.nav')
        </header>
        
        <main role="main">
            @yield ('content')
        </main>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/insta.js') }}"></script>
        <img src="{{ asset('ajax-loader.gif') }}" id="loading-indicator" style="display:none" />
    </body>
</html>
