<?php 
include 'db.php';
$col = $_POST['col_name'];
$id = $_POST['rowid'];
$val = $_POST['value'];
$salt = "ZEDD";
if($col == "zedd_pass_plain"){
    $enc_pass = sha1($salt.$val);
    $query = "update zedd_client set $col = '$val',zedd_password = '$enc_pass' where id = '$id'";
    
}
else{

    $query = "update zedd_client set $col = '$val' where id = '$id'";
}

$update = $connection->query($query);
if($update){
    echo 1;
}
else{
    echo 0;
}
?>