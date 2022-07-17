<!DOCTYPE html>
<html lang="en">
<head>
	<title>Manage COw</title>
</head>
<body>
<?php
$username = "root"; 
$password = ""; 
$database = "cow"; 
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM owner";
$result = $mysqli->query($query);
?>
	<center>
		<h1>Please Insert Information Cow </h1>
		<form action="insert_cow.php" method="post">		
		<p>
			<label for="name_cow">กรุณาเลือกชื่อเจ้าของ:</label>
			<select name="id_owner">
				<option value=""><-- Please Select Item --></option>
				<?php 
				while ($row = $result->fetch_assoc()) {
					$field1name = $row["id_owner"];
					$field2name = $row["name"];
					echo '<option value="'.$field1name.'">'.$field1name.' - '.$field2name. '</option>';
			} 
		?>
		  </select>
		</p>
		<p>
			<label for="namecow">ชื่อวัว:</label>
			<input type="text" name="namecow" id="namecow">
			</p>
		<p>
			<label for="species">สายพันธุ์:</label>
			<input type="text" name="species" id="species">
		</p>
		<p>
			<label for="gender">เพศ:</label>
			<select name="gender">
				<option value="male">ผู้</option>
				<option value="female">เมีย</option>
		</select>
		</p>
		<p>
			<label for="ivf_date">วันผสมเทียม:</label>
			<input type="date" name="ivf_date" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31">
		</p>
		<p>
			<label for="begin_date">วันที่เริ่มท้อง  (ตรวจพบ):</label>
			<input type="date" name="begin_date" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31">
		</p>
		<p>
			<label for="bith_date">วันคลอด:</label>
			<input type="date" name="bith_date" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31">
		</p>
		<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
