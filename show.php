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
                <th width="20%">Recommended pet type</th>
                <th width="20%">Suggestion Score</th>
                
            </tr>
            

            
            <?php
            $query = "SELECT * FROM pet_mark where user_id = '$_SESSION[useruid]'";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) 
            {
            ?>
                <tr>
                    <td><?php echo $row['pet_type']; ?></td>
                    <td><?php echo $row['marking']; ?></td>
        
                </tr>
                
            <?php
            }
            ?>
        </table>


    </div>

</div>
        <?php include 'footer.php'; ?>