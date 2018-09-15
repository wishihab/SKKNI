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
		$sql = "SELECT id_buku, kategori, nama, pengarang, harga, stok, penerbit FROM table_buku WHERE id_buku='$id_barang'";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
			
			
			
			?>
			<form method="post" action="update.php">
			
			<tr>
			<td>ID Buku : <input type="text" name="idbarang" value="<?php echo $row['id_buku']?>"></td><br>
			<td>Kategori : <input type="text" name="kategori" value="<?php echo $row['kategori']?>"></td><br>
			<th>Nama Barang : <input type="text" name="nama" value="<?php echo $row['nama']?>"></th><br>
			<th>Pengarang : <input type="text" name="pengarang" value="<?php echo $row['pengarang']?>"></th><br>
			<th>Harga : <input type="text" name="harga" value="<?php echo $row['harga']?>"></th><br>
			<th>Stok : <input type="text" name="stok" value="<?php echo $row['stok']?>"></th><br>
			<th>Penerbit : <input type="text" name="penerbit" value="<?php echo $row['penerbit']?>"></th><br>
			</tr><br>
			<input type='submit' name='simpanbarang' value='SIMPAN'>
			</form>
			<?php 
			}
		}
}
			
if(isset($_GET['id_suplier'])){
		$id_suplier = $_GET['id_suplier'];
		$sql = "SELECT id_penerbit, nama, negara, kota FROM table_penerit WHERE id_penerbit='$id_suplier'";
		$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
			
			
			
			?>
			<form method="post" action="update.php">
			
			<tr>
			<td>ID Penerbit : <input type="text" name="id" value="<?php echo $row['id_penerbit']?>"></td><br>
			<td>Nama : <input type="text" name="nama" value="<?php echo $row['nama']?>"></td><br>
			<th>Negara : <input type="text" name="negara" value="<?php echo $row['negara']?>"></th><br>
			<th>Kota : <input type="text" name="kota" value="<?php echo $row['kota']?>"></th><br>
			
			
			</tr>
			<br>
			<input type='submit' name='simpansuplier' value='SIMPAN'>
			
			</form>
			<?php
			
			
			}
			
		}
	
}
			?>
			

<?php
			if(isset($_POST['simpansuplier'])){
				
				$id = $_POST['id_penerbit'];
				$nama = $_POST['nama'];
				$negara = $_POST['negara'];
				$kota = $_POST['kota'];
				
				
				mysqli_query($db,"UPDATE table_penerit SET nama='$nama', negara='$negara', kota='$kota' WHERE id_penerbit='$id')");
				
			}	

			?>			
</body>
</html>