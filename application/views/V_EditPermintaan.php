<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
 <link href="<?php echo base_url()?>assets/untukcssfoto/layout2.css" rel="stylesheet" type="text/css" media="all">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-3.3.7-dist-1/bootstrap-3.3.7-dist/css/bootstrap.min.css">
   <link href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script src="<?php echo base_url()?>assets/menuadmin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
--><link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/form.png"/>

	<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">

<script>
$(document).ready(function(){
$("#clickyes").click(function(){
	$("#uploadfile").slideDown();
	
})
$("#clickno").click(function(){
	$("#uploadfile").slideUp();
	
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
	background-image: url('../assets/images/back.png');
	background-repeat: no-repeat;
}

</style>
<center>
<h1>FORM PERMINTAAN</h1>
</center>
<center><h4><b>PERMOHONAN INSTALASI, CUSTOMIZE, REPARASI DAN PENGADAAN BARU</b></h4></center>

<body>
	<div class="container">
		<div class="form-row">
<form method="POST" action="<?php echo base_url('C_tiket/editdatapermintaanmenuuser/'.$dataarray['No_Permintaan']); ?>" enctype="multipart/form-data">
<div class="form-group">
	<div class="col-xs-4">
<label for="No Permintaan">No Permintaan</label>
<input type="text" name="No_Permintaan" value="<?php echo $dataarray['No_Permintaan']; ?>" readonly="readonly" class="form-control">
</div>
</div>
<div class="form-group">
	<div class="col-xs-3">
<label for="No Permintaan">Tanggal</label>
<input  type="text" name="Tanggal" class="form-control"  readonly="readonly" value = "<?php  echo $dataarray['Tanggal']; ;?>" readonly="readonly">
</div>
</div>

<div class="form-group">
	<div class="col-xs-8">
<label for="No Permintaan">Level Urgency</label>
<label class="radio-inline"><input required type="radio" name="Level_Urgency" value="Tinggi" class="radio-inline" >Tinggi</label>
<label class="radio-inline"><input required type="radio" name="Level_Urgency" value="Sedang" class="radio-inline" >Sedang</label>
<label class="radio-inline"><input required type="radio" name="Level_Urgency" value="Rendah" class="radio-inline" >Rendah</label>
</div>
</div>
<div class="form-group">
	<div class="col-xs-5">
<label for="Jenis Permintaan">Jenis Permintaan</label>
								<select class="form-control" name="Jenis_Permintaan">
								<option style="color:silver;"><?php echo $dataarray['Jenis_Permintaan']; ?></option>
								<option>Aplikasi (Pembuatan/Customize)</option>
								<option>Hardware</option>
								<option>Software</option>
								<option>Acessories</option>								
								</select> 
							</div>
						</div>
<div class="form-group">
	<div class="col-xs-8">
<label for="Uraian_Kebutuhan">Uraian Kebutuhan</label>
<textarea name="Uraian_Kebutuhan" class="form-control" row="3"><?php echo $dataarray['Uraian_Kebutuhan']; ?></textarea>
</div>
</div>
<div class="form-group">
	<div class="col-xs-9">
<label for="Benefit">Benefit</label>
<textarea name="Benefit" class="form-control" row="5"><?php echo $dataarray['Benefit']; ?></textarea>
</div>
</div>
<div class="form-group">
	<div class="col-xs-6">
<label for="Lampiran">Lampiran</label>
								<select class="form-control" name="Lampiran">
								<option style="color:silver;"><?php echo $dataarray['Lampiran']; ?></option>
								<option>Proposal</option>
								<option>Budget</option>
								<option>Memo</option>
								<option>Sfesifikasi/Gambar Desain</option>
								<option>Lain-lain</option>								
								</select>
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
	<label for="Lampiran Gambar">Gambar Lampiran Anda</label>
	<br>
	<img width="100px" height="100px" <?php echo img('/DataFoto/'.$dataarray["Gambar_Lampiran"]);?>
</div>
<br>
<div class="col-xs-12">
	<label for="Lampiran Gambar">Edit Lampiran Anda</label>
	<br>
	<input type="hidden" value="<?php echo $dataarray["Gambar_Lampiran"]; ?>" name="Gambar_Lama"><!-- naro nama gambar jika no edit file -->
	<input type="radio" required name="Editfile" id="clickyes" value="Yes"> <b>Yes</b>
	<input type="radio" required name="Editfile" id="clickno" value="No"> <b>No</b>

	<br>
	<input type="file" id="uploadfile" style="display:none;" class="custom-file-input" name="Gambar_Lampiran">
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
<input name="Nama_User" type="text" class="form-control">
</div>
</div>

	<div class="col-sm-8">
<div class="form-group">
<label for="Dep./Divisi/Seksi">Dep./Divisi/Seksi</label>
<select class="form-control" name="Divisi">
								<option style="color:silver;"><?php echo $dataarray['Divisi']; ?></option>								
								<option>Pilih Divisi Anda</option>
								<option>humas</option>
								<option>mis</option>
								<option>it</option>								
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