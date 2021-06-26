<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="uts.css">
	<title>UTS</title>
	<!-- <script type="text/javascript">
		function notif(){
			window.alert("TOLONG ISI SUBMIT DI BAWAH INI !!!");
		}
	</script> -->
</head>
<body>
<div class="p1">
    <h2> Nama : Muhammad Faiz Alfarros</h2>
    <h2> NIM  : 196500xx</h2>
    <h2> Praktikum Pemrograman WEB</h2>
</div>    
<div class="p2">
    <h1 class = "judul">UTS(Ulangan Tengah Semester)</h1>
	<form method="post" action=""> 
	  Bilangan: <input type="text" name="bil">
	  <br><br>
	  <input type="submit" name="submit" value="Submit" >
	</form>
	<br>
</div>	
    <div class="hasilakhir">
	<?php
	
		if (isset($_POST)) {
			$val = $_POST["bil"];
			$hasil = $val/2;//fungsi pembagian
			
			if ($val % 2 == 0){ //Kondisi modulus
				if ($hasil==0) {//kondisi menentukan hasil pembagian 
					
				}
			    echo '<script language="javascript">';
                echo 'alert("Bilangan Genap")
                ';
                echo '</script>';   
                echo "hasil pembagiannya adalah $hasil";//kondisi true
		}else {
			    echo "$val"; //Kondisi false
                echo '<script language="javascript">';
                echo 'alert("Bilangan Ganjil")';
                echo '</script>';
		}
	}
?>
</div>
</body>
</html>