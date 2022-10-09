<?php

    include('connect.php');
    include('adminheader.php');
    if (isset($_POST['btnRegister'])) 
    {
        $vehicleName = $_POST['txtVehicleName'];
        $companyID = $_POST['cboCompany'];
        $type = $_POST['txtType'];
        $color = $_POST['txtColour'];
        $description = $_POST['txtDescription'];
        $unitPrice = $_POST['txtUnitPrice'];
        $quantity = $_POST['txtQuantity'];
        $vehicleImage = $_FILES['txtVehicleImage']['name'];
        $folder = "img/";

        if ($vehicleImage) 
        {
            $fileName = $folder."_".$vehicleImage;
            $copied = copy($_FILES['txtVehicleImage']['tmp_name'],$fileName);
            if (!$copied) 
            {
                exit("Problem Occured. Cannot upload image.");
            }
            else
            {
                $insert = "INSERT INTO vehicle(VehicleName, CompanyID, Type, Colour, Description, UnitPrice, Quantity, VehicleImage)
                           VALUES( '$vehicleName' ,'$companyID',
                           '$type' , '$color' , '$description' , '$unitPrice' ,
                           '$quantity', '$fileName' )";
                
                $ret = mysqli_query($connection, $insert);

                if ($ret) 
                {
                    echo "<script>alert
                        ('Autonomous Vehicle Register Successful!');</script>";
                }
                else
                {
                    echo "<script>alert('Vehicle cannot be registered.');</script>";
                }
            }
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

        <title>Driverless - Vehicle Register Page</title>
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
                        <h1>VEHICLE REGISTRATION</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        <style>
            body, p
            {
                color: black;
            }
            .vregister 
            {
                text-align: center;
                background-color: lavender;
                border-collapse: collapse;
            }
            .vregister td, .vregister th 
            {
                padding: 10px;
                border: 1px solid lavender;
            }
            .vregister select
            {
                width: 198px;
            }
        </style>
        <div style="background-color: lavender;">
           <br>
        </div>
        <form action="vehicleregister.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="txtVehicleID">
            <table class="vregister" align="center" width="100%">
                <tr>
                    <td align="right" width="38%">Vehicle Name</td>
                    <td align="center"><input type="text" name="txtVehicleName" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Company</td>
                    <td align="center">
                        <select name="cboCompany">
                            <option>Please select</option>
                            <?php
                                $Company="SELECT * FROM Company ORDER BY CompanyName";
                                $result=mysqli_query($connection,$Company);
                                $count=mysqli_num_rows($result);
                                for ($i=0; $i < $count; $i++) 
                                { 
                                    $arr=mysqli_fetch_array($result);
                                    echo "<option value='".$arr['CompanyID']."'>".$arr['CompanyName']."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="38%">Type</td>
                    <td align="center">
                        <select name="txtType">
                            <option value="Sedan">Sedan</option>
                            <option value="Coupe">Coupe</option>
                            <option value="Sports Car">Sports Car</option>
                            <option value="Station Wagon">Station Wagon</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Convertible">Convertible</option>
                            <option value="SUV">SUV</option>
                            <option value="Minivan">Minivan</option>
                            <option value="Pickup">Pickup</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="38%">Colour</td>
                    <td align="center"><input type="text" name="txtColour" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Description</td>
                    <td align="center"><textarea name="txtDescription" placeholder="Enter Description" required></textarea></td>
                </tr>
                <tr>
                    <td align="right" width="38%">UnitPrice</td>
                    <td align="center"><input type="text" name="txtUnitPrice" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Quantity</td>
                    <td align="center"><input type="number" name="txtQuantity" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Vehicle Image</td>
                    <td align="right"><input type="file" name="txtVehicleImage" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="submit" name="btnRegister" value="REGISTER">
                    </td>
                    <td width=30%></td>
                </tr>
            </table>
        </form>       
        <div align="center" style="background-color: lavender;">
            <font color="black"><br>To view all available vehicle list, <a href="vehiclelist.php"><b><u>Click Here</u></b></a></font>
            <br><br>
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