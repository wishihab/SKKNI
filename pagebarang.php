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
<form action="pagebarang.php" method="GET">
<input type="text" name="brg" />
<input type="submit" value="Search" />
</form>
	<b>DATABASE TABLE BARANG</b><br>
	<a href="/SKKNI/index.php">HOME </a>
	<a href="/SKKNI/addbarang.php">TAMBAH BARANG</a><br><br>


<?php
require_once("config.php");
if(isset($_GET['brg'])){
		$brg = $_GET['brg'];
$sql = "SELECT *from Barang where Nama_Barang LIKE '%".$brg."%'";
}else{
		$sql = "SELECT *from Barang";
}
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
			<th>Setting</th>
			
			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["ID_Barang"]."</td><td>".$row["Kategori"]."</td><td>".$row["Nama_Barang"]."</td><td>".$row["Harga"]."</td><td>".$row["Stok"]."</td><td>".$row["Supplier"]."</td><td><a href='form-edit.php?id_barang=$row[ID_Barang]'>Edit</a>
                <a href='delete.php?id_barang=$row[ID_Barang]'>Delete</a></td></tr>";
			}
				echo "</table>";
			}
		?>

</center>

			
</body>
</html>