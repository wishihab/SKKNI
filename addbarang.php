<?php
require_once("config.php");

		?>
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

	<b>TAMBAH TABLE BARANG</b><br><br>

</center>

			<form action="" method="post">
			<tr>
			<td>ID Barang : <input type="text" name="id" value=""></td><br>
			<td>Kategori : <input type="text" name="kategori" value=""></td><br>
			<td>Nama Barang : <input type="text" name="nama" value=""></td><br>
			<td>Harga : <input type="text" name="harga" value=""></td><br>
			<td>Stok : <input type="text" name="stok" value=""></td><br>
			<td>Supplier : <input type="text" name="suplier" value=""></td><br>
			</tr><br>
			<input type='submit' name='submit' value='submit'>
			<input type='submit' name="cancel" value='CANCEL'>
			</form>
			
			<?php
			require_once("config.php");
			if(isset($_POST['submit'])){
				
				$id = $_POST['id'];
				$kategori = $_POST['kategori'];
				$nama = $_POST['nama'];
				$harga = $_POST['harga'];
				$stok = $_POST['stok'];
				$suplier = $_POST['suplier'];
				
				mysqli_query($db,"INSERT into barang values ('$id','$kategori','$nama','$harga','$stok','$suplier')");
				
				header('location:pagebarang.php'); 
			}
			if(isset($_POST['cancel'])){
				header('location:pagebarang.php');
			}

				?>
</body>
</html>