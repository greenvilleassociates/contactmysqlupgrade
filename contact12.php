<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];
$txtAddress1 = $_POST['txtAddress1'];
$txtAddress2 = $_POST['txtAddress2'];
$txtCity = $_POST['txtCity'];
$txtState = $_POST['txtState'];
$txtCountry = $_POST['txtCountry'];
$txtPostal = $_POST['txtPostal'];
$txtCell = $_POST['txtCell'];

// database insert SQL code
//ORIGINAL STRING $sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
$sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `fldPhone`, `fldCell`, `fldAddress1`, `fldAddress2`, `fldCity`, `fldState`, `fldZipPostal`, `fldCountry`, `fldMessage`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtCell','$txtAddress1','$txtAddress2','$txtCity', '$txtState', '$txtPostal', '$txtCountry', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>