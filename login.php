<?php include 'header.php'; ?>

<style>
    .login-form {
        width: 400px;
        margin: 0 auto;
        background: #0491b8;
        padding: 30px;
        border: 1px solid #ccc;
        text-align: center;
    }
</style>

<section class="login-form">
    <h2>Log in</h2><br>
    <p>Log in to your account</p>
    
    <form action="includes/login.inc.php" method="post">
        <br>
        <input type="text" name="uid" placeholder="Username/Email..">
        <br><br> <input type="password" name="pwd" placeholder="Password..">

        <br><br> <button type="submit" name="submit">Log in</button>
        <br> <br>
    </form>
    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } 
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    }
    ?>
</section>


<?php include 'footer.php'; ?>