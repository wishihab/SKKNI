<html>
<title>Toko Buku</title>
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
<form action="pagepenerbit.php" method="GET">
        <input type="text" name="brg" />
        <input type="submit" value="Search" />
    </form>
	<b>DATABASE TABLE PENERBIT</b><br>
	<a href="/SKKNI/index.php">HOME | </a>
	<a href="/SKKNI/addpenerbit.php"> +TAMBAH PENERBIT+ |</a>
	<a href="/SKKNI/reportpenerbit.php">REPORT</a><br><br>


<?php
require_once("config.php");

if(isset($_GET['brg'])){
		$brg = $_GET['brg'];
$sql = "SELECT *from table_penerit where Nama LIKE '%".$brg."%'";
}else{
		$sql = "SELECT *from table_penerit";
}
		
	$result = $db->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row'
			
			
			echo "<table>";
			?>
			<tr>
			<th>ID Penerbit</th>
			<th>Nama Penerbit</th>
			<th>Negara</th>
			<th>Kota</th>
			<th>Setting</th>
			
			</tr>
			<?php
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["id_penerbit"]."</td><td>".$row["nama"]."</td><td>".$row["negara"]."</td><td>".$row["kota"]."</td><td><a href='form-edit.php?id_suplier=$row[id_penerbit]'>Edit</a>
                <a href='delete.php?id_suplier=$row[id_penerbit]'>Delete</a></td></tr>";
			}
				echo "</table>";
			}
		else{
			echo "There is no result in databases";
		}
		?>

</center>

			
</body>
</html>