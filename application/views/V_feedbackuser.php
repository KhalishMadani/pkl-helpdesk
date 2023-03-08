<!DOCTYPE html>
<html lang="en">
<head>
  <title>FEEDBACK USER</title>
  <meta charset="utf-8">
<!-- TAG UNTUK OFFLINE  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>alat/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>alat/button.css">
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
</script>
<button id="print-button">Print</button>

<script>
  document.getElementById("print-button").addEventListener("click", function(){
    window.print();
  });
</script>

<style>
@media print {
  .exclude-from-print {
    display: none;
  }
  table {
    border: none;
  }
}


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

#parent {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

#print-button {
    position: absolute;
    top: 5;
    right: 0;
    color: #FF2A0D;
    background-color: #B8D41B;
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
<body>
</body>
<div class="col-xs-11">
<div class="col-xs-11 pull-right" style="padding-left:0px;"> 

    <table class="table table-bordered table responsive">
      <h3 class="judul" style="color:black">FEEDBACK DARI USER</h3>
    <tr>
	        <th align="center"><b>No</b></th>
	        <th align="center"><b>No_Permintaan</b></th>
	        <th align="center"><b>Nama</b></th>
            <th align="center"><b>NPK</b></th>
            <th align="center"><b>Divisi</b></th>
            <th align="center"><b>Jenis</b></th>
	        <th align="center"><b>Ulasan</b></th>
	        <th align="center"><b>Penilaian Pengerjaan</b></th>
            <th align="center"><b>Status Permintaan</b></th>
            <th align="center" class="exclude-from-print"><b>Print</b></th>
		</tr>

		<?php
		$no=1;
		foreach($datatablepermintaan as $isinya){
			
		?>
		
    <tr>
    <tbody id="myTable">
		<td align="center" style="padding-top:10px;"><?php echo $no; ?></td>
		<td align="left" style="padding-top:4px;"><?php echo $isinya->No_Permintaan; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->Nama_User; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->NPK; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->Divisi; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->Jenis_Permintaan; ?></td>
    <td align="center" style="padding-top:10px;">
			<?php if($isinya->ulasan_implementasi === NULL){?>
					 <a><b style="color:red;">Belum Ditanggapi</b></a>	
				<?php
				}
				elseif ($isinya->ulasan_implementasi === $isinya->ulasan_implementasi){
        			echo $isinya->ulasan_implementasi;
				}
       ?>
   		</td>
           <td align="center" style="padding-top:10px;">
			<?php if($isinya->Penilaian_pengerjaan === NULL){?>
					 <a><b style="color:red;">Belum Ditanggapi</b></a>	
				<?php
				}
				elseif ($isinya->Penilaian_pengerjaan === $isinya->Penilaian_pengerjaan){
        			echo $isinya->Penilaian_pengerjaan;
				}
       ?>
   		</td>
           <td align="center" style="padding-top:10px;">
			<?php if($isinya->Status_Permintaan === NULL){?>
					 <a><b style="color:red;">Belum Ditanggapi</b></a>	
				<?php
				}
				elseif ($isinya->Status_Permintaan === $isinya->Status_Permintaan){
        			echo $isinya->Status_Permintaan;
				}
       ?>
   		</td>
	<!--<td align="left" style="padding-top:10px;"><?php echo $isinya->ulasan_implementasi; ?>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->Penilaian_pengerjaan; ?></td>
	<td align="left" style="padding-top:10px;"><?php echo $isinya->Status_Permintaan; ?></td>-->
    <td align="left" style="padding-top:5px;"><a href="<?php echo base_url("index.php/C_tiket/print_permintaan2/".$isinya->No_Permintaan) ?>" class="btn btn-primary exclude-from-print">Print</a></td>
</tr>

		<?php
		$no++;
		}
		?>

</table>

</body>
</html>
