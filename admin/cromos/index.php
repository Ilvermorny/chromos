<!DOCTYPE html>
<html lang="en">

<head>
    

    <title>Cromos creados</title>

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
    <div class="container pt-3 pb-3 ">
        
        <div class="card mt-3 mx-auto" style="width: 18rem;">
            <img src="<?= $chromo['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $chromo['name']; ?></h5>
                <p class="card-text"><?= $chromo['description']; ?></p>
            </div>
        </div>
    </div>

    <footer class="mt-auto py-3" style="background-color: #f5f5f5;">
        <div class="container m-auto text-center">
            <span class="text-muted">
                Made with <i class="fas fa-heart" style="color: red;"></i>
            </span>
        </div>
    </footer>
    <!-- Add js files -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html> 