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

	<b>TAMBAH TABLE SUPPLIER</b><br><br>

</center>
			<form action="" method="post">
			<tr>
			<td>ID Suplier : <input type="text" name="id" value=""></td><br>
			<td>Nama : <input type="text" name="name" value=""></td><br>
			<td>Alamat : <input type="text" name="alamat" value=""></td><br>
			<td>Kota : <input type="text" name="kota" value=""></td><br>
			<td>Telepon : <input type="text" name="telepon" value=""></td><br>
			<tr>
			<input type='submit' name="submit" value='SUBMIT'>
			<input type='submit' name="cancel" value='CANCEL'>
			</form>
			<?php
			require_once("config.php");
			if(isset($_POST['submit'])){
				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$alamat = $_POST['alamat'];
				$kota = $_POST['kota'];
				$telpon = $_POST['telepon'];
				
				mysqli_query($db,"INSERT into suplier values ('$id','$name','$alamat','$kota','$telpon')");
				
				header('location:pagesuplier.php'); 
			}
			if(isset($_POST['cancel'])){
				header('location:pagesuplier.php');
			}

				?>
</body>
</html>