<?php 


# return 0 - if data not inserted ;
# return 1 - if data inserted; 
# return 2 - if data is already available;


include './db.php';

session_start();

$school_id = $_SESSION['SCHOOL_ID'];

// sanatizing user input

$escape_name = mysqli_real_escape_string($connection,$_POST['section']);


// remove any extra space

$section_name = trim($escape_name);

$status = '1';

// checking if class is already available 

$checkforclass = $connection->query("select * from zedd_sections where section_name = '{$section_name}' and school_id = '{$school_id}'");
if(mysqli_num_rows($checkforclass) > 0):

    // if data already available
    
    echo 2;
    
    else :
        
        // inserting data to database
        
        $stmt = $connection->prepare("insert into zedd_sections (section_name,school_id,status,section_date) value(?,?,?,now())");
        $stmt->bind_param('sis',$section_name,$school_id,$status);
        
        if($stmt->execute()):
            $set_logs = $connection->query("insert into zedd_logs (log,log_date,school_id) values('Section {$section_name} has been created','".time()."',{$school_id})");

            echo 1;
        else:
            echo 0;
        endif;
endif;

?>
