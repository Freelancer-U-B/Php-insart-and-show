<?php
include 'conn.php';


	if(isset($_POST['b1']))
{
	//CONVERT HTML TO PHP
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mnumber=$_POST['mobile'];

	//DATA INSERT QUERY

	$insert="insert into testt(NAME,EMAIL,MOBILE) value('$name','$email','$mnumber')";
	$query=mysqli_query($conn,$insert);

	//DATA INSERT CHACK QUERY

	if ($query==true) {
		echo "Data insert successfully";
	}else{
		echo "Data not Insert";
	}
}
?>