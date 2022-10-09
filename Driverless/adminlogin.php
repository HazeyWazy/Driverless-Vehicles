<?php
session_start();
include('adminheader.php');
include('connect.php');

if (isset($_POST['btnLogin'])) 
{
    $AdminUsername=$_POST['txtAdminUsername'];
    $Password=$_POST['txtPassword'];
    $query="SELECT * FROM adminstaff
            WHERE Username='$AdminUsername'
            AND Password='$Password'";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);

    if ($count>0) 
    {
        $arr=mysqli_fetch_array($result);
        $_SESSION['adminid']=$arr['AdminID'];
        echo "<script>alert('Admin Login Successful!');</script>";
        echo "<script>window.location='vehiclelist.php';</script>";
    }
    else
    {
        echo "<script>alert('Invalid Login!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Driverless is a company that provides information about autonomous vehicles, including the Artificial Intelligence (AI) technology that is used to develop these vehicles.">
        <meta name="author" content="Driverless">

        <title>Driverless - Admin Login Page</title>
        <!-- Styles -->        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        <!-- Header -->
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>ADMIN LOGIN</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container" style="margin-top: 10px;">
                        <center><img class="img-fluid" src="images/admin.png" alt="admin"></center>
                    </div>
                    <div class="text-container" style="margin-top: 17.5px;">
                        <center><p>If you are an officially registered admin member, please login.</p></center>
                    </div>
                </div>
                <div class="col-lg-6">                    
                    <form id="CallMeForm" data-focus="false" action="adminlogin.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="txtAdminID" name="txtAdminID" hidden>
                        </div>
                        <div class="form-group">                                
                            <input type="text" class="form-control-input" id="txtAdminUsername" name="txtAdminUsername" required>
                            <label class="label-control" for="txtAdminUsername">Username</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" id="txtPassword" name="txtPassword" required>
                            <label class="label-control" for="txtPassword">Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button" name="btnLogin">LOGIN</button>
                        </div>
                        <div class="form-group">
                            <p>If you're an admin and doesn't have an account, <a href="adminregister.php"><b>Click Here</b></a> to Register.</p>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>                    
                </div>
                
            </div>
        </div>   
        <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
        <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
        <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->      
    </body>
</html>

<?php
include('adminfooter.php');
?>