<?php

# return 0 - if data not inserted ;
# return 1 - if data inserted;
# return 2 - if data is already available;

include './db.php';

session_start();

$school_id = $_SESSION['SCHOOL_ID'];

// sanatizing user input

$escape_name = mysqli_real_escape_string($connection, $_POST['class']);
$filtered_input = filter_var($escape_name, FILTER_SANITIZE_STRING);

// remove any extra space

$class_name = trim($filtered_input);

$status = '1';

// checking if class is already available

echo 1;

// UNCOMENT FOR DEVELOPMENT

// $checkforclass = $connection->query(
//     "select * from zedd_classes where class_name = '{$class_name}' and school_id = '{$school_id}'"
// );
// if (mysqli_num_rows($checkforclass) > 0):
//     // if data already available

//     echo 2;

//     // inserting data to database
// else:
//     $stmt = $connection->prepare(
//         'insert into zedd_classes (class_name,school_id,status,c_date) value(?,?,?,now())'
//     );
//     $stmt->bind_param('sis', $class_name, $school_id, $status);

//     if ($stmt->execute()):
//         $set_logs = $connection->query(
//             "insert into zedd_logs (log,log_date,school_id) values('Class {$class_name} has been created','" .
//                 time() .
//                 "',{$school_id})"
//         );

//         echo 1;
//     else:
//         echo 0;
//     endif;
// endif;

?>
