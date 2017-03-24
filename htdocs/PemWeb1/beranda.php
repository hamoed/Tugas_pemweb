<?php
	session_start();
	unset($_SESSION['Username1']);
	if(!isset($_SESSION['Username']))
	{
		header("Location: login.php");
	}
	else
	{
		include 'koneksi.php';
		$data=mysqli_query($koneksi, 'select * from database1');
		if (!$data) 
		{
			die('SQL Error : '.mysqli_error($koneksi));
		}
	}
?>
<html>
<head>
	<?php include 'header1.php';?>
	<title>Data Anggota</title>
	<style type="text/css">
		body 
		{
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table 
		{
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}	
		h1 
		{
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}	
		table td 
		{
			transition: all .5s;
		}		
		/* Table */
		.data-table 
		{
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}
		.data-table th, 
		.data-table td
		{
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption 
		{
			margin: 7px;
		}
		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}
		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}
		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Daftar SD / MI di DIY </h1>
	<table class="data-table">
		<caption class="title">View Only</caption>
		<thead>
			<tr>
				<th>NPSN</th>
				<th>NAMA SEKOLAH</th>
				<th>ALAMAT</th>
				<th>DESA/KELURAHAN</th>
				<th>KECAMATAN</th>
				<th>KOTA</th>
				<th>JENJANG</th>
				<th>STATUS</th>
				<th>AKREDITASI</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while ($row = mysqli_fetch_array($data))
				{
					echo '<tr>
							<td>'.$row['NPSN'].'</td>
							<td>'.$row['nama_sekolah'].'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['desa'].'</td>
							<td>'.$row['kecamatan'].'</td>
							<td>'.$row['kota'].'</td>
							<td>'.$row['jenjang'].'</td>
							<td>'.$row['status'].'</td>
							<td>'.$row['akreditasi'].'</td>
						</tr>';
				}
			?>
		</tbody>
	</table>
</body>
</html>
