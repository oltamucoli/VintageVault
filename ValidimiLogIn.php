<?php
include_once 'users.php';

if(isset($_POST['loginBtn'])){
    if(empty($_POST['Email Address']) || empty($_POST['Password'])){
        echo "Please fill all fields!";
    }else{
        $email = $_POST['Email Address'];
        $password = $_POST['Password'];

        $i=0;
        foreach($users as $user){
            $i++;
            if($email == $user['Email Address'] && $password == $user['Password']){

               session_start();

               $_SESSION['Email Address']=$email;
               $_SESSION['Password'] = $password;
               $_SESSION['role'] = $user['role'];

               header("location:VintageVault.php");
                exit();

            }else{
                if($i == sizeOf($users)){
                    echo "Email Address or Password is incorrect!";
                    exit();
                }
                
            }
        }


    }
}


?>