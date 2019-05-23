<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
// Code for change password 
if(isset($_POST['update']))
{
$vimage=$_FILES["img2"]["name"];
$id=intval($_GET['imgid']);
move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
$sql="update tblvehicles set Vimage2=:vimage where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':vimage',$vimage,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();

$_SESSION['msg']="Image updated successfully";



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
    <title>Car Rental | Change Image</title>
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
          <h1><i class="fa fa-pencil"></i> Change Image</h1>
        </div>
      </div>
      

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
             <?php if(isset($_POST['update']))

            {?>

              <div class="alert alert-success">
                <button type="button" id="demoNotify" class="close" data-dismiss="alert">×</button>
                <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?>
              </div>
            <?php } ?>



            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    
<div class="form-group">
                        <label class="control-label">Current Image1</label>
<?php 
$id=intval($_GET['imgid']);
$sql ="SELECT Vimage2 from tblvehicles where tblvehicles.id=:id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

<div class="form-control">
<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" width="300" height="200" style="border:solid 1px #000">
</div>
<?php }}?>
</div>

                      <div class="form-group">
                        <label class="control-label">Upload New Image 1</label>
                      <input type="file" class="form-control" name="img2" required>
                        </div>
                      </div>

                      
                    
                
                      
                      <div class="form-group">
                        <div class="form-control">
                
                          <button class="btn btn-primary" name="update" type="submit">Update</button>
                        </div>
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