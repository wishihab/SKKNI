
<html>
<title>Toko Buku</title>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
<script src="typeahead.min.js"></script>
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
<?php
require_once("config.php");

// Latihan SKKNI
if(isset($_GET['id_barang'])){
		$brg = $_GET['id_barang'];
		
		mysqli_query($db,"DELETE FROM table_buku WHERE id_buku='$brg'");
		header('location:pagebuku.php');
	}
if(isset($_GET['id_suplier'])){
		$brg = $_GET['id_suplier'];
		
		mysqli_query($db,"DELETE FROM table_penerit WHERE id_penerbit='$brg'");
		header('location:pagepenerbit.php');
	}
	
?>


	
</body>
</html>