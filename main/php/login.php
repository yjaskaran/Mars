<?php 

//  login

include './db.php';

$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

//  prepare query

$query = $connection->prepare("select * from zedd_main where ZEDD_username = ? and ZEDD_password = ?");

// binding params 

$query->bind_param('ss',$username,$password);

// execute query

$query->execute();

// get query results

$result =  $query->get_result();

if($result->num_rows > 0){
    session_start();
    $_SESSION['ZEDD_DEVS'] = $username;
    echo 0;
}
else{
    echo 1;
}
?>