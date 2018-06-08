<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 27-5-2018
 * Time: 17:13
 */

require_once "dbCon.php";

if(isset($_POST['submit_Signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $name = mysqli_escape_string($dbCon,$name);
    $email = mysqli_escape_string($dbCon,$email);
    $password1 = mysqli_escape_string($dbCon,$password1);

    $options = [
        'salt' => "ALAAAYHAMPASSWORDSALTELSEMICOLON",
        //write your own code to generate a suitable & secured salt
        'cost' => 12 // the default cost is 10
    ];
    $cost = ["cost" ];
    $hashed = password_hash($password1,PASSWORD_DEFAULT,$options);

    $random = rand(100000,999999);

    $query = "INSERT INTO `ci_Users`(`email`, `password`, `name`, `plan`, `acc_status`, `con_code`) VALUES ('{$email}','{$hashed}','{$name}', '0', '0', '{$random}')";
    $run = mysqli_query($dbCon, $query);
    if($run){
        header("Location: ../index.php?reg=1");
    }
}