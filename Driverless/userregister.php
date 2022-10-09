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

    <title>Driverless - User Registration Page</title>

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
                        <a class="nav-link page-scroll" href="userregister.php">REGISTER<span class="sr-only">(current)</span></a>
                    </li>                
                </ul>
            </div>
        </nav>

    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">REGISTER</div>
                        <h2 class="white">Sign Up By Filling And Submitting The Form</h2>
                        <p class="white">You are just a few steps away from a personalized offer. It's very easy, just fill in the form and send it to us.</p>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Don't hesitate to email us for any questions or inquiries.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Sign up to receive occasional updates from Driverless, so we can keep you in the loop on our progress and the ways we're getting involved in our communities.</div>
                            </li>                            
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">By submitting, you give Driverless permission to store and process your personal information so we can provide you with the content you’ve requested.</div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                   
                    <!-- Call Me Form -->
                    <form id="callMeForm" data-toggle="validator" data-focus="false" action="userregister.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="txtFirstName" name="txtFirstName" required>
                            <label class="label-control" for="txtFirstName">First Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="txtLastName" name="txtLastName" required>
                            <label class="label-control" for="txtLastName">Last Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="txtUsername" name="txtUsername" required>
                            <label class="label-control" for="lphone">Username</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" id="txtPassword" name="txtPassword" required>
                            <label class="label-control" for="txtPassword">Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="txtEmail" name="txtEmail" required>
                            <label class="label-control" for="txtEmail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="txtBirthday" name="txtBirthday" required>
                            <label class="label-control" for="txtBirthday">Date Of Birth</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="txtPostalAddress" name="txtPostalAddress" required>
                            <label class="label-control" for="txtPostalAddress">Postal Address</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="txtPostcode" name="txtPostcode" required>
                            <label class="label-control" for="txtPostcode">Postcode</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox white">
                            <input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" required>I agree with Driverless's stated <a class="white" href="privacy-policy.html">Privacy Policy</a> and <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button" name="btnRegister">REGISTER</button>
                        </div>
                        <div class="form-group">
                            <p class="white">Already have an account? <a href="userlogin.php" class="white">Click Here</a> to Login.</p>
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

if (isset($_POST['btnRegister'])) 
{
    $firstname=$_POST['txtFirstName'];
    $lastname=$_POST['txtLastName'];
    $username=$_POST['txtUsername'];
    $password=$_POST['txtPassword'];
    $email=$_POST['txtEmail'];
    $birthday=$_POST['txtBirthday'];
    $postadd=$_POST['txtPostalAddress'];
    $postcode=$_POST['txtPostcode'];

    $query="SELECT * FROM users
            WHERE username='$username'";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);

    if ($count>0) 
    {
        echo "<script>alert('Username already taken!');</script>";
    }
    else
    {
        $insert="INSERT INTO users(FirstName,LastName,Username,Password,Email,Birthday,PostAddress,PostCode)
                 VALUES ('$firstname','$lastname','$username','$password','$email','$birthday','$postadd','$postcode')";
        
        $reg=mysqli_query($connection,$insert);
        if ($reg) 
        {
            echo "<script>alert('User Registration Successful!');</script>";
            echo "<script>window.location='vehicledisplay.php';</script>";
        }
        else
        {
            echo mysqli_error($connection);
        }
    }
}

?>