 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/USER.png"/>

<style>
.mytab{
border-radius: 3px;
}

li.src{
  margin-top: 12px;
}
</style>

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


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      

      <a class="navbar-brand" style="color:white" href="">Trouble Ticket</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="http://localhost/tescodeigniter/">Home</a></li>
        -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>LAPORAN</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>C_tiket/dataumum">Data Permintaan Masuk</a></li>
          <li><a href="<?php echo base_url();?>C_tiket/dataumum2">Feedback User</a></li>
          <li><a href="<?php echo base_url();?>C_tiket/data_permintaan_diterima_admin">Data Permintaan Diterima</a></li>
          <li><a href="<?php echo base_url();?>C_tiket/data_permintaan_ditolak_admin">Data Permintaan Ditolak</a></li>
          </ul>

          <!--<li><a href="<?php echo base_url();?>C_tiket/data_permintaan_diterima_admin"><img src="<?php echo base_url()?>assets/images/data.png" width="20px;" height="22px;"> <b>Permintaan Diterima</b></a></li>
          <li><a href="<?php echo base_url();?>C_tiket/data_permintaan_ditolak_admin"><img src="<?php echo base_url()?>assets/images/data.png" width="20px;" height="22px;"> <b>Permintaan Ditolak</b></a></li>-->
            <li><a href="<?php echo base_url();?>C_tiket/kelolauser2"><b><img src="<?php echo base_url()?>assets/images/data.png" width="20px;" height="22px;"> Kelola User</b></a></li>
            <li>
            <a style="color:white">(<?php echo $user['Nama_User'];?>) <span class="label label-success">Online</span></a>
            </li>
              <li class="src" style="margin-left:190px;">
                <b style="color:white">Search : </b><input id="myInput" type="text" placeholder="Search.." class="mytab">
            </li>
            <!--<li><a href="<?php echo base_url();?>C_tiket/print_permintaan2">Tentang List User</a></li>-->
          </li>
     </ul>
     -->
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>C_tiket/login" class="glyphicon glyphicon-user"> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-"></span> </a></li>
      </ul>-->
<ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/login/logout')?>" style="margin-left:5px;"><img src="<?php echo base_url()?>assets/images/Logout-512.png" width="23px;" height="24px;">Logout</a></li>
      </ul>


    </div>
  </div>
</nav>


</body>
</html>