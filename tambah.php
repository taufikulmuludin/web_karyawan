<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>TAMBAH KARYAWAN</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="dashboard.php" class="logo">WEB <span class="lite">KARYAWAN</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
        
            
            
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
         
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                            
                            </span>
                            <span class="username">TAUFIK ULMULUDIN</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
             
              <li>
                <a href="index.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="dashboard.php">
                          
                          <span>Dashboard</span>
                      </a>
          </li>
          
          
          <li>
            <a class="" href="karyawan.php">
                        
                          <span>Karyawan</span>
                      </a>
          </li> 
          
         

          
          </li>

          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> TAMBAH KARYAWAN</h3>
            <ol class="breadcrumb">
             
            </ol>
          </div>
        </div>

<head>
	<title>TAMBAH DATA</title>
</head>
<body>
<form method="post">
	<table cellpadding="8">  
		<tr>    
			<td>NIS</td>    
			 
		</tr>  

		<tr>    
			<td>Nama</td>    
			<td><input type="text" name="nama_lengkap"></td>  
		</tr>  
		<tr>    
			<td>Jenis Kelamin</td>    
			<td>    <input type="radio" name="jenis_kelamin" value="L"> Laki-laki    
					<input type="radio" name="jenis_kelamin" value="P"> Perempuan    
			</td>  
		</tr>  
		<tr>    
			<td>tanggal lahir</td>    
			<td><input type="date" name="tanggal_lahir">
			</td>  
		</tr>  
		<tr>    
			<td>Alamat</td>    
			<td><textarea name="alamat"></textarea>
			</td>  
		</tr>  
		<tr>    
			<td>Email</td>    
			<td><input type="text" name="email" placeholder="email">
			</td>  
		</tr> 
    <tr>    
      <td>jabatan</td>    
      <td><input type="text" name="jabatan"></td>  
    </tr>  
		<tr>    
			<td>Foto</td>    
			<td><input type="file" name="foto">
			</td>  
		</tr>  
	</table>
 	<input type="submit" name="simpan" value="simpan">
</form>
<?php
	if (isset($_POST['simpan'])) {
		$nama_lengkap = $_POST['nama_lengkap'];
		$tanggal_lahir= $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$email = $_POST['email'];
    $jabatan = $_POST['jabatan'];		

		$fotobaru = date('dmYHis').$foto;
		$path = "img/".$fotobaru;
		if(move_uploaded_file($tmp, $path));

		$tambah = mysqli_query($koneksi,"INSERT INTO data_karyawan(nama_lengkap,tanggal_lahir,alamat,jenis_kelamin,email,jabatan,foto)VALUES('$nama_lengkap','$tanggal_lahir','$alamat','$jenis_kelamin','$email','$jabatan','$fotobaru')");
		if ($tambah){
			?>
			<script type="text/javascript">
				alert('Tambah data berhasil');
				document.location.href="karyawan.php";
			</script>	
			<?php
		}else {
			echo "Gagal Menambahkan Data!!";	
		}
		
	}
?>
</body>
</html>

 <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>



