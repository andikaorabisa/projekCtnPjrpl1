<!-- Pendaftaran Akun
<form action = 'aksi.php' method='post'>
	NIK <input type="number" name="nik"><br>
	Nama Lengkap <input type="text" name="nama_lengkap"><br>
	Username <input type ="text" name = "username"><br>
	Password <input type = "password" name = "password"><br>
	Alamat <textarea name= "alamat"></textarea><br>
	Tempat Lahir <input type = "text" name = "tempat_lahir"><br>
	Tanggal Lahir <input type = "date" name = "tgl_lahir"><br>
	Jenis Kelamin
	<select name="jk">
		<option value="L">Laki-laki</option>
		<option value="P">Perempuan</option>
	</select><br>
	<input type = "submit" value = "Registrasi">
</form> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="gradient">
  <?php include "../header.php"; ?>

  <div class="container card mt-5 col-6" >
  <div class="row my-3">
                <div class="col-lg-12 text-center">
                  <h3>Daftar</h3>
                </div>
              </div>
	  <form> 
    <div class="row">
		
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class="col-6">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control">
		</div>
		</div>
		<div class=" my-3">
                <div class="col-lg-12">
                  <input type="submit" value="Masuk" class="form-control btn btn-primary">
            
                </div>
              </div>
</form>
	</div>
  </div>

</body>
</html>