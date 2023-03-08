<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>


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
<style>
    nav.navbar {
      background-color: #3E4F3C;
    }
  </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      

      <a class="navbar-brand" style="color:white">Trouble Ticket</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Laporan</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>C_tiket/dataumum">Data Permintaan Masuk</a></li>
            <li><a href="<?php echo base_url();?>C_tiket/dataumum2">Feedback User</a></li>
          </ul>

<!--<li><a><img src="<?php echo base_url()?>assets/images/data.png" width="20px;" height="22px;"><b>Laporan</b></a></li>-->
              <li class="src" style="margin-left:250px;">
                <b style="color:white">Search : </b><input id="myInput" type="text" placeholder="Search.." class="mytab">
            </li>
        <li><a href="#"><span class="glyphicon glyphicon-"></span> </a></li>
        <li><a href="<?php echo base_url();?>C_tiket/home"><b>Kembali</b></a></li>
      </ul>


    </div>
  </div>
</nav>

</body>
</html>