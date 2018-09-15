<?php
require_once("config.php");
// Latihan SKKNI
if(isset($_POST['simpanbarang'])){
			
			$idbarang = $_POST['idbarang'];
			$kategori = $_POST['kategori'];
			$nama = $_POST['nama'];
			$pengarang = $_POST['pengarang'];
			$harga = $_POST['harga'];
			$stok = $_POST['stok'];
			$penerbit = $_POST['penerbit'];
				
				mysqli_query($db,"UPDATE table_buku SET kategori='$kategori',
									nama='$nama',
									pengarang='$pengarang',
									harga='$harga',
									stok='$stok',
									penerbit='$penerbit'
									WHERE id_buku='$idbarang'");
				header('location:pagebuku.php');
		}

		if(isset($_POST['simpansuplier'])){
			
			$id = $_POST['id'];
			$nama = $_POST['nama'];
			$negara = $_POST['negara'];
			$kota = $_POST['kota'];
			
				
				mysqli_query($db,"UPDATE table_penerit SET nama='$nama',
									negara='$negara',
									kota='$kota'
									WHERE id_penerbit='$id'");
				header('location:pagepenerbit.php');
		}
				
			
?>	