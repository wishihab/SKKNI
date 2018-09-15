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

	<b>TAMBAH TABLE PENERBIT</b><br><br>
<!- Latihan SKKNI ->
</center>
			<form action="" method="post">
			<tr>
			<td>ID Penerbit : <input type="text" name="id" value=""></td><br>
			<td>Nama : <input type="text" name="name" value=""></td><br>
			<td>Negara : <input type="text" name="negara" value=""></td><br>
			<td>Kota : <input type="text" name="kota" value=""></td><br>
			
			<tr>
			<input type='submit' name="submit" value='SUBMIT'>
			<input type='submit' name="cancel" value='CANCEL'>
			</form>
			<?php
			require_once("config.php");
			if(isset($_POST['submit'])){
				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$negara = $_POST['negara'];
				$kota = $_POST['kota'];
				
				
				mysqli_query($db,"INSERT into table_penerit values ('$id','$name','$alamat','$kota')");
				
				header('location:pagepenerbit.php'); 
			}
			if(isset($_POST['cancel'])){
				header('location:pagepenerbit.php');
			}

				?>
</body>
</html>