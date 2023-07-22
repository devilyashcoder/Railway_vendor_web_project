<html>
    <head>
        <title> Submission page </title>
		<link rel="stylesheet" href="show_page.css">
</head>
<body>

<?php
$servername="localhost";
$username="root";
$password="";
$database_name="blw";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn){
	die("Connection Failed: ". conn->connect_error);
}

if(isset($_POST['save'])){
	$BillN=$_POST['BillN'];
$Description=$_POST['Description'];
$ClaimedA=$_POST['ClaimedA'];
$PassedA=$_POST['PassedA'];
$Deduction=$_POST['Deduction'];
$VendorC=$_POST['VendorC'];
$VendorN=$_POST['VendorN'];

$sql_query="INSERT INTO details(BillN,Description,ClaimedA,PassedA,Deduction,VendorC,VendorN)
	VALUES ('$BillN','$Description','$ClaimedA','$PassedA','$Deduction','$VendorC','$VendorN')";

	if(mysqli_query($conn, $sql_query)){
		echo "";
	}
	else
	{
		echo "Error: ".$sql."".mysqli_error($conn);
	}

	mysqli_close($conn); 

}

?>
<a href="display.php" >SHOW THE ENTERIES</a>
</body>
</html>