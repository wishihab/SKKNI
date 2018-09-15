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
<center>
<form action="pagebuku.php" method="GET">
<input type="text" name="brg" />
<input type="submit" value="Search" />
</form>
	<b>DATABASE TABLE BUKU</b><br>
	<a href="/SKKNI/index.php">HOME |</a>
	<a href="/SKKNI/addbuku.php"> +TAMBAH BUKU+ |</a>
	<a href="/SKKNI/report.php">REPORT</a><br><br>

<?php
require_once("config.php");
if(isset($_GET['brg'])){
		$brg = $_GET['brg'];
$sql = "SELECT *from table_buku where nama LIKE '%".$brg."%'";
}else{
		$sql = "SELECT *from table_buku";
}
$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row'
			
			
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
			<th>Setting</th>
			</tr>
			
			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["id_buku"]."</td><td>".$row["kategori"]."</td><td>".$row["nama"]."</td><td>".$row["pengarang"]."</td><td>".$row["harga"]."</td><td>".$row["stok"]."</td><td>".$row["penerbit"]."</td><td><a href='form-edit.php?id_barang=$row[id_buku]'>Edit</a>
                <a href='delete.php?id_barang=$row[id_buku]'>Delete</a></td></tr>";
			}
				echo "</table>";
			}
		?>

</center>

			
</body>
</html>