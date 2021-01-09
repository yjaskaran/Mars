<?php 
include 'db.php';
$ids = $_POST['ids'];
foreach($ids as $id){
    $delete = $connection->prepare("delete from zedd_client where id = ?");
    $delete->bind_param('s',$id);
    $del = $delete->execute();
}

if($del > 0){
    echo 1;
}
else{
    echo 0;
}
?>