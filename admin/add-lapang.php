<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
{ 
  header('location:index.php');
}
else{ 

  if(isset($_POST['submit']))
  {
    $namalapang=$_POST['namalapang'];
    $tipelapang=$_POST['tipelapang'];
    $harga=$_POST['harga'];
    $lokasi=$_POST['lokasi'];
    $lapangview=$_POST['lapangview'];
    $vimage1=$_FILES["img1"]["name"];
    $bajuteam=$_POST['bajuteam'];
    $shuttlecock=$_POST['shuttlecock'];
    $kantin=$_POST['kantin'];
    $toilet=$_POST['toilet'];
    $papanscore=$_POST['papanscore'];
    $wasit=$_POST['wasit'];
    $speaker=$_POST['speaker'];
    $lampu=$_POST['lampu'];
    move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);

    $sql="INSERT INTO tbllapang(namalapang,tipelapang,harga,lokasi,lapangview,vimage1,bajuteam,shuttlecock,kantin,toilet,papanscore,wasit,speaker,lampu) VALUES(:namalapang,:tipelapang,:harga,:lokasi,:lapangview,:vimage1,:bajuteam,:shuttlecock,:kantin,:toilet,:papanscore,:wasit,:speaker,:lampu)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':namalapang',$namalapang,PDO::PARAM_STR);
    $query->bindParam(':tipelapang',$tipelapang,PDO::PARAM_STR);
    $query->bindParam(':harga',$harga,PDO::PARAM_STR);
    $query->bindParam(':lokasi',$lokasi,PDO::PARAM_STR);
    $query->bindParam(':lapangview',$lapangview,PDO::PARAM_STR);
    $query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
    $query->bindParam(':bajuteam',$bajuteam,PDO::PARAM_STR);
    $query->bindParam(':shuttlecock',$shuttlecock,PDO::PARAM_STR);
    $query->bindParam(':kantin',$kantin,PDO::PARAM_STR);
     $query->bindParam(':toilet',$toilet,PDO::PARAM_STR);
    $query->bindParam(':papanscore',$papanscore,PDO::PARAM_STR);
    $query->bindParam(':wasit',$wasit,PDO::PARAM_STR);
    $query->bindParam(':speaker',$speaker,PDO::PARAM_STR);
    $query->bindParam(':lampu',$lampu,PDO::PARAM_STR);

    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
      $_SESSION['msg']="Post Lapangan Berhasil";
    }
    else 
    {
      $_SESSION['error']="Post Lapang gagal, Silahkan Coba Lagi";
    }

  }


  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="shortcut icon" href="images/profile.png">
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>E - SPORT | Post Lapangan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" href='datatabel/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='datatabel/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='datatabel/buttons.dataTables.min.css' rel='stylesheet'>




  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include('include/header.php');?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('include/sidebar.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil"></i> Buat Lapang</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <?php if(isset($_POST['submit']))

              {?>

                <div class="alert alert-success">
                  <button type="button" id="demoNotify" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['error']="");?>
                </div>
              <?php } ?>
              
              
              <form method="post" enctype="multipart/form-data">
                <h3 class="tile-title">Basic Info</h3>
                <br/>
                <div class="row">
                  <div class="col-6">
                    <input type="text" class="form-control" name="namalapang" placeholder="Nama Lapang" required="">
                  </div>
                 <div class="col-6">
                      <select class="form-control" name="tipelapang" required>
                        <option value=""> Select </option>
                         <option value="Futsal">Futsal</option>
                        <option value="Basket">Basket</option>
                        <option value="Voli">Voli</option>
                        <option value="Badminton">Badminton</option>
                      </select>
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div class="col-6">
                      <input type="text" class="form-control" name="harga" placeholder="Harga Per Jam (Rp)" required="">
                    </div>
                    <div class="col-6">
                      <select class="form-control" name="lokasi" required>
                        <option value=""> Select </option>
                         <option value="Lapang A">Lapang A</option>
                        <option value="Lapang B">Lapang B</option>
                      
                      </select>
                    </div>
                  </div>
                  <br/>
                    
                 
                  <div class="row">
                    <div class="col-12">
                      <textarea class="form-control" name="lapangview" rows="5" placeholder="overview" required=""></textarea>
                    </div>
                  </div>
                  <br/>
                  <h3 class="tile-title">Uploads Image</h3>

                  <div class="row">
                    <div class="col-4">
                      <input type="file" class="form-control" name="img1" required="">
                    </div> 
                  </div>
                  <br/>
                  <h3 class="tile-title">Fasilitas</h3>

                  <div class="row">
                    <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="bajuteam" name="bajuteam" value="1">
                          Baju Team
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="shuttlecock" name="shuttlecock" value="1">
                          shuttlecock tambahan
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="kantin" name="kantin" value="1">
                          Kantin
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="toilet" name="toilet" value="1">
                          Toilet
                        </label>
                      </div>
                    </div>
                  </div>


                  <br/>
                  <div class="row">
                    <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="papanscore" name="papanscore" value="1">
                          Papan Score
                        </label>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="wasit" name="wasit" value="1">
                          Wasit
                        </label>
                      </div>
                    </div>
                     <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="speaker" name="speaker" value="1">
                         Speaker
                        </label>
                      </div>
                    </div>
                     <div class="col-3">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="lampu" name="lampu" value="1">
                         Lampu Tambahan
                        </label>
                      </div>
                    </div>
                    <br>
                    

                  <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Published</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-Danger" type="reset"><i class="fa fa-fw fa-lg fa-check-circle"></i> Cancel</button>
                  </div>
                </form>
              </div>

            </div>
          </div>

        </div>



      </main>
      <!-- Essential javascripts for application to work-->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <!-- The javascript plugin to display page loading on top-->
      <script src="js/plugins/pace.min.js"></script>
      <!-- Page specific javascripts-->
      <!-- Google analytics script-->
      <script src="datatabel/jquery.dataTables.min.js"></script>
      <script src="datatabel/dataTables.responsive.min.js"></script>
      <script src="datatabel/dataTables.buttons.min.js"></script>
      <script src="datatabel/buttons.colVis.min.js"></script>

      <script>
       $(document).ready(function() {
        $('#example').DataTable( {
          dom: 'Bfrtip',
          buttons: [
          'colvis'
          ]
        } );
      } );
    </script>

  </body>
  </html>
  <?php } ?>