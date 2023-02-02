<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/style.css" rel="stylesheet">
    <!-- <style>
        a {
            color: #fff;
        }
    </style> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <a class="navbar-brand me-auto" href="#"><img height="30px" src="images/logooo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="pets.php">Pets</a>
                    </li>


                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li ><a class='nav-link ' href='users.php'>User Page</a></li>";
                        echo "<li ><a class='nav-link ' href='includes/logout.inc.php'>Log out</a></li>";
                    } else {
                        echo "<li ><a class='nav-link ' href='signup.php'>Sign Up</a></li>";
                        echo "<li ><a class='nav-link ' href='login.php'>Log in</a></li>";
                    }

                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>


</body>

</html>