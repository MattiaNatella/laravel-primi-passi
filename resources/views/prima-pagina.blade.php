<!DOCTYPE html>
<html lang="en">

<head>
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima pagina</title>
</head>

<header>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/prima-pagina">Prima Pagina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/seconda-pagina">Seconda Pagina</a>
            </li>
        </ul>
    </nav>
</header>

<body>
    <h1>Benvenuto nella prima pagina</h1>
    <h2>{{$informazioni}}</h2>
</body>

</html>