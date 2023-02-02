<?php include 'header.php';
include 'includes/dbh.inc.php';
?>



<div class="panel panel-default">
    <div class="panel-heading">
        <h2>

            <a class="btn btn-success" href="users.php"> See Users</a>
            <a class="btn btn-info pull-right" href="index.php"> Back</a>
        </h2>

    </div>



    <div class="panel-body">

        <table class="table table-striped">
            <tr>
                <th width="20%">All User Name</th>

            </tr>



            <?php
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['userName']; ?></td>

                </tr>

                <?php
            }
            ?>
        </table>
        <table>
            <br>
            <br>
            <tr>
                <th width="20%">Give Opinion</th>
                <br>
                <th width="20%">Show Marked Pets</th>
                <br>
                <th width="20%">Recommendation</th>
            </tr>
            <tr>
                <td>
                    <form action="addfav.php">
                        <input type="submit" name="addfav" value="Add Favorites" class="btn btn-primary">


                    </form>

                </td>
                <td>

                    <form action="show.php">
                        <input type="submit" name="show" value="show" class="btn btn-primary">


                    </form>

                </td>
                <td>

                    <form action="recomand_mat.php">
                        <input type="submit" name="recommendation" value="recommendation" class="btn btn-primary">


                    </form>

                </td>

            </tr>
        </table>


    </div>

</div>
<?php include 'footer.php'; ?>