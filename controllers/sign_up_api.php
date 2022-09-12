<?php 
require_once "../models/file_manager.class.php";
if($_POST['agree-term']){
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$user_name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['pass'];
$c_password = $_POST['re_pass'];
if($password == $c_password){
$obj = new file_manager();
$obj->sign_up($first_name,$last_name,$user_name,$email,$c_password);

}else{
    echo 'password not match';
}
}
?>