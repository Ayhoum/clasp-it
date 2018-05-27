<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 27-5-2018
 * Time: 18:20
 */
require_once "dbCon.php";
if(isset($_POST['submit_Login'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $email = mysqli_escape_string($dbCon,$email);
    $pass = mysqli_escape_string($dbCon,$pass);


    $query="SELECT * FROM Users WHERE email = '{$email}'";
    $run = mysqli_query($dbCon,$query);

    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_assoc($run)){
            $hashedPass = $row['password'];
            echo $hashedPass;
        }
        if(password_verify($pass, $hashedPass)){
            header("Location: ../dashboard/index.php");
        }
    }else{
        header("Location: ../index.php?new=1");
    }
}