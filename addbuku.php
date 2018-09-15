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
<!- Latihan SKKNI ->
</center>

			<form action="" method="post">
			<tr>
			<td>ID Buku : <input type="text" name="id" value=""></td><br>
			<td>Kategori : <input type="text" name="kategori" value=""></td><br>
			<td>Nama Buku : <input type="text" name="nama" value=""></td><br>
			<td>Pengarang : <input type="text" name="pengarang" value=""></td><br>
			<td>Harga : <input type="text" name="harga" value=""></td><br>
			<td>Stok : <input type="text" name="stok" value=""></td><br>
			<td>Penerbit : <input type="text" name="penerbit" value=""></td><br>
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
				$pengarang = $_POST['pengarang'];
				$harga = $_POST['harga'];
				$stok = $_POST['stok'];
				$penerbit = $_POST['penerbit'];
				
				mysqli_query($db,"INSERT into table_buku values ('$id','$kategori','$nama','$pengarang','$harga','$stok','$penerbit')");
				
				header('location:pagebuku.php'); 
			}
			if(isset($_POST['cancel'])){
				header('location:pagebuku.php');
			}

				?>
</body>
</html>