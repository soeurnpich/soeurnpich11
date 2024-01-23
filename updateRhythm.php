
<?php
    require('class.php');
    $object = new myclass;
    $rhythm = $_POST['rhythm'];
    $id = $_POST['id'];
    $field = array("rhythm");
    $value = array("'$rhythm'");
    $query = $object->update_1("tblrhythm",$field, $value,"rhythm_id", $id);
    if($query){
        echo 'done';
    }else{
        echo 'exist';
    }
?>