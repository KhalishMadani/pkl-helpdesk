<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Buat Permintaan</title>
 <!--<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-3.3.7-dist-1/bootstrap-3.3.7-dist/css/bootstrap.min.css">
 <link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
--><link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/form.png"/>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">

<script>
$(document).ready(function(){
$("#clicktanggal").click(function(){
	$("#tanggal").toggle();
	$("#caribiasa").toggle();
	$("#tomboltanggal").toggle();
	$("#tomboldata").toggle();
})

$("#clicksearch").click(function(){
	$("#tanggal").toggle();
	$("#caribiasa").toggle();
	$("#tomboltanggal").toggle();
	$("#tomboldata").toggle();
})

});

</script>


<style>
h1{
font-family: Tw Cen MT Condensed Extra Bold;
color: dark;
font-variant: small-caps;
font-style: bold;
}
h4{
	font-family: Calibri;
	font-style: bold;
}
.file{
	outline-style: none;
}


body{
	background-image: url('../assets/images/b.jpg');
}

</style>
</head>
<center>
<h1>FORM PERMINTAAN</h1>
</center>
<center><h4><b>PERMOHONAN INSTALASI, CUSTOMIZE, REPARASI DAN PENGADAAN BARU</b></h4></center>

<body>

	<div class="container">
<form method="POST" action="<?php echo base_url('C_tiket/tambahpermintaan'); ?>" enctype="multipart/form-data">
<div class="form-group">
	<div class="col-sm-3">
<label for="No Permintaan">No Permintaan</label>
<input type="text" name="No_Permintaan" value="<?php echo $id; ?>" readonly="readonly" class="form-control">
</div>
</div>
<div class="form-group">
	<div class="col-sm-3">
<label for="No Permintaan">Tanggal</label>
<input  type="text" name="Tanggal" class="form-control" value = "<?php  date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d');?>" readonly="readonly">
</div>
</div>

<div class="form-group">
	<div class="col-sm-8">
<label for="No Permintaan">Level Urgency</label>
<label class="radio-inline"><input required type="radio" name="Level_Urgency" value="Tinggi" class="radio-inline">Tinggi</label>
<label class="radio-inline"><input required type="radio" name="Level_Urgency" value="Sedang" class="radio-inline">Sedang</label>
<label class="radio-inline"><input required type="radio" name="Level_Urgency" value="Rendah" class="radio-inline">Rendah</label>
</div>
</div>
<div class="form-group">
	<div class="col-sm-5">
<label for="Jenis Permintaan">Jenis Permintaan</label>
								<select class="form-control" name="Jenis_Permintaan">
								<option>Aplikasi (Pembuatan/Customize)</option>
								<option>Hardware</option>
								<option>Software</option>
								<option>Acessories</option>								
								</select> 
							</div>
						</div>
<div class="form-group">
	<div class="col-sm-8">
<label for="Uraian_Kebutuhan">Uraian Kebutuhan</label>
<textarea name="Uraian_Kebutuhan" required class="form-control" row="3"></textarea>
</div>
</div>

<div class="form-group">
	<div class="col-sm-9">
<label for="Benefit">Benefit</label>
<textarea name="Benefit" required class="form-control" row="5"></textarea>
</div>
</div>


<div class="form-group">
	<div class="col-sm-6">
<label for="Lampiran">Lampiran</label>
								<select required class="form-control" name="Lampiran">
								<option>Proposal</option>
								<option>Budget/Circulait</option>
								<option>Memo</option>
								<option>Sfesifikasi/Gambar Desain</option>
								<option>Lain-lain</option>								
								</select>
</div>
</div>
<div class="form-group">
	<div class="col-sm-12">
<label for="Lampiran Gambar">Lampirkan Gambar (Optional) </label>
<label name="Gambar_Lampiran">
<input type="file" class="file" name="Gambar_Lampiran">
</div>
</div>

<div class="form-group">
		<div class="col-sm-3">
<label for="NPK">NPK</label>
<input type="text" id="NPK" name="NPK" required class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-sm-5">
<label for="Nama_User">Nama Pemohon</label>
<input name="Nama_User" type="disable" class="form-control">
</div>
</div>

	<div class="col-sm-8">
	<div class="form-group">
  <label for="Dep./Divisi/Seksi">Dep./Divisi/Seksi</label>
  <select name="Divisi" required class="form-control">
    <option value="" disabled selected>Pilih Divisi Anda</option>
    <option value="Asset">Asset</option>
    <option value="SDM">SDM</option>
    <option value="IT">IT</option>
    <option value="IT">TRD</option>
    <option value="IT">Keuangan</option>
  </select>
</div>

</div>

<div class="form-group">
	<div class="col-sm-8">
<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
<a href="<?php echo base_url();?>C_tiket/home" class="btn btn-primary">Batal</a> 
</div>
</div>
</form>
</div>
</div>

	<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		    $('#NPK').autocomplete({
                source: "<?php echo site_url('C_tiket/get_autocomplete');?>",
     
                select: function (event, ui) {
                    $('[name="NPK"]').val(ui.item.label); 
                    $('[name="Nama_User"]').val(ui.item.nama);
                    $('[name="Divisi"]').val(ui.item.dept);
                }
            });

		});
	</script>

</body>
<br>	
