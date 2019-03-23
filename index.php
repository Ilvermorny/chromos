<?php

define("IN_MYBB", 1);
require("../global.php");
require("./utils.php");

$isavailable = isavailable($mybb->user['uid']);

if ($isavailable === 1) {
    header("Location: obtener.php");
    die();
}
$chromos = getChromos($mybb->user['uid']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'templates/head.php'; ?>

    <meta property="og:title" content="Cromos de <?= $mybb->user['username']; ?>" />
    <meta property="og:type" content="chromo.list" />
    <meta property="og:image" content="<?= $mybb->user['avatar']; ?>" />


    <title>Cromos de <?= $mybb->user['username']; ?></title>

</head>

<body>
    <!-- Include header in each subsystem -->
    <?php include 'templates/navigation.php'; ?>
    <div class="container pt-3 pb-3 ">
        <div class="card-columns">
            <?php while ($chromo = $db->fetch_array($chromos)) : ?>
            <div class="card mt-3 mx-auto" style="max-width: 400px;">
                <img src="<?= $chromo['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $chromo['name']; ?></h5>
                    <p class="card-text"><?= $chromo['description']; ?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

    </div>



</body>

</html> 