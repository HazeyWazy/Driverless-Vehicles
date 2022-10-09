<?php
session_start();
include('adminheader.php');
include('connect.php');

if (isset($_SESSION['adminid'])) 
{
    $Adminid=$_SESSION['adminid'];
    $select="SELECT * FROM adminstaff WHERE AdminID='$Adminid'";
    $run=mysqli_query($connection,$select);
    $arr=mysqli_fetch_array($run);
}
else
{
    echo "<script>alert('Please Login First.');</script>";
    echo "<script>window.location='adminlogin.php';</script>";
}

if (isset($_POST['btnUpdate'])) 
{
    $AID=$_POST['txtAdminID'];
    $AdminName=$_POST['txtAdminName'];
    $Username=$_POST['txtAdminUsername'];
    $Password=$_POST['txtPassword'];
    $Email=$_POST['txtEmail'];

    $update="UPDATE adminstaff
             SET AdminName='$AdminName',
                 Username='$Username',
                 Password='$Password',
                 Email='$Email'
             WHERE AdminID='$AID'";
    $ret=mysqli_query($connection,$update);
    if ($ret) 
    {
        echo "<script>alert('Admin Update Successful!');</script>";
    }
    else
    {
        echo mysqli_error($connection);
    }
}
if (isset($_POST['btnLogout'])) 
{
    echo "<script>window.location='adminlogout.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Driverless is a company that provides information about autonomous vehicles, including the Artificial Intelligence (AI) technology that is used to develop these vehicles.">
        <meta name="author" content="Driverless">

        <title>Driverless - Admin Profile</title>
        
    </head>
    <body>
        <!-- Header -->
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>ADMIN PROFILE</h1>
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
            .update 
            {
                text-align: center;
                background-color: lavender;
                border-collapse: collapse;
            }
            .update th
            {
                background-color: gainsboro;
                color: gainsboro;
            }
            .update td, .update th 
            {
                padding: 10px;
                border: 1px solid lavender;
            }
        </style>
        <form action="adminupdate.php" method="POST">
            <input type="hidden" name="txtAdminID" value="<?php echo $arr['AdminID']; ?>">
            <table class="update" align="center" width="100%">
                <tr>
                    <td align="right" width="38%">Admin Name</td>
                    <td align="center"><input type="text" name="txtAdminName" value="<?php echo $arr['AdminName']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Username</td>
                    <td align="center"><input type="text" name="txtAdminUsername" value="<?php echo $arr['Username']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Password</td>
                    <td align="center"><input type="password" name="txtPassword" value="<?php echo $arr['Password']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Email Address</td>
                    <td align="center"><input type="email" name="txtEmail" value="<?php echo $arr['Email']; ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="submit" name="btnUpdate" value="UPDATE">
                        <input type="submit" name="btnLogout" value="LOGOUT">
                    </td>
                    <td width=30%></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
include ('adminfooter.php');
?>