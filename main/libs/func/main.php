<?php 

include '../php/db.php';

class CRUD{
    
    

    function set($field,$value,$table){
        $stmt = $thid->connection->prepare("insert into {$table} (?) value(?)");

        $stmt->bind_params
    }
}

?>