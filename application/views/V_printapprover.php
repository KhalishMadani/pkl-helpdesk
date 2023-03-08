<!DOCTYPE html>
<html lang="en">
<head>
  
<!-- UNTUK ONLINE -->


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- TAG UNTUK OFFLINE  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>alat/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>alat/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url()?>alat/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- SAMPAI DI SINI  -->


<style>
body{
	background-image: url('/assets/images/bck.jpg');
}

</style>

</head>

<body>
	<div class="row">
  <div class="col-sm-4 col-md-5" style="padding-left:60px;">
			<table class="table-condensed">
				<h3>DETAIL PERMINTAAN</h3>

			<tr>
				<td><b>Kode Permintaan </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["No_Permintaan"]; ?> </td>
			</tr>
			<tr>
				<td><b>Tanggal Permintaan </b></td>
				<td> : </td>
				<td>  <?php  echo $data_permintaan["Tanggal"]; ?></td>
			</tr>
				<td><b>Level Urgency</b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Level_Urgency"]; ?> </td>
			</tr>
			<tr>
				<td><b>Uraian Kebutuhan</b></td>
				<td> : </td> 
				<td> <?php  echo $data_permintaan["Uraian_Kebutuhan"]; ?> </td>
			</tr>
			<tr>
				<td><b>Benefit</b> </td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Benefit"]; ?> </td>
			</tr>
			<tr>
			<td><b>Lampiran </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Lampiran"]; ?> </td>
			</tr>
			<tr>
			<tr>
				<td><b>Lampiran Gambar  (Jika Ada) </b></td>
				<td>: </td>
				<td> <img class="img-thumbnail" width="190px" height="150px" <?php echo img('/DataFoto/'.$data_permintaan["Gambar_Lampiran"]);?>
					<br>
					

<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">Perjelas Gambar</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gambar Lampiran</h4>
      </div>
      <div class="modal-body">
        <p><img class="img-thumbnail" width="800px" height="750px" <?php echo img('/DataFoto/'.$data_permintaan["Gambar_Lampiran"]);?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



			</tr>
			<tr>
				<td><b>Jenis Permintaan </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Jenis_Permintaan"]; ?></td>
			</tr>
			<tr>
				<td><b>Pemohon </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Nama_User"]; ?></td>
			</tr>
			<tr>
				<td><b>Divisi </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Divisi"]; ?></td>
			</tr>
			<tr>
				<td><b>NPK </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["NPK"]; ?></td>
			</tr>
				<tr>
				<td><b>Business Impact </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Business_Impact"]; ?></td>
			</tr>
				<tr>
				<td><b>Kesulitan Pengerjaan </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Kesulitan_Pengerjaan"]; ?></td>
			</tr>
			<tr>
				<td><b>Estimasi Waktu </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Estimasi_Waktu1"]; ?> Sampai Dengan <?php  echo $data_permintaan["Estimasi_Waktu2"]; ?></td>
			</tr>
			<tr>
				<td><b>Dikerjakan Oleh </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Dikerjakan_Oleh"]; ?></td>
			</tr>
			<tr>
				<td><b>Aanalisa Dampak </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Analisa_Dampak"]; ?></td>
			</tr>
<tr>
<td></td>
<td></td>
<td>
<a href="<?php echo base_url('C_tiket/home'); ?>" class="btn btn-default">Back</a>
<button data-toggle="collapse" data-target="#demo1" class="btn btn-primary">Accept</button>
<button data-toggle="collapse" data-target="#demo2" class="btn btn-danger">Reject</button></td>

</tr>	
</table>
	</form>
 </div>	
  <div class="col-sm-3 col-md4 col-md-1 col-md-offset-0">
<div id="demo1" class="collapse">




	<div class="container">
		<div class="form-row">
 	<h3>PENERIMAAN PERMINTAAN</h3>
<form method="POST" action="<?php echo base_url('C_tiket/approve_permintaan/'.$data_permintaan['No_Permintaan']); ?>" enctype="multipart/form-data">
<input type="hidden" name="No_Permintaan" value="<?php echo $data_permintaan['No_Permintaan']; ?>">
<input type="hidden" name="Tanggal" class="form-control"  readonly="readonly" value = "<?php  echo $data_permintaan['Tanggal']; ;?>">
<input type="hidden" name="Level_Urgency"  value="<?php echo $data_permintaan['Level_Urgency']; ?>">
<input type="hidden" name="Uraian_Kebutuhan"  value="<?php echo $data_permintaan['Uraian_Kebutuhan']; ?>">
<input type="hidden" name="Benefit"  value="<?php echo $data_permintaan['Benefit']; ?>">
<input type="hidden" name="Lampiran"  value="<?php echo $data_permintaan['Lampiran']; ?>">
<input type="hidden" name="Jenis_Permintaan"  value="<?php echo $data_permintaan['Jenis_Permintaan']; ?>">
	<input type="hidden" value="<?php echo $data_permintaan["Gambar_Lampiran"]; ?>" name="Gambar_Lama"><!-- naro nama gambar jika no edit file -->
	<input type="hidden" name="Editfile" id="clickno" value="No">
	<input type="file" id="uploadfile" style="display:none;" class="custom-file-input" name="Gambar_Lampiran">
