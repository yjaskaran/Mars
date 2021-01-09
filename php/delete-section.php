<?php 

    
include './db.php';
session_start();
$school_id = $_SESSION['SCHOOL_ID'];

$esc_section_id = mysqli_real_escape_string($connection,$_POST['id']);
$section_id = trim($esc_section_id);

// get section Name 

$sectionName = $connection->query("select * from zedd_sections where section_id = '{$section_id}' and school_id = '{$school_id}'");
$section_name = mysqli_fetch_array($sectionName)['section_name'];

// delete section

$stmt = $connection->prepare("delete from zedd_sections where section_id = ? and school_id = ?");
$stmt->bind_param('ii',$section_id,$school_id);

if($stmt->execute()):
    $set_logs = $connection->query("insert into zedd_logs (log,log_date,school_id) values('Section {$section_name} has been Deleted','".time()."',{$school_id})");
    echo "select * from zedd_sections where section_id = '{$section_id}' and school_id = '{$school_id}'";
    echo 1;
else:
    echo 0;
endif;

?>