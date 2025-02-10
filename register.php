<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .nav-item { font-size: 20px; }
        #usernameStatus { font-weight: bold; }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3" data-bs-theme="dark" style="background-color: #0b1521 !important;">
            <div class="container">
                <a class="navbar-brand" href="index.php" style="padding: 10px 20px;">
                    <i class="bi bi-joystick me-2" style="color: #3b78e6; font-size: 30px;"></i>
                    <strong>GAMESTART</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="store.php">Store</a></li>
                        <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item"><a class="nav-link text-primary" href="fr_product.php">For Admin</a></li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary d-flex align-items-center ps-3 pt-0 pb-0 pe-3 rounded-pill">
                                <a class="nav-link text-light active" href="fr_login.php"><strong>Login</strong></a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main style="background-image: linear-gradient(rgba(11, 21, 33, 1), rgba(11, 21, 33, 0.8),rgba(11, 21, 33, 1)), url(images/scifi-1.jpg); background-size: cover; background-position: top; min-height:700px">
        <div class="container pt-5 text-light">
            <h1>Register</h1>
            <form id="registerForm" action="register_db.php" method="POST">
                <div class="col-md-6 mt-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Enter your username" name="username" id="username" onkeyup="checkUsername()"required>
                    <small id="usernameStatus"></small>
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" id="submitBtn" class="btn btn-primary rounded-pill me-2">Register</button>
                    <input class="btn btn-danger me-2 fs-6 rounded-pill" type="reset" value="Reset">
                </div>
            </form>
        </div>
    </main>

    <script>
                function checkUsername() {
                const username = document.getElementById("username").value;
            
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "check_username.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        document.getElementById("usernameStatus").innerHTML = xhr.responseText;
                    }
                };
            
                xhr.send("username=" + username);
            }

    </script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
