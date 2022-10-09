<?php
session_start();
include('adminheader.php');
?>

<!DOCTYPE html>
<html>
    <head>

        <title>Driverless - Vehicle Lists</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

    </head>
    <body data-spy="scroll" data-target=".fixed-top">
        <div style="padding-top: 110px; background-color: #153e52;">
            <form action="vehiclelist.php" method="POST">
                <table class="searchbar" align="center" width="100%">
                    <tr>
                        <td align="right" width="50%">
                            <input type="text" name="txtsearch" placeholder="Search Car Name">
                        </td>
                        <td align="right" width="10%">
                            <input type="submit" name="btnsearch" value="Search" style="background-color: #14bf98; border-radius: 0.25rem; color:white; border: 0.125rem solid #14bf98;">
                        </td>
                        <td align="left">
                            <input type="submit" name="btnshowall" value="Show All" style="background-color: #14bf98; border-radius: 0.25rem; color:white; border: 0.125rem solid #14bf98;">
                        </td>
                        </tr>
                </table>
            </form>
        </div>
        

        <style>
            .searchbar
            {
                text-align: center;
                background-color: white;
                border-collapse: collapse;
            }
            .searchbar td
            {
                background-color: #153e52;
                color: lightsalmon;
            }
            .searchbar td
            {
                padding: 10px;
                border: 1px solid #153e52;
            }
        </style>
    
        <style>
            .car
            {
                text-align: center;
                background-color: lavender;
                border-collapse: collapse;
            }

            .car th
            {
                background-color: lavender;
                color: maroon;
            }

            .car td,
            .car th
            {
                padding: 10px;
                border: 2px solid gainsboro;
            }
        </style>

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

if (isset($_POST['btnsearch'])) 
{
    $carname=$_POST['txtsearch'];
    $query="SELECT v.*, c.*
            FROM Vehicle v, Company c
            WHERE v.CompanyID=c.CompanyID
            AND v.VehicleName LIKE '%$carname%'";

    $result=mysqli_query($connection, $query);
    $count=mysqli_num_rows($result);
    if ($count>0) 
    {
        echo "<table class='car' align='center' width='100%'>";
        for ($i=0; $i < $count; $i+=1) 
        { 
            $query1="SELECT v.*, c.*
                     FROM Vehicle v, Company c
                     WHERE v.CompanyID=c.CompanyID
                     AND v.VehicleName LIKE '%$carname%'
                     LIMIT $i,1";
            $result1=mysqli_query($connection, $query1);
            $count1=mysqli_num_rows($result1);
            
            echo "<tr>";
            for ($j=0; $j < $count1; $j++) 
            { 
                $arr=mysqli_fetch_array($result1);
                echo "<td>";
                echo "<a href='vehicleupdate.php?PID=".$arr['VehicleID']."'>";
                echo "<img src='".$arr['VehicleImage']."' width='450px'>";
                echo "<br>";
                echo "<br>";
                echo "<b>".$arr['VehicleName']."</b>";
                echo "<br>";
                echo $arr['UnitPrice'];
                echo "</td>";
            }
            echo "</tr>";            
        }
        echo "</table>";
    }
    else
    {
        echo "<h1><b><u>Search Record Not Found</u></b></h1>";
    }
}
else
{
    $query="SELECT v.*, c.*
            FROM Vehicle v, Company c
            WHERE v.CompanyID=c.CompanyID
            ORDER BY v.VehicleName";
    $result=mysqli_query($connection,$query);
    $count=mysqli_num_rows($result);
    if ($count>0)
    {
        echo "<table class='car' align='center' width='100%'>";
        for ($i=0; $i < $count; $i+=1) 
        { 
            $query1="SELECT v.*, c.*
                     FROM Vehicle v, Company c
                     WHERE v.CompanyID=c.CompanyID
                     ORDER BY v.VehicleName
                     LIMIT $i,1";
            $result1=mysqli_query($connection,$query1);
            $count1=mysqli_num_rows($result1);

            echo "<tr>";
            for ($j=0; $j < $count1; $j++) 
            { 
                $arr=mysqli_fetch_array($result1);
                echo "<td>";
                echo "<a href='vehicleupdate.php?PID=".$arr['VehicleID']."'>";
                echo "<img src='".$arr['VehicleImage']."' width='400px''>";
                echo "<br>";
                echo "<b>".$arr['VehicleName']."</b>";
                echo "<br>";
                echo $arr['UnitPrice'];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

include('adminfooter.php');

?>