<input type="hidden" name="Nama_User" value="<?php echo $data_permintaan['Nama_User']; ?>" class="form-control">
<input type="hidden" name="Divisi" value="<?php echo $data_permintaan['Divisi']; ?>" class="form-control">
<input type="hidden" name="NPK"   value="<?php echo $data_permintaan['NPK']; ?>" class="form-control">
<input type="hidden" name="Business_Impact" value="<?php echo $data_permintaan['Business_Impact']; ?>" class="form-control">
<input type="hidden" name="Kesulitan_Pengerjaan" value="<?php echo $data_permintaan['Kesulitan_Pengerjaan']; ?>" class="form-control">
<input type="hidden" name="Estimasi_Waktu1" value="<?php echo $data_permintaan['Estimasi_Waktu1']; ?>" class="form-control">
<input type="hidden" name="Estimasi_Waktu2" value="<?php echo $data_permintaan['Estimasi_Waktu2']; ?>" class="form-control">
<input type="hidden" name="Dikerjakan_Oleh" value="<?php echo $data_permintaan['Dikerjakan_Oleh']; ?>" class="form-control">
<input type="hidden" name="Analisa_Dampak" value="<?php echo $data_permintaan['Analisa_Dampak']; ?>" class="form-control">


<div class="form-group">
	<div class="col-xs-5">
<label for="Status_Permintaan">STATUS PERMINTAAN</label>
<input type="text" name="Status_Permintaan" value="Diterima" readonly="readonly" class="form-control">
</div>    
</div>
<div class="form-group">
	<div class="col-xs-8">
		<label for="No Permintaan">TAMBAHKAN KETERANGAN PENERIMAAN PERMINTAAN</label>
		<textarea name="Keterangan_Diterima" class="form-control" rows="4"></textarea>
</div>
</div> 

<div class="form-group">
	<div class="col-xs-10">
		<input type="hidden" name="" class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-xs-4">
	<td>Simpan dan Lanjutkan</td>
	<td></td>
 <input type="submit" class="btn btn-primary" value="SAVE" onclick="return confirm('Anda Yakin Ingin Menerima Permintaan ?')">
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
<!-- BATAS FORM PENERIMAAN DAN PENOLAKAN-->




<div class="col-sm-3 col-md4 col-md-1 col-md-offset-0">
<div id="demo2" class="collapse">




	<div class="container">
		<div class="form-row">

<h3>PENERIMAAN PERMINTAAN</h3>
<form method="POST" action="<?php echo base_url('C_tiket/tolak_permintaan/'.$data_permintaan['No_Permintaan']); ?>" enctype="multipart/form-data">
<input type="hidden" name="No_Permintaan" value="<?php echo $data_permintaan['No_Permintaan']; ?>">
<input type="hidden" name="Tanggal" class="form-control"  readonly="readonly" value = "<?php  echo $data_permintaan['Tanggal']; ;?>">
<input type="hidden" name="Level_Urgency"  value="<?php echo $data_permintaan['Level_Urgency']; ?>">
<input type="hidden" name="Uraian_Kebutuhan"  value="<?php echo $data_permintaan['Uraian_Kebutuhan']; ?>">
<input type="hidden" name="Benefit"  value="<?php echo $data_permintaan['Benefit']; ?>">
<input type="hidden" name="Lampiran"  value="<?php echo $data_permintaan['Lampiran']; ?>">
<input type="hidden" name="Jenis_Permintaan"  value="<?php echo $data_permintaan['Jenis_Permintaan']; ?>">
	<input type="hidden" value="<?php echo $data_permintaan["Gambar_Lampiran"]; ?>" name="Gambar_Lama"><!-- naro nama gambar jika no edit file -->
	<input type="hidden" name="Editfile" id="clickno" value="No">
	<input type="file" id="uploadfile" style="display:none;" class="custom-file-input" name="Gambar_Lampiran">
<input type="hidden" name="Nama_User" value="<?php echo $data_permintaan['Nama_User']; ?>" class="form-control">
<input type="hidden" name="Divisi" value="<?php echo $data_permintaan['Divisi']; ?>" class="form-control">
<input type="hidden" name="NPK" value="<?php echo $data_permintaan['NPK']; ?>" class="form-control">
<input type="hidden" name="Business_Impact" value="<?php echo $data_permintaan['Business_Impact']; ?>" class="form-control">
<input type="hidden" name="Kesulitan_Pengerjaan" value="<?php echo $data_permintaan['Kesulitan_Pengerjaan']; ?>" class="form-control">
<input type="hidden" name="Estimasi_Waktu1" value="<?php echo $data_permintaan['Estimasi_Waktu1']; ?>" class="form-control">
<input type="hidden" name="Estimasi_Waktu2" value="<?php echo $data_permintaan['Estimasi_Waktu2']; ?>" class="form-control">
<input type="hidden" name="Dikerjakan_Oleh" value="<?php echo $data_permintaan['Dikerjakan_Oleh']; ?>" class="form-control">
<input type="hidden" name="Analisa_Dampak" value="<?php echo $data_permintaan['Analisa_Dampak']; ?>" class="form-control">

<div class="form-group">
	<div class="col-xs-5">
<label for="Status_Permintaan">STATUS PERMINTAAN</label>
<input type="text" name="Status_Permintaan" value="Ditolak" readonly="readonly" class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-xs-8">
		<label for="No Permintaan">TAMBAHKAN KETERANGAN PENOLAKAN PERMINTAAN</label>
		<textarea name="Keterangan_Ditolak" class="form-control" rows="4"></textarea>
</div>
</div>

<div class="form-group">
	<div class="col-xs-10">
		<input type="hidden" name="" class="form-control" >
</div>
</div>

<div class="form-group">
	<div class="col-xs-4">
	<td>Simpan dan Lanjutkan</td>
	<td></td>
 <input type="submit" class="btn btn-primary" value="SAVE" onclick="return confirm('Anda Yakin Ingin Menolak Permintaan ?')">
</div>
</div>
</fieldset>
</form>
</div>
</div>

</div>
<br>
</br>
</body>