<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Index_Page</title>
    <link href="css/style.css" rel="stylesheet">


</head>

<body>

    <?php include 'header.php'; ?>

    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<h1 style='text-align:center'> Hello " . $_SESSION["username"] . "!</h1>";
    }

    ?>

    <h2 style="text-align:center">Welcome to our pet Gallery</h2>

    <div id="carouselExampleCaptions" class="carousel slide container ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/cat_ban.jpg" class="d-block " style="width:60% ;margin:0 auto;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pet Cats</h5>
                    <p>Some  cute pets you want to Adopt.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/pet-nav.jpg" class="d-block" style="width:60% ;margin:0 auto;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pet Dogs</h5>
                    <p>Some  cute Dogs you want to Adopt.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ban1.jpg" class="d-block" style="width:60% ;margin:0 auto;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>DOG CAT</h5>
                    <p>Some  cute pets you want to Adopt.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="detail_text">
        <h1>Welcome To Explore All The Cute PawPaws </h1>
        <br>
        <P>Here you can find all the cute pets you want to Adopt.We are a small, non-profit animal rescue organization
            located in central Florida that provides sanctuary for and specializes in caring for largely non-adoptable
            stray cats and dogs. Most are either old, have medical problems, are feral, or have behavior problems that
            has precluded them from being adopted.

            Our organization consists of all volunteers and relies solely on public donations to buy food and to provide
            medical care for the animals. 100% of all donations go to help the animals. There are no employees, no
            administration fees and no professional fund-raisers to pay.</P>
        <br>

        <P>Here you can find all the cute pets you want to Adopt.We are a small, non-profit animal rescue organization
            located in central Florida that provides sanctuary for and specializes in caring for largely non-adoptable
            stray cats and dogs. Most are either old, have medical problems, are feral, or have behavior problems that
            has precluded them from being adopted.

            Our organization consists of all volunteers and relies solely on public donations to buy food and to provide
            medical care for the animals. 100% of all donations go to help the animals. There are no employees, no
            administration fees and no professional fund-raisers to pay.</P>
        <br>
        <P>Here you can find all the cute pets you want to Adopt.We are a small, non-profit animal rescue organization
            located in central Florida that provides sanctuary for and specializes in caring for largely non-adoptable
            stray cats and dogs. Most are either old, have medical problems, are feral, or have behavior problems that
            has precluded them from being adopted.
            Our organization consists of all volunteers and relies solely on public donations to buy food and to provide
            medical care for the animals. 100% of all donations go to help the animals. There are no employees, no
            administration fees and no professional fund-raisers to pay.</P>
    </div>


    <?php include 'footer.php'; ?>

</body>

</html>