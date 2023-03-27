<!DOCTYPE html>
<html>
<head>
	<title>Form A Bawaslu Kota Malang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<!-- <h1>FORM. A</h1> -->
		<h2>FORM. A</h2>
		<h2>LAPORAN HASIL PENGAWASAN PEMILU 2024</h2>
		<h2>NOMOR:  /LHP/PM.00.02/JI.34/00/2023</h2>
		<!-- <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
	</center>
 	<h3>I.	Data Pengawas Pemilihan:</h3>
	<h4>Tahapan yang diawasi</h4>
	<table class='table table-bordered'>
		<thead>
			<tr>
				
				<th>Nama Pelaksana Tugas :</th>
				<th>Email</th>
				<th>Alamat</th>
			
			</tr>
		</thead>
		<tbody>
			
			@foreach($customer as $CS)
			<tr>
			<td>{{$CS->nama}}</td>
	
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>