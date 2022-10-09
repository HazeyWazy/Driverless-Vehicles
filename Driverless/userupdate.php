<?php
session_start();
include('header.php');
include('connect.php');

if (isset($_POST['btnUpdate'])) 
{
    $UID=$_POST['txtUserID'];
    $FirstName=$_POST['txtFirstName'];
    $LastName=$_POST['txtLastName'];
    $Username=$_POST['txtUsername'];
    $Password=$_POST['txtPassword'];
    $Birthday=$_POST['txtBirthday'];
    $Email=$_POST['txtEmail'];
    $PostAddress=$_POST['txtPostAddress'];
    $PostCode=$_POST['txtPostCode'];

    $update="UPDATE users
             SET FirstName='$FirstName',
                 LastName='$LastName',
                 Username='$Username',
                 Password='$Password',
                 Birthday='$Birthday',
                 Email='$Email',
                 PostAddress='$PostAddress',
                 PostCode='$PostCode'
             WHERE UserID='$UID'";
    $ret=mysqli_query($connection,$update);
    if ($ret) 
    {
        echo "<script>alert('User Update Successful!');</script>";
    }
    else
    {
        echo mysqli_error($connection);
    }
}
if (isset($_POST['btnLogout'])) 
{
    echo "<script>window.location='userlogout.php';</script>";
}
if (isset($_SESSION['userid'])) 
{
    $UserID=$_SESSION['userid'];
    $select="SELECT * FROM Users WHERE UserID='$UserID'";
    $run=mysqli_query($connection,$select);
    $arr=mysqli_fetch_array($run);
}
else
{
    echo "<script>alert('Please Login First.');</script>";
    echo "<script>window.location='userlogin.php';</script>";
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

        <title>Driverless - User Profile</title>
        
    </head>
    <body>
        <!-- Header -->
        <header id="header" class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>USER PROFILE</h1>
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
        <form action="userupdate.php" method="POST">
            <input type="hidden" name="txtUserID" value="<?php echo $arr['UserID']; ?>">
            <table class="update" align="center" width="100%">
                <tr>
                    <td align="right" width="38%">First Name</td>
                    <td align="center"><input type="text" name="txtFirstName" value="<?php echo $arr['FirstName']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Last Name</td>
                    <td align="center"><input type="text" name="txtLastName" value="<?php echo $arr['LastName']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Username</td>
                    <td align="center"><input type="text" name="txtUsername" value="<?php echo $arr['Username']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Password</td>
                    <td align="center"><input type="password" name="txtPassword" value="<?php echo $arr['Password']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Date of Birth</td>
                    <td align="center"><input type="text" name="txtBirthday" value="<?php echo $arr['Birthday']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Email Address</td>
                    <td align="center"><input type="email" name="txtEmail" value="<?php echo $arr['Email']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%"> Address</td>
                    <td align="center"><input type="text" name="txtPostAddress" value="<?php echo $arr['PostAddress']; ?>" required></td>
                </tr>
                <tr>
                    <td align="right" width="38%">Postal Code</td>
                    <td align="center"><input type="text" name="txtPostCode" value="<?php echo $arr['PostCode']; ?>" required></td>
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
include ('footer.php');
?>