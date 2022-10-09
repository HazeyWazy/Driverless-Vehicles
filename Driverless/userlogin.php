<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Driverless is a company that provides information about autonomous vehicles, including the Artificial Intelligence (AI) technology that is used to develop these vehicles.">
    <meta name="author" content="Driverless">

    <title>Driverless - User Login Page</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

        <div class="spinner-wrapper">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
            <a class="navbar-brand logo-text page-scroll" href="index.php">Driverless</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#header">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#intro">INTRO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#services">TECHNOLOGY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="vehicledisplay.php">VEHICLES</a>
                    </li>

        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index.php#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="terms-conditions.php"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.php"><span class="item-text">PRIVACY POLICY</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="faq.php"><span class="item-text">FAQ</span></a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php#contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="userlogin.php">LOGIN <span class="sr-only">(current)</span></a>
                    </li>                
                </ul>
            </div>
        </nav>

    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">LOGIN</div>
                        <h2 class="white">Stay Connected</h2>
                        <p class="white">Stay in the loop and follow us on our journey of changing the way people get around! On a mission to change everyday life.</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                   
                    <!-- Call Me Form -->
                    <form id="callMeForm" data-toggle="validator" data-focus="false" action="userlogin.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="txtUserID" name="txtUserID" hidden>
                            <input type="text" class="form-control-input" id="txtUsername" name="txtUsername" required>
                            <label class="label-control" for="txtUsername">Username</label>
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
                            <p class="white">Don't have an account? <a href="userregister.php" class="white">Click Here</a> to Register.</p>
                        </div>
                        <div class="form-group">
                            <p class="white">If you are an admin, <a href="adminlogin.php" class="white">Click Here</a> to Login.</p>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of call me form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
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

include('connect.php');
include('footer.php');

if (isset($_POST['btnLogin'])) 
{
    $username=$_POST['txtUsername'];
    $password=$_POST['txtPassword'];
    $select="SELECT * FROM users
             WHERE Username='$username'
             AND Password='$password'";

    $query=mysqli_query($connection,$select);
    $count=mysqli_num_rows($query);
    if ($count>0) 
    {
        $data=mysqli_fetch_array($query);
        $userid=$data['UserID'];
        $username=$data['Username'];
        $email=$data['Email'];
        $_SESSION['userid']=$userid;
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;
        echo "<script>window.alert('Login Success!')</script>";
        echo "<script>window.location='vehicledisplay.php'</script>";
    }
    else
    {
        if (isset($_SESSION['LoginError'])) 
        {
            $CountError = $_SESSION['LoginError'];
            if ($CountError==1) 
            {
                $_SESSION['LoginError']=2;
                echo "<script>window.alert('Wrong Username or Password! Please Try Again. You have 1 attempt left.')</script>";
            }
            if ($CountError==2) 
            {
                echo "<script>window.alert('Wrong Username or Password! Your account has been locked for 10 mins! Please try again later.')</script>";
                echo "<script>window.location='logintimer.php'</script>";
            }
        }
        else
        {
            $_SESSION['LoginError']=1;
            echo "<script>window.alert('Wrong Username or Password! Please Try Again. You have 2 attempts left.')</script>";
        }
    }
}

?>