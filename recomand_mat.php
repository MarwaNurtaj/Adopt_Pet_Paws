<?php 
include 'includes/dbh.inc.php';
include("recommendation.php");


$query = "SELECT * FROM pet_mark";
$pets= mysqli_query($conn,$query);
$matrix=array() ;


while ($pet=mysqli_fetch_array($pets))
{
    $query = "SELECT userName from `users` where userUid=$pet[user_id]";

    $users=mysqli_query($conn,$query);
    $username=mysqli_fetch_array($users);

    $matrix[$username['userName']][$pet['pet_type']]=$pet['marking'];
}

echo "<pre>";

print_r($matrix);
echo "</pre>";


var_dump(getRecommendation($matrix,'marwa'));

?>