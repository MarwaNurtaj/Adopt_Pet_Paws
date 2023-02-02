<?php include 'header.php'; ?>
<style>
    .signup-form {
        width: 400px;
        margin: 0 auto;
        background: #0491b8;
        padding: 30px;
        border: 1px solid #ccc;
        text-align: center;

    }
</style>
<section class="signup-form">
    <h2>Sign Up</h2>
    <br>
    <p>Create your account</p>
    <form action="includes/signup.inc.php" method="post"><br>
        <br> <input type="text" name="name" placeholder="Full name..">
        <br><br> <input type="text" name="email" placeholder="Email..">
        <br> <br> <input type="text" name="uid" placeholder="Username..">
        <br><br> <input type="password" name="pwd" placeholder="Password..">
        <br> <br> <input type="password" name="pwdrepeat" placeholder="Repeat password..">
        <br><br> <button type="submit" name="submit">Sign Up</button>
        <br> <br>
    </form>

    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }

    ?>

</section>


<?php include 'footer.php'; ?>