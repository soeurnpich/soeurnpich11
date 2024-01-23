<?php
    require('class.php');
    $object = new myclass;
    $title = $_POST['title'];
    $singer = $_POST['singer'];
    $ryhthm = $_POST['rhythm'];
    $code = $_POST['code'];
    $field = array("title","singer","rhythm","code");
    $value = array("'$title'","'$singer'","'$rhythm'","'$code'");
    $table = "tblsong";
    $query = $object->insert("tblsong", $field, $value);
    if($query){
        echo 'done';
    }else{
        echo 'exist';
    }
?>