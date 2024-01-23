
<?php
    require('class.php');
    $object = new myclass;
    $rhythm = $_POST['singer'];
    $type = $_POST['type'];
    $id = $_POST['id'];
    $field = array("singer","type");
    $value = array("'$singer'","'$type'");
    $query = $object->update_1("tblsinger",$field, $value,"singer_id", $id);
    if($query){
        echo 'done';
    }else{
        echo 'exist';
    }
?>