<html>
    <head>
        <title> Data Entries </title>
        <link rel="stylesheet" href="show_page_table.css">
</head>
<body>
    
    <table border="2">

<tr>
        <th>Bill No.</th>
        <th>Description</th>
        <th>Claimed Amount</th>
        <th>Passed Amount</th>
        <th>Deduction</th>
        <th>Vendor Code</th>
        <th>Vendor Name</th>
</tr>

<?php
include("details_entry.php");
error_reporting(0);
$query="SELECT * FROM details";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total !=0){
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['BillN']."</td>
        <td>".$result['Description']."</td>
        <td>".$result['ClaimedA']."</td>
        <td>".$result['PassedA']."</td>
        <td>".$result['Deduction']."</td>
        <td>".$result['VendorC']."</td>
        <td>".$result['VendorN']."</td>
        ";
    }
}
else{
    echo "No records found";
}

?>
</table>
</body>
</html>