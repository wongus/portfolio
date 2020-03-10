<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="MDB/css/mdb.css">
    <link rel="stylesheet" type="text/css" href="hamburgers/dist/hamburgers.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Document</title>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-md">
    <a class="navbar-brand" href="/">Wongus</a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/prototype">Prototype</a>
            </li>
        </ul>
    </div>
</nav>

@yield ('content')

<script src="app.js"></script>
<script type="text/javascript" src="MDB/js/mdb.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
<script> new WOW().init();</script>
</body>
</html>
