<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        margin: 0;
        height: 2000px;
    }


    
    .icon-bar {
        position: fixed;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .icon-bar a {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        color: white;
        font-size: 20px;
    }

    .icon-bar a:hover {
        background-color: #000;
    }

    .facebook {
        background: #3B5998;
        color: white;
    }

    .twitter {
        background: #55ACEE;
        color: white;
    }

    .google {
        background: #dd4b39;
        color: white;
    }

    .linkedin {
        background: #007bb5;
        color: white;
    }

    .youtube {
        background: #bb0000;
        color: white;
    }

    .content {
        margin-left: 75px;
        font-size: 30px;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

<?php
$videoURL = "https://www.youtube.com/watch?v=h9cb1P7oxGU";
$convertedURL = str_replace("watch?v=", "embed/", $videoURL);
?>

<body>


<?php include 'header.php'; ?>

    <div class="icon-bar">
        <a href="https://www.facebook.com/PetPagesFB/" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>

    <div class="content">
        <h1 style="text-align:center; color: #007bb5;">About Us </h1>
        <br>
        <P>Here you can find all the cute pets you want to Adopt.We are a small, non-profit animal rescue organization
            located in central Florida that provides sanctuary for and specializes in caring for largely non-adoptable
            stray cats and dogs. Most are either old, have medical problems, are feral, or have behavior problems that
            has precluded them from being adopted.

            Our organization consists of all volunteers and relies solely on public donations to buy food and to provide
            medical care for the animals. 100% of all donations go to help the animals. There are no employees, no
            administration fees and no professional fund-raisers to pay.</P>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $convertedURL; ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <P>Here you can find all the cute pets you want to Adopt.We are a small, non-profit animal rescue organization
            located in central Florida that provides sanctuary for and specializes in caring for largely non-adoptable
            stray cats and dogs. Most are either old, have medical problems, are feral, or have behavior problems that
            has precluded them from being adopted.

            Our organization consists of all volunteers and relies solely on public donations to buy food and to provide
            medical care for the animals. 100% of all donations go to help the animals. There are no employees, no
            administration fees and no professional fund-raisers to pay.</P>

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