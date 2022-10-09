<?php
session_start();
include('connect.php');
include('adminheader.php');
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
    echo "<script>alert('Please Choose a Vehicle to Update.');</script>";
    echo "<script>window.location='vehiclelist.php';</script>";
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

        <title>Driverless - Vehicle Update Page</title>
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
                        <h1>UPDATE AS NECESSARY</h1>
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
            .vupdate select, textarea
            {
                width: 198px;
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
        
        <form action="vehicleupdate.php?PID=<?php echo $arr1['VehicleID']; ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="txtVehicleID" value="<?php echo $arr1['VehicleID']; ?>">
            <table align="center" width="100%" class="vupdate">
                <tr>
                    <td align="right" width="38%">Vehicle Name</td>
                    <td><input type="text" name="txtVehicleName" value="<?php echo $arr1['VehicleName']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Company</td>
                    <td>
                        <select name="cboCompany">
                            <option value="<?php echo $arr1['CompanyID']; ?>"><?php echo $arr1['CompanyName']; ?></option>
                            <?php
                                $company="SELECT * FROM Company ORDER BY CompanyName";
                                $result=mysqli_query($connection,$company);
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
                    <td align="center"><input type="text" name="txtType" value="<?php echo $arr1['Type']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Colour</td>
                    <td><input type="text" name="txtColour" value="<?php echo $arr1['Colour']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Description</td>
                    <td><textarea name="txtDescription" required><?php echo $arr1['Description']; ?></textarea></td>
                </tr>
                <tr>
                    <td align="right" width="38%">UnitPrice</td>
                    <td><input type="text" name="txtUnitPrice" value="<?php echo $arr1['UnitPrice']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Quantity</td>
                    <td><input type="number" name="txtQuantity" value="<?php echo $arr1['Quantity']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Vehicle Image</td>
                    <td>
                        <div class="hover01">
                            <figure>
                                <?php echo "<img src='".$arr1['VehicleImage']."'width='100%'>"; ?>
                            </figure>
                        </div>
                        <input type="file" name="txtVehicleImage">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnUpdate" value="UPDATE">
                        <input type="submit" name="btnDelete" value="DELETE">
                    </td>
                    <td width="30%"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
include ('adminfooter.php');

if (isset($_POST['btnUpdate'])) 
{
    $VehicleID=$_POST['txtVehicleID'];
    $VehicleName=$_POST['txtVehicleName'];
    $CompanyID=$_POST['cboCompany'];
    $Type=$_POST['txtType'];
    $Colour=$_POST['txtColour'];
    $Description=$_POST['txtDescription'];
    $UnitPrice=$_POST['txtUnitPrice'];
    $Quantity=$_POST['txtQuantity'];
    $VehicleImage=$_FILES['txtVehicleImage']['name'];
    $folder="img/";

    if ($VehicleImage) 
    {
        $filename=$folder."_".$VehicleImage;
        $copied=copy($_FILES['txtVehicleImage']['tmp_name'], $filename);
        if (!$copied) 
        {
            exit("A Problem Occured! Cannot Upload Image.");
        }
        else
        {
            
            $update="UPDATE Vehicle
                     SET VehicleName='$VehicleName',
                         VehicleImage='$filename',
                         CompanyID='$CompanyID',
                         Type='$Type',
                         Colour='$Colour',
                         Description='$Description',
                         UnitPrice='$UnitPrice',
                         Quantity='$Quantity'
                     WHERE VehicleID='$VehicleID'";
            $ret1=mysqli_query($connection,$update);
            if ($ret1) 
            {
                echo "<script>alert('Vehicle Update Successful!');</script>";
                echo "<script>window.location='vehiclelist.php';</script>";
            }
            else
            {
                echo "<script>alert('Vehicle Update Failed!');</script>";
                echo mysqli_error($connection);
            }
        }
    }
}

if(isset($_POST['btnDelete']))
{
    $VehicleID=$_POST['txtVehicleID'];
    $delete="DELETE FROM vehicle where VehicleID='$VehicleID'";
    $query=mysqli_query($connection,$delete);
    if($query)
    {
        echo "<script>window.alert('Vehicle Delete Successful!')</script>";
        echo "<script>window.location='vehiclelist.php'</script>";
    }
    else
    {
        echo "<script>window.alert('Vehicle Delete Failed!')</script>";
        echo mysqli_error($connection);
    }
}
?>