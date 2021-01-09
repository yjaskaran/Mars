<?php 

//  login

include './db.php';

$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);


// salt with sha1 encryption
$salt = "ZEDD";
$enc_pass = sha1($salt.$password);
//  prepare query

$query = $connection->prepare("select school_id,zedd_school from zedd_client where zedd_username = ? and zedd_password = ?");
// print_r($connection->prepare("select id,zedd_school from zedd_client where zedd_username = ? and zedd_password = ?"));
// binding params 

$query->bind_param('ss',$username,$enc_pass);

// execute query

$query->execute();
$query->bind_result($id,$school);
$query->store_result();
$query->fetch();
if($query->num_rows > 0){
    session_start();
    $_SESSION['SCHOOL_ID'] = $id;
    $_SESSION['ZEDD_SCHOOL'] = $school;
    echo 0;

}
else{
    echo 1;
}
