<?php
include('adminheader.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Driverless is a company that provides information about autonomous vehicles, including the Artificial Intelligence (AI) technology that is used to develop these vehicles.">
        <meta name="author" content="Driverless">

        <title>Driverless - Vehicle Company Register Page</title>
        <!-- Styles -->        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <link rel="icon" href="images/favicon.png">
    </head>
    <body>
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>COMPANY REGISTRATION</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->


        <form action="companyregister.php" method="POST" enctype="multipart/form-data">
            <table align="center" class="FormTable" width="100%">
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="txtCompanyName" placeholder="Enter Company Name" required></td>
                </tr>
                <tr>
                    <td>Company Logo</td>
                    <td><input type="file" name="CompanyLogo" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnRegister" value="REGISTER"></td>
                </tr>
            </table>
        </form>
        <style>
            .FormTable
            {
                text-align: center;
                background-color: lavender;
                border-collapse: collapse;
                color: black;
            }
            .FormTable td
            {
                padding: 10px;
                border: 1px solid silver;
            }
        </style>
    </body>
</html>

<?php

include('connect.php');
include('adminfooter.php');

if (isset($_POST['btnRegister'])) 
{
    $companyname=$_POST['txtCompanyName'];
    $logo=$_FILES['CompanyLogo']['name'];
    $folder="img/";

    if ($logo) 
    {
        $filename=$folder."_".$logo;
        $copy=copy($_FILES['CompanyLogo']['tmp_name'],$filename);
        if (!$copy) 
        {
            exit("Problem occured, image cannot be uploaded!");
        }
        else
        {
            $insert="INSERT INTO Company(CompanyName,CompanyLogo)
                     VALUES('$companyname','$logo')";
            $query=mysqli_query($connection,$insert);
            if ($query) 
            {
                echo "<script>alert('Company Register Successful!');</script>";
            }
            else
            {
                echo "<script>alert('Company cannot be registered.');<script>";
            }
        }
    }
}

?>