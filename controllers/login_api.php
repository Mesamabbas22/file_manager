<?php 
require_once "../models/file_manager.class.php";
$email = $_POST['your_name'];
$password = $_POST['your_pass'];
session_start();
$obj = new file_manager();
$login = $obj->sign_in($email,$password);
if($login !=null){
foreach($login as $index){
   $user = $index['user_name'];
    $email = $index['email'];
}
$_SESSION['user'] = $user;
$_SESSION['email'] = $email;



}
if($_SESSION['user'] == true && $_SESSION['email'] == true){
    header('location: ../index.php');
}else{

    header('location: ../login.php ');
}

?>