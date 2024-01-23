<?php
session_start();
require('class.php');
$object = new myclass;
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$pwd =md5($pwd);
$query = $object->login("tbluser", "username","password", $user,$pwd);
$count = mysqli_num_rows($query);
if($count > 0){
    $_SESSION['user'] = $user;
    $_SESSION['pwd'] = $pwd;
    while($row = mysqli_fetch_assoc($query)){
        $_SESSION['usertype'] = $row['usertype'];

    }
    echo 'done';
 }else{
    echo 'faild';
 }
?>