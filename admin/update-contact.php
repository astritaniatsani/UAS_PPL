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
  if(isset($_POST['submit']))
  {
    $address=$_POST['address'];
    $email=$_POST['email']; 
    $contactno=$_POST['contactno'];
    $sql="update tblcontactusinfo set Address=:address,EmailId=:email,ContactNo=:contactno";
    $query = $dbh->prepare($sql);
    $query->bindParam(':address',$address,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
    $query->execute();
    $_SESSION['msg']="Info Updateed successfully";
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
    <title>Car Rental | Update Contact Info</title>
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
          <h1><i class="fa fa-pencil"></i>Update Contact Info</h1>
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
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?>
                </div>
              <?php } ?>
              
              
              
              <form method="post">
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <?php $sql = "SELECT * from  tblcontactusinfo ";
                $query = $dbh -> prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                  foreach($results as $result)
                    {       ?>  

                      <div class="form-group">
                        <label class="control-label">Address</label>
                        <textarea type="text" class="form-control" name="address" id="address" required><?php echo htmlentities($result->Address);?></textarea>
                      </div>

                      <div class="form-group">
                        <label class="control-label">Email Id</label>
                         <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlentities($result->EmailId);?>" required>
                       </div>

                       <div class="form-group">
                        <label class="control-label">Contact Number</label>
                        <input type="text" class="form-control" value="<?php echo htmlentities($result->ContactNo);?>" name="contactno" id="contactno" required>
                      </div>
                    <?php }} ?>
                    <div class="form-group">
                      <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
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