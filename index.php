<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .nav-item {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3" data-bs-theme="dark" style="background-color: #0b1521
                !important;">
            <div class="container">
                <a class="navbar-brand" href="index.php" style="padding: 10px
                        20px;">
                    <i class="bi bi-joystick me-2" style="color: #3b78e6;
                            font-size: 30px;"></i>
                    <strong>GAMESTORE</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="store.php">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="fr_product.php">For Admin</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary
                                    d-flex align-items-center ps-3 pt-0 pb-0
                                    pe-3 rounded-pill">
                                <a class="nav-link text-light" href="login.php"><strong>Login</strong></a>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary
                                    d-flex align-items-center ps-3 pt-0 pb-0
                                    pe-3 rounded-pill">
                                <a class="nav-link text-light" href="logout.php"><strong>Logout</strong></a>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary
                                    d-flex align-items-center ps-3 pt-0 pb-0
                                    pe-3 rounded-pill">
                                <a class="nav-link text-light" href="register.php"><strong>Register</strong></a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main style="background-image: linear-gradient(rgba(0, 0, 0,
            0.2),rgba(0, 0, 0, 0.2),rgba(11, 21, 33, 0.5), rgba(11, 21, 33, 1)),
            url(images/img1.jpg); background-size: cover; height: 600px;
            background-position: top;">
        <div class="container text-center pt-5">
            <h1 class="display-1 text-light mt-5 pt-5"><strong>Game Store</strong></h1>
            <?php if (isset($_SESSION['username'])) : ?>
                <p class="text-light">Welcome <?php echo $_SESSION['username']; ?></p>
            <?php endif ?>
            <p class="text-light h4">Discover games you will love</p>
            <button type="button" class="btn btn-primary mt-5 pt-2 pb-2 ps-3
                    pe-3 rounded-pill"><a href="store.php" class="text-light
                        text-decoration-none"><strong>Start Exploring</strong></a></button>
        </div>
        </div>
    </main>
    <section style="background-color: #0b1521;">
        <div class="container pt-5 pb-5">
            <span class="d-flex justify-content-left align-items-center pt-5">
                <i class="bi bi-award-fill text-primary me-3"></i>
                <h4 class="text-light">WE RECOMMEND</h4>
            </span>
            
                
            </div>
            <div class="container pt-5 pb-5">
                <span class="d-flex justify-content-left align-items-center
                    pt-5">
                    <i class="bi bi-columns-gap text-primary me-3"></i>
                    <h4 class="text-light">GENRE</h4>
                </span>
                <table class="table text-light text-center table-borderless
                    mt-4 ms-0" style="background-color: #091b29; max-width: 60rem;">
                    <tr>
                        <td>Action</a></td>
                        <td>Adventure</a></td>
                        <td>Casual</a></td>
                    </tr>
                    <tr>
                        <td>Indie</a></td>
                        <td>Racing</a></td>
                        <td>RPG</a></td>
                    </tr>
                    <tr>
                        <td>Simulation</a></td>
                        <td>Sports</a></td>
                        <td>Strategy</a></td>
                    </tr>
                </table>
            </div>
    </section>
    <section style="background-color: #0b1521;">
        <div class="container pt-0 pb-5 mt-e">
            <div class="row col-sm-10 align-items-center justify-content-end ms-0 ps-0 rounded" style="background-color: #091b29;">

            </div>
        </div>
        <footer class="text-center text-white m-0" style="background-color:
            #091b29">
            <div class="container">
                <hr class="my-5">
                <section class="mb-0">
                    <div class="row d-flex justify-content-center">
                
                    </div>
                </section>
            </div>
        </footer>
    </section>
</body>

</html>