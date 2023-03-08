<!DOCTYPE html>
<html lang="en">
<head>

<!-- UNTUK ONLINE
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-3.3.7-dist-1/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php echo base_url()?>alat/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url()?>alat/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>

body{
	background-color: #C5CB8F;
}

</style>
</head>
<body>

  <div class="col-sm-5 col-md-6" style="padding-left:40px;">
			<table class="table-condensed">
				<h2>DETAIL PERMINTAAN</h2>
<BR>

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
				<td><b>NPK </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["NPK"]; ?></td>
			</tr>
			<tr>
				<td><b>Status Permintaan </b></td>
				<td> : </td>
				<td> <?php  echo $data_permintaan["Status_Permintaan"]; ?></td>
			</tr>
<tr>
<td></td>
<td></td>
<td>
<a href="<?php echo base_url('C_tiket/home'); ?>" class="btn btn-primary">Back</a>
<button data-toggle="collapse" data-target="#demo1" class="btn btn-success">Ulasan & Saran</button></td>

</tr>	
</table>
	</form>
 </div>	

</body>
<div class="col-sm-5 col-md-6" style="padding-left:40px;">
<h2>Penilaian Kualitas Pelayanan</h2>
<legend></legend>
<div id="demo1" class="collapse">
<form method="POST" action="<?php echo base_url('C_tiket/Feedback_user/'.$dataarray['No_Permintaan']); ?>" enctype="multipart/form-data">
<input type="hidden" name="No_Permintaan" value="<?php echo $dataarray['No_Permintaan']; ?>">
<input type="hidden" name="Tanggal" class="form-control"  readonly="readonly" value = "<?php  echo $dataarray['Tanggal']; ;?>">
<input type="hidden" name="Level_Urgency"  value="<?php echo $dataarray['Level_Urgency']; ?>">
<input type="hidden" name="Uraian_Kebutuhan"  value="<?php echo $dataarray['Uraian_Kebutuhan']; ?>">
<input type="hidden" name="Benefit"  value="<?php echo $dataarray['Benefit']; ?>">
<input type="hidden" name="Lampiran"  value="<?php echo $dataarray['Lampiran']; ?>">
<input type="hidden" name="Jenis_Permintaan"  value="<?php echo $dataarray['Jenis_Permintaan']; ?>">
	<input type="hidden" value="<?php echo $dataarray["Gambar_Lampiran"]; ?>" name="Gambar_Lama"><!-- naro nama gambar jika no edit file -->
	<input type="hidden" name="Editfile" id="clickno" value="No">
	<input type="file" id="uploadfile" style="display:none;" class="custom-file-input" name="Gambar_Lampiran">
<input type="hidden" name="Nama_User" value="<?php echo $dataarray['Nama_User']; ?>" class="form-control">
<input type="hidden" name="Divisi" value="<?php echo $dataarray['Divisi']; ?>" class="form-control">
<input type="hidden" name="NPK" value="<?php echo $dataarray['NPK']; ?>" class="form-control">
<input type="hidden" name="Business_Impact" value="<?php echo $dataarray['Business_Impact']; ?>" class="form-control">
<input type="hidden" name="Kesulitan_Pengerjaan" value="<?php echo $dataarray['Kesulitan_Pengerjaan']; ?>" class="form-control">
<input type="hidden" name="Estimasi_Waktu1" value="<?php echo $dataarray['Estimasi_Waktu1']; ?>" class="form-control">
<input type="hidden" name="Estimasi_Waktu2" value="<?php echo $dataarray['Estimasi_Waktu2']; ?>" class="form-control">
<input type="hidden" name="Dikerjakan_Oleh" value="<?php echo $dataarray['Dikerjakan_Oleh']; ?>" class="form-control">
<input type="hidden" name="Analisa_Dampak" value="<?php echo $dataarray['Analisa_Dampak']; ?>" class="form-control">
<input type="hidden" name="Status_Permintaan" value="<?php echo $dataarray['Status_Permintaan']; ?>" class="form-control">
<input type="hidden" name="Keterangan_Diterima" value="<?php echo $dataarray['Keterangan_Diterima']; ?>" class="form-control">
<!-- BATAS INPUT..............................................................................................................................-->
<div class="form-group">
	<div class="col-sm-9">
<label for="No Permintan">Kepuasan Pelayanan</label><td>
<td><label class="radio-inline"><input required type="radio" name="Penilaian_pengerjaan" value="Puas" class="radio-inline">Puas</label>
<label class="radio-inline"><input required type="radio" name="Penilaian_pengerjaan" value="Sedang" class="radio-inline">Sedang</label>
<label class="radio-inline"><input required type="radio" name="Penilaian_pengerjaan" value="Tidak " class="radio-inline">Tidak</label>
</div>
</div>


<div class="form-group">
		<div class="col-xs-8">
<label for="NPK">Tambahkan Keterangan :</label>
<textarea name="Ulasan_Implementasi" required class="form-control" rows="5"></textarea>
</div>
</div>



<div class="form-group">
		<div class="col-xs-7">
<label for="NPK"></label>			
<input type="hidden" name="tes" class="form-control">
</div>
</div>

<div class="form-group">
	<div class="col-xs-8">
<input type="submit" name="submit" value="Simpan" class="btn btn-primary">

</div>
</div>
</form>
</html>