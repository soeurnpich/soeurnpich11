<?php
    class myclass{
        function link(){
            $connect = new mysqli("localhost", "root", "","bluestar");
            return $connect;  
        }
        function display($table){
            $sql = "select * from $table";
            return $this->link()->query($sql);
        }

        function insert($table,$field,$value){
            $count = count($field);
            $sql = "insert into $table(";
            for($i=0;$i<$count;$i++){
                if($i == ($count-1)){
                    $sql.= $field[$i];
                }else{
                    $sql.= $field[$i]."";
                } 
            }
            $sql.=") values(";
            for($i=0;$i<$count;$i++){
                if($i == ($count-1)){
                    $sql.= $value[$i].")";
                }else{
                    $sql.= $value[$i].",";
                }
            }
            return $this->link()->query($sql);
        }
        function update_1($table, $field, $value, $col, $con){
            $sql = "update $table set ";
            $count = count($field);
            for($i=0;$i<$count;$i++){
                if($i==($count-1)){
                    $sql.= $field[$i]."=".$value[$i];  
                }else{
                    $sql.= $field[$id]."=".$value[$i].",";
                }
            }
            $sql.=" where $col = $con";
            return $this->link()->query($sql);
        }
        function delete_1($table, $col, $value){
            $sql = "delete from $table where $col ='$value'";
            return $this->link()->query($sql);
        }
        function login($table,$col1,$col2,$val1,$val2){
            $sql = "select * from $table where $col1 = '$val1' and $col2 = '$val2'";
            return $this->link()->query($sql);
        }
    } 
?>