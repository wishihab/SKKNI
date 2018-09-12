<?php
require_once("config.php");
				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$alamat = $_POST['alamat'];
				$kota = $_POST['kota'];
				$telpon = $_POST['telepon'];
				
				mysqli_query($db,"UPDATE suplier SET Nama='$name', Alamat='$alamat', Kota='$kota', Telepon='$telpon' WHERE ID_Suplier='$id')");
				 
			
			?>
			