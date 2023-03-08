<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>

<!-- TAG UNTUK OFFLINE  -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-3.3.7-dist-1/bootstrap-3.3.7-dist/css/bootstrap.min.css">
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

</style>

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

<center>
<div class="col-xs-10">
<div class="col-xs-11 pull-right"> 

		<table class="table table-bordered table responsive">
			<h3 class="judul" style="color:white">DATA USER</h3>
		<tr>
			<th><b>No</b></th>
			<th><b>Nama</b></th>
      <th><b>NPK</b></th>
      <th><b>Divisi</b></th>
			<th><b>Username</b></th>
			<th><b>Password</b></th>
			<th><b>Level User</b></th>
			<th><b>Tools</b></th>
		</tr>

		<?php
		$no=1;
		foreach($datatableuser as $isi){
			
		?>
		
		
		<tr>
		<tbody id="myTable">
		<td><?php echo $no; ?></td>
		<td><?php echo $isi->Nama_User; ?></td>
    <td><?php echo $isi->NPK; ?></td>
    <td><?php echo $isi->Divisi; ?></td>
		<td><?php echo $isi->username; ?></td>
		<td><?php echo $isi->password; ?></td>
		<td><?php if($isi->level === '1'){
        echo 'Approver';
      }else if($isi->level === '2'){
        echo 'Admin';
      }else if($isi->level === '3'){
        echo 'User';
      }else{
        echo 'Error! gagal mengambil status akun';
      } ?>
  		</td>
  <td  align="center"><a href="<?php echo base_url("index.php/C_tiket/edit_user/".$isi->username) ?>" onclick="return confirm('Edit This Data..?')" class="btn btn-success">EDIT</span><a>
 			 <a href="<?php echo base_url("index.php/C_tiket/hapususername/".$isi->username) ?>" onclick="return confirm('Delete This Data..?')" class="btn btn-danger" title="Hapus">HAPUS</a>
  </td>
		<?php
		$no++;
		}
		?>

</table>
</div>

</body>
</html>
