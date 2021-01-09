<?php 

    
include './db.php';
session_start();
$school_id = $_SESSION['SCHOOL_ID'];

$esc_class_id = mysqli_real_escape_string($connection,$_POST['id']);
$class_id = trim($esc_class_id);

// get class name

$className = $connection->query("select * from zedd_classes where class_id = '{$class_id}' and school_id = '{$school_id}'");
$class_name = mysqli_fetch_array($className)['class_name'];

$stmt = $connection->prepare("delete from zedd_classes where class_id = ? and school_id = ?");
$stmt->bind_param('ss',$class_id,$school_id);
if($stmt->execute()):
    $set_logs = $connection->query("insert into zedd_logs (log,log_date,school_id) values('Class {$class_name} has been Deleted','".time()."',{$school_id})");
    echo 1;
else:
    echo 0;
endif;

?>