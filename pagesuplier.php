<html>
<title>Toko Indonesia</title>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<center>
<form action="pagesuplier.php" method="GET">
        <input type="text" name="brg" />
        <input type="submit" value="Search" />
    </form>
	<b>DATABASE TABLE SUPPLIER</b><br>
	<a href="/SKKNI/index.php">HOME </a>
	<a href="/SKKNI/addsuplier.php">TAMBAH SUPPLIER</a><br><br>


<?php
require_once("config.php");

if(isset($_GET['brg'])){
		$brg = $_GET['brg'];
$sql = "SELECT *from Suplier where Nama LIKE '%".$brg."%'";
}else{
		$sql = "SELECT *from Suplier";
}
		
	$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row'
			
			
			echo "<table>";
			?>
			<tr>
			<th>ID Suplier</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Telepon</th>
			<th>Setting</th>
			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["ID_Suplier"]."</td><td>".$row["Nama"]."</td><td>".$row["Alamat"]."</td><td>".$row["Kota"]."</td><td>".$row["Telepon"]."</td><td><a href='form-edit.php?id_suplier=$row[ID_Suplier]'>Edit</a>
                <a href='delete.php?id_suplier=$row[ID_Suplier]'>Delete</a></td></tr>";
			}
				echo "</table>";
			}
		else{
			echo "There is no result in databases";
		}
		?>

</center>

			
</body>
</html>