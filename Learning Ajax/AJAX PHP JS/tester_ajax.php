<!DOCTYPE html>
<html>
<head>
	<title>Tester Ajax</title>
</head>
<body>
	<table cellpadding="10" cellspacing="10">
		<tr>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>
		</tr>
		<tbody id="data"> <!-- Dataa Will Displayed Here !-->
			
		</tbody>
	</table>	
</body>
<script type="text/javascript">
	// Call Ajax
	var ajax = new XMLHttpRequest();
	var method = "GET";
	var url = "data.php";
	var asynchronous = true;

	ajax.open(method, url, asynchronous);
	
	// Sending ajax request
	ajax.send();	

	// Receiving response from data.php
	ajax.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			// Converting JSON back to array
			var data = JSON.parse(this.responseText);
			console.log(data); // For Debugging

			// HTML Value for <tbody>
			var html = "";
			// Looping Through The Data
			for ( var i = 0; i < data.length; i++ ) {
				var nis = data[i].nis;
				var nama_lengkap = data[i].nama_lengkap;
				var kelas = data[i].kelas;
				var jurusan = data[i].jurusan;

				// Appending on html
				html += "<tr>";
					html += "<td>" + nis + "</td>";
					html += "<td>" + nama_lengkap + "</td>";
					html += "<td>" + kelas + "</td>";
					html += "<td>" + jurusan + "</td>";
				html += "</tr>";

				document.getElementById('data').innerHTML = html;
			}
		}
	};

	console.log('Ada Perubahan')
</script>
</html>