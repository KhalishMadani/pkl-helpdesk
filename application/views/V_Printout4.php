<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trouble Ticket</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url()?>alat/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>alat/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url()?>alat/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function printContent(el){
            var a = document.body.innerHTML;
            var b = document.getElementById(el).innerHTML;
            document.body.innerHTML = b;
            window.print();
            document.body.innerHTML = a;
        }
    </script>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
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
        
        <li class="dropdown">
          <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>-->
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>C_tiket/dataumum">Data Permintaan</a></li>
            <li><a href="#">Data User</a></li>
          </ul>

          <!--<li><a href="<?php echo base_url();?>C_tiket/data_permintaan_diterima_admin"><b><img src="<?php echo base_url()?>assets/images/data.png" width="20px;" height="22px;"> Permintaan Diterima</b></a></li>
          <li><a href="<?php echo base_url();?>C_tiket/data_permintaan_ditolak_admin"><img src="<?php echo base_url()?>assets/images/data.png" width="20px;" height="22px;"><b> Permintaan Ditolak</b></a></li>
--><li><a href="<?php echo base_url();?>C_tiket/home"><img src="<?php echo base_url()?>assets/images/back.png" width="20px;" height="22px;"> <b>Kembali</b></a></li>
            <li><a href="<?php echo base_url();?>C_tiket/print_permintaan" onclick="printContent('print')"><img src="<?php echo base_url()?>assets/images/printer.png" width="23px;" height="24px;"><b> Print</b></a></li>
            <!--<li><a href="<?php echo base_url();?>C_tiket/tentangapk">Tentang Aplikasi</a></li>
          </li>
     </ul>
     -->
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>C_tiket/login" class="glyphicon glyphicon-user"> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-"></span> </a></li>
      </ul>-->



    </div>
  </div>
</nav>
   <div id="print" style="margin-top:20px;">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            
                            <td>
 <!--                               Trouble Ticket  <br>
                                Created :  <?php  date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d');?><br>
     -->                       </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                      <td class="title">
                                <img src="<?php echo base_url()?>assets/images/Pdam.png" style="width:20%; max-width:100px;">
                            </td>
                        <tr>
                            <td>
                                <b>PT. Air Minum Bandarmasih</b><br>
                                Jl. A. Yani No.12, Kebun Bunga, Kec. Banjarmasin Tim.,<br>
                                Kota Banjarmasin, Kalimantan Selatan 70234
                            </td>
                            <td> 
                            <strong>
                                APPROVER
                            </strong>
                        </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Tinjauan Approver
                </td>
                
                <td>
                    Detail
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Kode Permintaan :
                </td>
                
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
    echo $data_permintaan["No_Permintaan"];} ?>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Pembuatan :
                </td>
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
    echo $data_permintaan["Tanggal"];
    } ?>
                </td>
            </tr>
            <tr>
                <td>
                    Level Urgency :
                </td>
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
    echo $data_permintaan["Level_Urgency"];} ?>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Permintaan :
                </td>
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
    echo $data_permintaan["Jenis_Permintaan"];} ?>
                </td>
            </tr>
            <tr>
                <td>
                    Uraian Kebutuhan :
                </td>
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Uraian_Kebutuhan"];} ?>
                </td>
            </tr>
            <tr>
           <tr>
                <td>
                    Nama Pemohon :
                </td>
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Nama_User"];} ?>
                </td>
            </tr>
             <tr>
                <td>
                    Divisi/Dept/Seksi :
                </td>
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Divisi"];} ?>
                </td>
            </tr>     
            <tr class="item last">
                <td>
                    Business Impact :
                </td>
                
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Business_Impact"];} ?>
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Kesulitan Pengerjaan :
                </td>
                
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Kesulitan_Pengerjaan"];} ?>
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Estimasi  Waktu :
                </td>
                
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Estimasi_Waktu1"];} ?> Sd/  
                    <?php 
                    if (!is_null($data_permintaan)) {
                        echo $data_permintaan["Estimasi_Waktu2"];} ?>
                </td>
            </tr>
            <tr class="item last">
                <td>
                    Dikerjakan Oleh :
                </td>
                
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Dikerjakan_Oleh"];} ?>
                </td>
            </tr>
            <tr class="item last">
            <tr>
                <td>
                    Status Permintaan :
                </td>               
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Status_Permintaan"];} ?>
                </td>
            </tr>
                <tr>
                <td>
                    Catatan :
                </td>               
                <td>
                <?php 
                if (!is_null($data_permintaan)) {
                    echo $data_permintaan["Keterangan_Diterima"];} ?>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
