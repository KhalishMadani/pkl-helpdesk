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
   background: url('<?php echo base_url()?>assets/images/kiten.jpg');

}

h2.judul{
  color:#B8860B;
}


h3.judul{
  background-color: #white;
  text-align: center;
}

</style>
 
</head>
<body >
<div class="col-xs-12">
<div class="col-xs-12 pull-right" style="padding-left:0px;"> 

		<table class="table table-bordered table responsive">

			<h3 class="judul" style="color:white">DATA SEMUA PERMINTAAN</h3>
		<tr>	
		<tr>
			<th align="center"><b>No</b></th>
			<th align="center"><b>Kode Permintaan</b></th>
			<th align="center"><b>Tanggal</b></th>
			<th align="center"><b>Level Urgency</b></th>
			<th align="center"><b>Jenis Permintaan</b></th>
			<th align="center"><b>Nama Pemohon</b></th>
			<th align="center"><b>Dep.Divisi</b></th>
			<th align="center"><b>Analysis</b></th>
			<th align="center"><b>Status</b></th>
			<th align="center">Implementasi</b></th>
			<!--<th align="center"><b>Aksi</b></th>-->

		</tr>

		<?php
		$no=1;
		foreach($data_tablepermintaan as $isine){
			
		?>
		
		
		<tr>
		<tbody id="myTable">
		<td align="center" style="padding-top:10px;"><?php echo $no; ?></td>
		<td align="center" style="padding-top:10px;"><?php echo $isine->No_Permintaan; ?></td>
		<td align="left" style="padding-top:4px;"><?php echo $isine->Tanggal; ?></td>
		<td align="center" style="padding-top:10px;"><?php echo $isine->Level_Urgency; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isine->Jenis_Permintaan; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isine->Nama_User; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isine->Divisi; ?></td>
		<td align="center" style="padding-top:10px;"><?php if($isine->Business_Impact === NULL){
		echo '<center><b style="color:#8B0000">Belum Ditanggapi</b></center>';
      	}elseif ($isine->Business_Impact === $isine->Business_Impact){
        echo '<center><b style="color:#008000">Selesai</b></center>';
		}
       ?>
   		</td>
		<td align="center" style="padding-top:10px;"><?php if($isine->Status_Permintaan === NULL){
		echo '<center><b style="color:#8B0000">Belum Ditanggapi</b></center>';
      	}elseif ($isine->Status_Permintaan === $isine->Status_Permintaan){
        echo ($isine->Status_Permintaan);
		}
       ?>
   		</td>
   	    </td>
		<td align="center" style="padding-top:10px;">
			<?php 
				
				if($isine->ulasan_implementasi === NULL){?>
					 <a href="<?php echo base_url("index.php/C_tiket/Feedback_user/".$isine->No_Permintaan) ?>" class="btn btn-danger">Feedback</a>
				<?php
				}
				elseif ($isine->ulasan_implementasi === $isine->ulasan_implementasi){
        			echo 'Selesai';
				}
       ?>
   		</td>
		<!--<td align="left" style="padding-top:10px;"><a href="<?php echo base_url("index.php/C_tiket/editdatapermintaanmenuuser/".$isine->No_Permintaan) ?>" onclick="return confirm('Edit This Data..?')" class="btn btn-success">Edit<a></td>-->

				   
		<?php
		$no++;
		}
		?>
</tbody>
</table>
</body>
</html>


