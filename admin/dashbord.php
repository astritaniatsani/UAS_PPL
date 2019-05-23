<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
{   
    header('location:index.php');
}
else{
    ?>
    <!DOCTYPE html>

    <html lang="en">

    <head>

        <link rel="shortcut icon" href="images/profile.png">

        <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">

        <!-- Twitter meta-->

        <!-- Open Graph Meta-->

        <meta property="og:type" content="website">

        <meta property="og:site_name" content="Vali Admin">

        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">

        <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">

        <title>E - SPORT</title>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Main CSS-->

        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- Font-icon css-->

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>

    <body class="app sidebar-mini rtl">

      <!-- Navbar-->

      <?php include('include/header.php');?>

      <!-- Sidebar menu-->

      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

      <?php include('include/sidebar.php');?>


      <main class="app-content">

        <div class="row">

          <div class="col-md-4 col-lg-3">

              <a href="reg-user.php">

                <div class="widget-small danger"><i class="icon fa fa-file"></i>

                  <div class="info">

                    <?php 
                    $sql ="SELECT id from tblusers ";
                    $query = $dbh -> prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $regusers=$query->rowCount();
                    ?>
                    <h6>Reg Users</h6>

                    <p><b><?php echo htmlentities($regusers);?></b></p>

                </div>

            </div>

        </a>

    </div>





    <div class="col-md-4 col-lg-3">

      <a href="manage-lapang.php">

          <div class="widget-small primary"><i class="icon fa fa-pause"></i>

            <div class="info">

                <?php 
                $sql1 ="SELECT id from tbllapang ";
                $query1 = $dbh -> prepare($sql1);;
                $query1->execute();
                $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                $totalvehicle=$query1->rowCount();
                ?>

                <h6>List Lapang</h6>

                <p><b><?php echo htmlentities($totalvehicle);?></b></p>

            </div>

        </div>

    </a>

</div>







<div class="col-md-4 col-lg-3">

    <a href="manage-book.php">

        <div class="widget-small info"><i class="icon fa fa-check-square"></i>

          <div class="info">
            <?php 
            $sql2 ="SELECT id from tblbooking ";
            $query2= $dbh -> prepare($sql2);
            $query2->execute();
            $results2=$query2->fetchAll(PDO::FETCH_OBJ);
            $bookings=$query2->rowCount();
            ?>



            <h6>Total Bookings</h6>

            <p><b><?php echo htmlentities($bookings);?></b></p>

        </div>

    </div>

</a>

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

</body>

</html>

<?php } ?>