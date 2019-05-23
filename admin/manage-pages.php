<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
{ 
  header('location:index.php');
}
else{
  if($_POST['submit']=="Update")
  {
    $pagetype=$_GET['type'];
    $pagedetails=$_POST['pgedetails'];
    $sql = "UPDATE tblpages SET detail=:pagedetails WHERE type=:pagetype";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':pagetype',$pagetype, PDO::PARAM_STR);
    $query-> bindParam(':pagedetails',$pagedetails, PDO::PARAM_STR);
    $query -> execute();
    $_SESSION['msg']="Page data updated  successfully";

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
    <title>Car Rental | Manage Pages</title>
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
    <script type="text/JavaScript">
      <!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); return x;
  }

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
      if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
    } else if (test!='R') { num = parseFloat(val);
      if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
      if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
      min=test.substring(8,p); max=test.substring(p+1);
      if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>


<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">
  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>


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
        <h1><i class="fa fa-pencil"></i>Manage Pages</h1>
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

              <div class="form-group">
                <label class="control-label">Select Page</label>
                <select name="menu1" class="form-control" onChange="MM_jumpMenu('parent',this,0)">
                  <option value="" selected="selected" class="form-control">Select One Page</option>
                  <option value="manage-pages.php?type=terms">terms and condition</option>
                  <option value="manage-pages.php?type=privacy">privacy and policy</option>
                  <option value="manage-pages.php?type=aboutus">aboutus</option> 
                  <option value="manage-pages.php?type=faqs">FAQs</option>
                </select>
              </div>

              <div class="form-group">
                <label class="control-label">Selected Pages</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php

                switch($_GET['type'])
                {
                  case "terms" :
                  echo "Terms and Conditions";
                  break;

                  case "privacy" :
                  echo "Privacy And Policy";
                  break;

                  case "aboutus" :
                  echo "About US";
                  break;

                  case "faqs" :
                  echo "FAQs";
                  break;

                  default :
                  echo "";
                  break;

                }

                ?>"  readonly>
              </div>

              <div class="form-group">
                <label class="control-label">Page Details</label>
                <textarea class="form-control" rows="10" name="pgedetails" id="pgedetails" required>
                  <?php 
                  $pagetype=$_GET['type'];
                  $sql = "SELECT detail from tblpages where type=:pagetype";
                  $query = $dbh -> prepare($sql);
                  $query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
                  $query->execute();
                  $results=$query->fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query->rowCount() > 0)
                  {
                    foreach($results as $result)
                    {   
                      echo htmlentities($result->detail);
                    }}
                    ?>

                  </textarea> 
                </div>

                <div class="form-group">
                  <button class="btn btn-primary" type="submit" name="submit" value="Update" id="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
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