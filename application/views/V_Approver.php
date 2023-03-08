<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
<!-- TAG UNTUK OFFLINE  -->
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/USER.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>alat/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>alat/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url()?>alat/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- SAMPAI DI SINI  -->

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<style>
 .table{
  float: left;
  margin-right: 10px;
  font-family:sans-serif;
  color:#444;
  border-collapse:collapse;
  width:100%;
  border:1px solid #f2f5f7;
}
.table tr th{
  background:#9EA59D;
  color:#fff;
  font-weight:normal;
    text-align:center;
  
}
.table, th, td{
  padding:8px 20px;
  text-align:center;
  color: white;
}
.table, tr, td{
  background-color: #808000;
  padding:8px 20px;
  text-align:;
}
.table tr:nth-child(even){
  background-color:;
}


body{
   background: url('<?php echo base_url()?>assets/images/musao.png');

}

h3.judul{
  background-color: #white;
  text-align: center;
}


</style>
 
</head>
<div class="col-xs-11">
<div class="col-xs-11 pull-right" style="padding-left:0px;"> 

		<table class="table table-bordered table responsive">

			<h3 class="judul" style="color:white">DATA SEMUA PERMINTAAN</h3>

		<tr>
			<th align="center"><b>No</b></th>
			<th align="center"><b>Kode Permintaan</b></th>
			<th align="center"><b>Level Urgency</b></th>
			<th align="center"><b>Jenis Permintaan</b></th>
			<th align="center"><b>Nama Pemohon</b></th>
			<th align="center"><b>Divisi</b></th>
			<th align="center"><b>Analisa</b></th>
			<th align="center"><b>Status Peninjauan</b></th>
		</tr>
		<?php
		$no=1;
		foreach($datanya as $isi){
			
		?>
		
		
		<tr>
		<tbody id="myTable">
		<td align="left" style="padding-top:10px;"><?php echo $no; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isi->No_Permintaan; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isi->Level_Urgency; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isi->Jenis_Permintaan; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isi->Nama_User; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isi->Divisi; ?></td>
		
		
		<td align="center" style="padding-top:10px;"><?php if($isi->Analisa_Dampak === NULL){
		echo '<center><b style="color:#8B0000">Dalam Proses Analisa</b></center>';
      	}elseif ($isi->Analisa_Dampak === $isi->Analisa_Dampak){
        echo '<center><b style="color:#FEFEFE">Selesai</b></center>';
		}
       ?></td>
       

       		<td align="center" style="padding-top:10px;">
			<?php 
				
				if($isi->Status_Permintaan === NULL){?>
					 <a href="<?php echo base_url("index.php/C_tiket/detailprintapprover/".$isi->No_Permintaan) ?>" class="btn btn-danger">Tanggapi<a>
				<?php
				}
				elseif ($isi->Status_Permintaan === $isi->Status_Permintaan){
        			echo '<b style="color:#FEFEFE">Selesai</b>';
				}
       ?>
   		</td>
			</tr>

		<?php
		$no++;
		
		}
		?>


</table>

</html>
