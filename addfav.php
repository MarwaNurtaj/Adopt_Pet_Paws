<?php 

include 'header.php';
include 'includes/dbh.inc.php';



if (isset($_SESSION["useruid"])) {
    echo "<h1 style='text-align:center'> Hello " . $_SESSION["username"] . "!</h1>";
}



$flag = 0;

if (isset($_POST['submit'])) {
    $result = mysqli_query($conn, "insert into pet_mark(user_id	, pet_type , marking) values ('$_SESSION[useruid]','$_POST[pt]','$_POST[pm]')");
    if ($result) {
        $flag = 1;
    }

}


?>


<div class="panel panel-default">
    <div class="panel-heading">
        <h2>

            <a style="background-color: aqua;" href="addfav.php"> Favorite Marking</a>
            <a class="btn btn-info pull-right" href="users.php"> Back</a>
        </h2>

    </div>

    <?php if ($flag) { ?>
        <div class="alert alert-success">User Successfully marked favorite </div>
    <?php } ?>

    <div class="panel-body">
        <form action="addfav.php" method="post">
            <div class="form-group">
                <label for="username">Pet Type</label>
                <input type="text" name="pt" id="pt" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">How much You Like mark the value between 1 to 5</label>
                <input type="number" name="pm" id="pm" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit">
            </div>

        </form>
    </div>