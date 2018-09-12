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
<center><b>DATABASE TABLE BARANG </b><a href="/SKKNI/pagebarang.php">DISINI</a></center><br><br>

<center>
<?php
require_once("config.php");
$sql = "SELECT *from Barang";
		
	$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row'
			
			
			echo "<table>";
			?>
			<tr>
			<th>ID Barang</th>
			<th>Kategori</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Supplier</th>
			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["ID_Barang"]."</td><td>".$row["Kategori"]."</td><td>".$row["Nama_Barang"]."</td><td>".$row["Harga"]."</td><td>".$row["Stok"]."</td><td>".$row["Supplier"]."</td></tr>";
			}
				echo "</table>";
			}
		else{
			echo "There is no result in databases";
		}
		?>
		<br><br><center><b>DATABASE TABLE SUPPLIER </b><a href="/SKKNI/pagesuplier.php">DISINI </a></center><br><br>
		
<?php		
		$sql = "SELECT *from Suplier";
		
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
			
			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["ID_Suplier"]."</td><td>".$row["Nama"]."</td><td>".$row["Alamat"]."</td><td>".$row["Kota"]."</td><td>".$row["Telepon"]."</td></tr>";
			}
				echo "</table>";
			}
		else{
			echo "There is no result in databases";
		}
		?>
		

			
</body>
</html>