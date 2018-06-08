<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 27-5-2018
 * Time: 18:38
 */

include 'dbCon.php';

if(isset($_GET['email'])){
    $email = $_GET['email'];
    $emailQuery = "SELECT * FROM ci_Users WHERE email = '{$email}'";
    $email_num_rows = mysqli_query($dbCon, $emailQuery);
    $emailRows = mysqli_num_rows($email_num_rows);

    echo $emailRows;
}else{
    echo 0;

}