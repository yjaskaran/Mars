<?php 



include './db.php';
session_start();
$school_id = $_SESSION['SCHOOL_ID'];

$getData = $connection->query("select * from zedd_sections where school_id = '{$school_id}'");

$data = "
<table>
<thead>
    <tr>
        <th>Section</th>
        <th>Students</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
";
if(mysqli_num_rows($getData) > 0){

    while($row = mysqli_fetch_array($getData)){
        $data .= "<tr>
        <td>{$row['section_name']}</td>
        <td>30</td>
       
       <td>
            <button class='button tooltip bg-danger' onclick='deleteSection({$row['section_id']})'>
                <i class='fas fa-trash'></i> Delete
                <span class='tooltiptext'>Delete Class</span>
            </button>
        </td>
        </tr>";
    }
    
}

else{

    $data .= "  <tr>
        <td colspan='4'> <center><h4><span> No Data Available</span></h4></center></td>
        </tr>";
}

$data .= "
</tbody>
</table>
";
echo $data;
?>