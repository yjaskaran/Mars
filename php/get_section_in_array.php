<?php 



include './db.php';
session_start();
$school_id = $_SESSION['SCHOOL_ID'];

$getData = $connection->query("select * from zedd_sections where school_id = '{$school_id}'");

$data = array();
if(mysqli_num_rows($getData) > 0){

    while($row = mysqli_fetch_array($getData)){
        $tmp = array();
        $tmp['id'] = $row['section_id'];
        $tmp['section_name'] = $row['section_name'];
    
        array_push($data,$tmp);
    }
}

else{
}

echo json_encode($data);

?>
