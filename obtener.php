<?php
define("IN_MYBB", 1);
require("../global.php");
require("./utils.php");
$isavailable = isavailable($mybb->user['uid']);
$available = available($mybb->user['uid']);

if ($isavailable !== 1) {
    header("Location: index.php");
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $chromo = randomChromo($available['type']);
    setChromo($mybb->user['uid'], $chromo['id'], $available['id']);
    header("Location: cromo.php?id=" . $chromo['id'] . '&random=true');
    die();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://i.imgur.com/oaFGEuR.png" type="image/png">
    <!-- Add css files-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Obteniendo un cromo aleaorio para <?= $mybb->user['username']; ?></title>

</head>

<body>
    <!-- Include header in each subsystem -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://ilvermorny.xyz/">Ilvermorny</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
            </ul>
            <span class="navbar-text">
                Cartera de Cromos
            </span>
        </div>
    </nav>
    <div class="container pt-3">
        <p>
            Presiona en el botón para elegir un cromo de manera aleatoria. <br>
            Recuerda que este proceso es irreversible. Y (por el momento) no podrás cambiar el cromo que obtengas en la seleción
        </p>

        <form action="obtener.php" method="post">
            <button type="submit" class="btn btn-primary mb-2">Seleccionar</button>
        </form>
    </div>
    <!-- Add js files -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>

</html> 