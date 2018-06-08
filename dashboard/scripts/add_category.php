<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 5-6-2018
 * Time: 21:39
 */

session_start();
require '../../scripts/dbCon.php';


if(isset($_POST['create_cat'])){
    $id = $_SESSION['id'];
    $logo = $_POST['catLogo'];
    $name = $_POST['catName'];
    $color = $_POST['catColor'];
    $privacy = $_POST['privacy'];

$query = "INSERT INTO `ci_Categories`(`name`, `logo`, `color`, `visibility`, `ci_Users_id`) VALUES ('{$name}','{$logo}','{$color}','$privacy','$id')";
echo $query;
$run = mysqli_query($dbCon,$query);
if ($run){
    echo "Done!";
}else{
    echo mysqli_error($dbCon);
}
header("Location: ../index.php");

}else{
    header("Location: ../index.php");
}