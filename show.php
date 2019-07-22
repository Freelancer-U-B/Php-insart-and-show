<style type="text/css">
	th, td{
		border: 1px solid red;
		padding: 5px;
	}
	table{
		border: 1px solid red;
	}
</style>
<?php
	error_reporting(0);
	include 'conn.php';
	$quer = "SELECT * FROM testt";
	$data = mysqli_query($conn, $quer);
	$total = mysqli_num_rows($data);
	echo "<table cellpadding='0' cellspacing='0'>";
	echo "<tr>";
	echo "<th width='90px'>Total data</th>";
	echo "<th width='20px'>".$total."</th>";
	echo "</tr>";
	echo "</table><br>";
	?>
	<table cellpadding="0" cellspacing="0" width="60%">
		<th>USER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>MOBILE NUMBER</th>

	<?php

	while ($result = mysqli_fetch_assoc($data)) {
		echo "<tr>";
		echo "<th>".$result['id']."</th>";
		echo "<th>".$result['NAME']."</th>";
		echo "<th>".$result['EMAIL']."</th>";
		echo "<th>".$result['MOBILE']."</th>";
		echo "</tr>";
	}
?>
	</table>