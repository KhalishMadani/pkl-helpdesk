<!DOCTYPE html>
<html lang="en">
<head>
  <title>DATA PERMINTAAN</title>
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
<button id="print-button">Print</button>

<script>
  document.getElementById("print-button").addEventListener("click", function(){
    window.print();
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
<form method="post" action="">
                <label>Filter by date range:</label>
                <input type="date" name="start_date" placeholder="Start Date">
                <input type="date" name="end_date" placeholder="End Date">
                <input type="submit" name="filter" value="Filter">
            </form>
    <table class="table table-bordered table responsive">
      <h3 class="judul" style="color:black">DATA PERMINTAAN MASUK</h3>
    <tr>
			<th align="center"><b>No</b></th>
			<th align="center"><b>Tanggal</b></th>
      <th align="center"><b>Level Urgency</b></th>
      <th align="center"><b>Jenis Permintaan</b></th>
      <th align="center"><b>Keperluan</b></th>
			<th align="center"><b>Nama Pemohon</b></th>
			<th align="center"><b>Dep.Divisi</b></th>
      <th align="center"><b>NPK</b></th>
      <th align="center"><b>Status</b></th>
      
		</tr>

		<?php
		$no=1;
    $start_date = "";
    $end_date = "";
    if(isset($_POST['filter'])) {
      $start_date = $_POST['start_date'];
      $end_date = $_POST['end_date'];
  }
  $records_count = 0;
		foreach($datatablepermintaan as $isinya){
      if(($start_date == "" || $isinya->Tanggal >= $start_date) && ($end_date == "" || $isinya->Tanggal <= $end_date)){
        $records_count++;
			
		?>
		
    <tr>
    <tbody id="myTable">
		<td align="center" style="padding-top:10px;"><?php echo $no; ?></td>
		<td align="left" style="padding-top:4px;"><?php echo $isinya->Tanggal; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->Level_Urgency; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->Jenis_Permintaan; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->Uraian_Kebutuhan; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isinya->Nama_User; ?></td>
		<td align="left" style="padding-top:10px;"><?php echo $isinya->Divisi; ?></td>
    <td align="left" style="padding-top:10px;"><?php echo $isinya->NPK; ?></td>
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
  </tr>
  

		<?php
		$no++;
		}}
		?>

</table>
<p>Total Keseluruan Tiket: <?php echo $records_count; ?></p>

</body>
</html>
