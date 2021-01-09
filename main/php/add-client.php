<?php 
include './db.php';
$col = $_POST['col_name'];

$val = $_POST['value'];


$update = $connection->prepare("insert into zedd_client({$col},reg_date) value(?,'".time()."')");
     
$update->bind_param('s',$val);
$update->execute();
$res = $update->get_result();
// print_r($update->affected_rows);
if($update->affected_rows > 0){
    echo 1;
}
else{
    echo 0;
}
?>