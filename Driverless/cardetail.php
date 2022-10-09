<?php
include('connect.php');
include('header.php');
if (isset($_REQUEST['PID'])) 
{
    $VehicleID=$_REQUEST['PID'];
    $select="SELECT v.*, c.* FROM vehicle v, company c
             WHERE v.CompanyID=c.CompanyID
             AND v.VehicleID='$VehicleID'";
    $ret=mysqli_query($connection,$select);
    $arr1=mysqli_fetch_array($ret);
}
else
{
    echo "<script>alert('Please Choose a Vehicle to Display.');</script>";
    echo "<script>window.location='vehicledisplay.php';</script>";
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

        <title>Driverless - Vehicle Details Page</title>
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
                        <h1>VEHICLE  DETAILS</h1>
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
            .vupdate
            {
                text-align: center;
                background-color: lavender;
                border-collapse: collapse;
            }
            .vupdate td, .vupdate tr
            {
                padding: 10px;
                border: 1px solid lavender;
            }
            .hover01 figure
            {
                overflow: hidden;
            } 
            .hover01 figure img 
            {
	            -webkit-transform: scale(1);
	            transform: scale(1);
	            -webkit-transition: .3s ease-in-out;
	            transition: .3s ease-in-out;
            }
            .hover01 figure:hover img 
            {
	            -webkit-transform: scale(1.3);
	            transform: scale(1.3);
            }
        </style>        
        
        <form action="vehicleupdate.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="txtVehicleID" value="<?php echo $arr1['VehicleID']; ?>">
            <table align="center" width="100%" class="vupdate">
                <tr>
                    <td align="right" width="38%">Vehicle Name</td>
                    <td><input type="text" name="txtVehicleName" value="<?php echo $arr1['VehicleName']; ?>" readonly></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Company</td>
                    <td>
                        <input type="text" name="cboCompany" value="<?php echo $arr1['CompanyName']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="38%">Type</td>
                    <td align="center"><input type="text" name="txtType" value="<?php echo $arr1['Type']; ?>" readonly></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Colour</td>
                    <td><input type="text" name="txtColour" value="<?php echo $arr1['Colour']; ?>" readonly></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Description</td>
                    <td><textarea name="txtDescription" readonly><?php echo $arr1['Description']; ?></textarea></td>
                </tr>
                <tr>
                    <td align="right" width="38%">UnitPrice</td>
                    <td><input type="text" name="txtUnitPrice" value="<?php echo $arr1['UnitPrice']; ?>" readonly></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Quantity</td>
                    <td><input type="number" name="txtQuantity" value="<?php echo $arr1['Quantity']; ?>" readonly></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Vehicle Image</td>
                    <td>
                        <div class="hover01">
                            <figure>
                                <?php echo "<img src='".$arr1['VehicleImage']."'width='100%'>"; ?>
                            </figure>
                        </div>                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="30%"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
include ('footer.php');
?>