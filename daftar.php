<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validasi dengan Javascript - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h1><i>DataKu DataMu</i></h1></center>
	<center><h2>SMK CENDEKIA</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="proses_daftar.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Nama:</label>
				<input type="text" name="nama" id='nama'>
			</div>
			<div>
				<label>Email:</label>
				<input type="text" name="email" id='email'>
			</div>
			
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="usernme" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="daftar" class="tombol">
			</div>
			<div>
				sudah punya akun? <a href="login.php"> login</a>
			</div>
		</form>
	</div>

</body>


<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (nama !="" && username != "" && password!="") {
			return true;
		}else{
			alert('Nama,Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>