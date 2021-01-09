<?php


include 'db.php';

$getData = $connection->query("select * from zedd_client order by id desc");

$data = '
    <table class="table striped responsive-table">
    <thead>
        <tr>
            <th style="width:20px;"><i class="fas fa-arrow-circle-down"></i></th>
            <th>School Name</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Mail</th>
            <th>Address</th>
            <th>Payment</th>                       
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    
    <tr class="newrow">
        <td></td>
        <td contenteditable="true"  col_name="zedd_school" onblur="setNewClient(this)"</td>
        <td contenteditable="true"  col_name="zedd_name" onblur="setNewClient(this)"></td>
        <td contenteditable="true"  col_name="zedd_username" onblur="setNewClient(this)"></td>
        <td contenteditable="true"  col_name="zedd_password" onblur="setNewClient(this)"></td>
        <td contenteditable="true"  col_name="zedd_phone" onblur="setNewClient(this)"></td>
        <td contenteditable="true"  col_name="zedd_mail" onblur="setNewClient(this)"></td>
        <td contenteditable="true"  col_name="zedd_address" onblur="setNewClient(this)"></td>
        <td contenteditable="true"  col_name="price" onblur="setNewClient(this)"></td>
     
        <td></td>
    </tr>
     
    ';
if (mysqli_num_rows($getData) > 0) {

    while ($row = mysqli_fetch_array($getData)) {

        $data .= ' <tr>
            <td><label><input type="checkbox" name="id" value="' . $row['id'] . '"/><span></span></label></td>
            <td contenteditable="true" col_name="zedd_school" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_school'] . '</td>
            <td contenteditable="true" col_name="zedd_name" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_name'] . '</td>
            <td contenteditable="true" col_name="zedd_username" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_username'] . '</td>
            <td contenteditable="true" col_name="zedd_pass_plain" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_pass_plain'] . '</td>
            <td contenteditable="true" col_name="zedd_phone" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_phone'] . '</td>
            <td contenteditable="true" col_name="zedd_mail" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_mail'] . '</td>
            <td contenteditable="true" col_name="zedd_address" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_address'] . '</td>
            <td contenteditable="true" col_name="price" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['price'] . '</td>
            <td contenteditable="true" col_name="zedd_status" rowid="' . $row['id'] . '" onblur="editClient(this)">' . $row['zedd_status'] . '</td>
            <td>' . date('d-m-Y', $row['reg_date']) . '</td>
            </tr>';
    }
} else {
    $data .= '
                <tr>
                    <td colspan="11"> <center><h4><span> No Data Available</span></h4></center></td>
                </tr>
        ';
}
$data .= '
    </tbody>
    <tfoot>
        <tr>
        <th style="width:20px;"><i class="fas fa-arrow-circle-up"></i></th>
            <th>School Name</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Mail</th>
            <th>Address</th>
            <th>Payment</th>                       
            <th>Status</th>
            <th>Date</th>
        </tr>
    </tfoot>
</table>
    ';

echo $data;
