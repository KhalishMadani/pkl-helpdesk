<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu utama</title>
  <meta charset="utf-8">
<!-- TAG UNTUK OFFLINE  -->
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/login/images/icons/favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>alat/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>alat/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url()?>alat/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>alat/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- SAMPAI DI SINI  -->

<style>


body{
   background:url('<?php echo base_url()?>assets/images/kiten.jpg');

}

img.jenal{
  border: inset;
  border-radius: 4px;
  margin-left: 150px;
  margin-top: 15px;
}
td{
  color: white;
}

</style>

</head>
<style>
    nav.navbar {
      background-color: #3E4F3C;
    }
  </style>

</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:white" href="http://localhost/helpdesk/">Aplikasi Trouble Ticket</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/helpdesk/">Home</a></li>     
           <!-- <li><a href="<?php echo base_url();?>C_tiket/dataumum"><img src="<?php echo base_url()?>assets/images/data.png" width="20px;" height="22px;"> Data Permintaan</a></li>-->

            <li><a href="<?php echo base_url();?>C_tiket/tentangapk"><img src="<?php echo base_url()?>assets/images/ABOUT.png" width="20px;" height="20px;"> Tentang Aplikasi</a></li>
          </li>
     </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>C_tiket/login"><img src="<?php echo base_url()?>assets/images/login.png" width="20px;" height="20px;"> LOGIN</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-"></span> </a></li>
      </ul>
    </div>
  </div>
</nav>
  
 <div class="col-sm-1 col-sm-offset-1 col-md-1 col-md-offset-0" style=padding-top:150px;>

<div class="container">
  <h3 style="color:white">Welcome To Trouble Ticket Application</h3>
  <p style="color:white">SOLUTION TO YOUR PROBLEM</p>
  <p style="color:white">SERVE YOUR REQUEST ANYTIME</p>
</div>
</div>
</div> 
<body>
</body>
</html>