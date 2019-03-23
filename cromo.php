<?php
define("IN_MYBB", 1);
require("../global.php");
require("./utils.php");

if (isset($_GET['id']) and is_numeric($_GET['id'])) {
    $chromo = getchromo($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'templates/head.php'; ?>

    <meta property="og:title" content="Cromo de <?= $chromo['name']; ?>" />
    <meta property="og:type" content="chromo.detail" />
    <meta property="og:image" content="<?= $chromo['image']; ?>" />


    <title>Viendo el cromo de <?= $chromo['name']; ?></title>

</head>

<body>
    <!-- Include header in each subsystem -->
    <?php include 'templates/navigation.php'; ?>
    <div class="container pt-3 pb-3 ">
        <h1 class="text-center">Cromo de <?= $chromo['name']; ?></h1>
        <?php if (isset($_GET['random'])) : ?>
            <p class="text-center">¡Felicidades por el cromo obtenido!</p>
        <?php endif; ?>

        <div class="card mt-3 mx-auto" style="width: 400px;">
            <img src="<?= $chromo['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $chromo['name']; ?></h5>
                <p class="card-text"><?= $chromo['description']; ?></p>
            </div>
        </div>
    </div>



</body>

</html> 