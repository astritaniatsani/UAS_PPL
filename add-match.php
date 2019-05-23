<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama']; 
$lawan=$_POST['lawan']; 
$ket=$_POST['ket'];
$lapangid=$_POST['lapangid'];
$useremail=$_SESSION['login'];
$lawan="Belum ada lawan";

$sql="INSERT INTO  tblmatch(userEmail,nama,LapangId,tanggal,lawan,ket) VALUES(:useremail,:nama,:lapangid,:tanggal,:lawan,:ket)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':lapangid',$lapangid,PDO::PARAM_STR);
$query->bindParam(':nama',$lapangid,PDO::PARAM_STR);
$query->bindParam(':tanggal',$tanggal,PDO::PARAM_STR);
$query->bindParam(':lawan',$lawan,PDO::PARAM_STR);
$query->bindParam(':ket',$ket,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Post Match successfull.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}

}

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>E - SPORT | Add Match</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>


<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!--Listing-Image-Slider-->


<!--/Listing-Image-Slider-->


   
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
      
      
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Match Now</h5>
          </div>
          <form method="post">
            
            <div class="form-group">
              <input type="text" class="form-control form_datetime" name="tanggal" placeholder="Tanggal Match" required>
            </div>
            <div class="form-group">
              <input type="text" name="nama" placeholder="Nama Match" required>
            </div>
            <div class="col-6">
                    <select name="lapangid" class="form-control" required="">
                      <option value=""> Select </option>
                      <?php $ret="select id,namalapang from tbllapang";
                      $query= $dbh -> prepare($ret);
                      $query-> execute();
                      $results = $query -> fetchAll(PDO::FETCH_OBJ);
                      if($query -> rowCount() > 0)
                      {
                        foreach($results as $result)
                        {
                          ?>
                          <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->namalapang);?></option>
                        <?php }} ?>

                      </select>
                    </div>
                  </div>
                  <br/>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="ket" placeholder="Keterangan" required></textarea>
            </div>
          <?php if($_SESSION['login'])
              {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Book Now">
              </div>
              <?php } else { ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Match</a>

              <?php } ?>
          </form>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>
     
    
  </div>
</section>
<!--/Listing-detail--> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>


    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd'});
</script> 



</body>
</html>