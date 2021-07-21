<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Webservice Data Tabungan Supir</title>
	<link rel="stylesheet" href="">
	<link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h2>Data Tabungan</h2>
		<p id="demo1"></p>
		<p id="demo2"></p>
		<p id="demo3"></p>
		<table class="table table-striped">
			<caption>table title and/or explanatory text</caption>
			<thead>
				<tr>
					<th>ID</th>
					<th>NAMA</th>
					<th>header</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>		
			</tbody>
		</table>
		<script>
			var myJSON = '{ "name":"John", "age":31, "city":"New York" }';
			var myObj = JSON.parse(myJSON);
			document.getElementById("demo1").innerHTML = myObj.name;
			document.getElementById("demo2").innerHTML = myObj.age;
			document.getElementById("demo3").innerHTML = myObj.city;
		</script>
	</div>
</body>
</html>