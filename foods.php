<?php include 'header.php';
include 'includes/dbh.inc.php';
?>
<style>



</style>
<div class="d-flex align-content-start flex-wrap">

    <?php
    $query = "SELECT * FROM pets";
    $result = mysqli_query($conn, $query);



    while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="card" >
            <?php echo '<img height="300px" witdth="500px" src="data:image/jpeg;base64,' . base64_encode($row['pimg']) . '"/>'; ?>


            <div class="card-body">
                <h5 class="card-title"><?php echo $row['pname']; ?></h5>
                <p class="card-text"> Color:
                    <?php echo $row['pcolor']; ?>
                </p>
            </div>
        </div>


        <?php
    }
    ?>

</div>

<?php include 'footer.php'; ?>