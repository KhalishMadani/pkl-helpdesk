<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
 <link href="<?php echo base_url()?>assets/untukcssfoto/layout2.css" rel="stylesheet" type="text/css" media="all">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-3.3.7-dist-1/bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
   
<style>
body{
	 background: url('<?php echo base_url()?>assets/images/b.jpg');
}

h3.judul{
	text-align: center;
}

</style>




   </head>

   <body>

<h3 class="judul">EDIT USER</h3>
<legend></legend>
<form method="POST" action="<?php echo base_url('C_tiket/simpanedituser'); ?>" enctype="multipart/form-data">


<div class="form-group">
	<div class="col-xs-2">
<label for="Nama">Nama Lengkap</label>
<input name="Nama_Pemohon" value="<?php echo $dataarray['Nama_User']; ?>" class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-xs-2">
<label for="Nama">NPK</label>
<input name="NPK" value="<?php echo $dataarray['NPK']; ?>" class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-xs-2">
<label for="Nama">Dept./Divisi</label>
<input name="Divisi" value="<?php echo $dataarray['Divisi']; ?>" class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-xs-2">
<label for="No Permintaan">Username</label>
<input name="username" value="<?php echo $dataarray['username']; ?>" class="form-control">
</div>
</div>

<div class="col-xs-2">
<label for="Uraian_Kebutuhan">Password</label>
<input name="password" value="<?php echo $dataarray['password']; ?>"  class="form-control">
</div>

	<div class="form-group">
	<div class="col-xs-2">
<label for="level">Level ID</label>
								<select class="form-control" name="level">
								<option value="2">Admin</option>
								<option value="3">User</option>
								<option value="1">Approver</option>								
								</select> 
							</div>
						</div>

<input type="hidden" name="status" value="1">

<div class="form-group">
	<div class="col-xs-8" style="margin-top:10px;">
<input type="submit" name="submit" value="Simpan" class="btn btn-primary" onclick="return confirm('Anda Yakin Data Sudah Benar')">
<a href="<?php echo base_url();?>C_tiket/kelolauser" class="btn btn-primary">Batal</a> 
</div>
</body>
</html>