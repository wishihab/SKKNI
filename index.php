<html>
<title>Toko Buku</title>
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
<center><b>DATABASE TABLE BUKU </b><a href="/SKKNI/pagebuku.php">DISINI</a></center><br><br>

<center>
<?php
require_once("config.php");
$sql = "SELECT *from table_buku";
		
	$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row'
			// Latihan SKKNI
			
			echo "<table>";
			?>
			<tr>
			<th>ID Buku</th>
			<th>Kategori</th>
			<th>Nama Buku</th>
			<th>Pengarang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Penerbit</th>
			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["id_buku"]."</td><td>".$row["kategori"]."</td><td>".$row["nama"]."</td><td>".$row["pengarang"]."</td><td>".$row["harga"]."</td><td>".$row["stok"]."</td><td>".$row["penerbit"]."</td></tr>";
			}
				echo "</table>";
			}
		else{
			echo "There is no result in databases";
		}
		?>
		<br><br><center><b>DATABASE TABLE PENERBIT </b><a href="/SKKNI/pagepenerbit.php">DISINI </a></center><br><br>
		
<?php		
		$sql = "SELECT *from table_penerit";
		
	$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row'
			echo "<table>";
			?>
			<tr>
			<th>ID Penerbit</th>
			<th>Nama Penerbit</th>
			<th>Negara</th>
			<th>Kota</th>

			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["id_penerbit"]."</td><td>".$row["nama"]."</td><td>".$row["negara"]."</td><td>".$row["kota"]."</td></tr>";
			}
				echo "</table>";
			}
		else{
			echo "There is no result in databases";
		}
		?>
		
			
</body>
</html>