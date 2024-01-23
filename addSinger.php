<?php
    require('class.php');
    $object = new myclass;
    $singer = $_POST['singer'];
    $field = array("singer");
    $value = array("'$singer'");
    $table = "tblrhythm";
    $query = $object->insert($table, $field, $value);
    if($query){
        echo 'done';
    }else{
        echo 'exist';
    }
?>