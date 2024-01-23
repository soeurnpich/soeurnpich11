<?php
require('class.php');
$object = new myclass;
$id = $_POST['id'];
$query = $object->delete_1("tblrhythm","rhythm_id",$id);
if($query){
    echo 'done';
}else{
    echo 'exist';
}
?>