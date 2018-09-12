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

	<b>DATABASE TABLE BARANG</b><br><br>

</center>
<?php
require_once("config.php");
if(isset($_GET['id_barang'])){
		$id_barang = $_GET['id_barang'];
		$sql = "SELECT ID_Barang, Kategori, Nama_Barang, Harga, Stok, Supplier FROM barang WHERE ID_Barang='$id_barang'";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
			
			
			
			?>
			<form method="post" action="update.php">
			
			<tr>
			<td>ID Barang : <?php echo $row['ID_Barang']?> </td><br>
			<td>Kategori : <input type="text" name="nama" value="<?php echo $row['Kategori']?>"></td><br>
			<th>Nama Barang : <input type="text" name="nama" value="<?php echo $row['Nama_Barang']?>"></th><br>
			<th>Harga : <input type="text" name="nama" value="<?php echo $row['Harga']?>"></th><br>
			<th>Stok : <input type="text" name="nama" value="<?php echo $row['Stok']?>"></th><br>
			<th>Supplier : <input type="text" name="nama" value="<?php echo $row['Supplier']?>"></th><br>
			</tr><br>
			<input type='submit' name='submit' value='SIMPAN'>
			</form>
			<?php 
			}
		}
}
			
if(isset($_GET['id_suplier'])){
		$id_suplier = $_GET['id_suplier'];
		$sql = "SELECT ID_Suplier, Nama, Alamat, Kota, Telepon FROM Suplier WHERE ID_Suplier='$id_suplier'";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
			
			
			
			?>
			<form method="post" action="update.php">
			
			<tr>
			<td>ID Suplier : <?php echo $row['ID_Suplier']?></td><br>
			<td>Nama : <input type="text" name="nama" value="<?php echo $row['Nama']?>"></td><br>
			<th>Alamat : <input type="text" name="nama" value="<?php echo $row['Alamat']?>"></th><br>
			<th>Kota : <input type="text" name="nama" value="<?php echo $row['Kota']?>"></th><br>
			<th>Telepon : <input type="text" name="nama" value="<?php echo $row['Telepon']?>"></th><br>
			
			</tr>
			<br>
			<input type='submit' name='simpan' value='SIMPAN'>
			</form>
			<?php
			
			}
		}	
}
			?>
			
	
</body>
</html>