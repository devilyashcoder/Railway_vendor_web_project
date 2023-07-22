<?php 
$BillN=$_POST['BillN'];
$Description=$_POST['Description'];
$ClaimedA=$_POST['ClaimedA'];
$PassedA=$_POST['PassedA'];
$Deduction=$_POST['Deduction'];
$VendorC=$_POST['VendorC'];
$VendorN=$_POST['VendorN'];

$conn= new mysqli('localhost', 'root', '', 'blw');
if($conn->connect_error){
    die('Connection failed : '. conn->connect_error);

}
else{
    $stmt=$conn->prepare("insert into details(BillN, Description, ClaimedA, PassedA, Deduction, VendorC, VendorN)
            values(?,?,?,?,?,?,?)");
            $stmt->bind_param("isiiiis", $BillN, $Description, $ClaimedA, $PassedA, $Deduction, $VendorC, $VendorN);
            $stmt->execute();
            echo "Registration Successfull.....";
            $stmt->close();
            $conn->close();
}
?>