<?php
    require('class.php');
    $object = new myclass;
    $rhythm = $_POST['rhythm'];
    $field = array("rhythm");
    $value = array("'$rhythm'");
    $table = "tblrhythm";
    $query = $object->insert($table, $field, $value);
    if($query){
        echo 'done';
    }else{
        echo 'exist';
    }
?>
