<?php
include('connect.php');

$drop="DROP Table users";
$query=mysqli_query($connection,$drop);
if($query)
{
	echo "<p>Users Table Drop Successful.</p>";
}

$drop1="DROP Table adminstaff";
$query1=mysqli_query($connection,$drop1);
if($query1)
{
	echo "<p>AdminStaff Table Drop Successful.</p>";
}

$drop2="DROP Table company";
$query2=mysqli_query($connection,$drop2);
if($query2)
{
	echo "<p>Company Table Drop Successful.</p>";
}

$drop3="DROP Table vehicle";
$query3=mysqli_query($connection,$drop3);
if($query3)
{
	echo "<p>Vehicle Table Drop Successful.</p>";
}

$drop4="DROP Table contactus";
$query4=mysqli_query($connection,$drop4);
if($query4)
{
	echo "<p>ContactUs Table Drop Successful.</p>";
}

$drop5="DROP Table newsletter";
$query5=mysqli_query($connection,$drop5);
if($query5)
{
	echo "<p>Newsletter Table Drop Successful.</p>";
}

$create="CREATE Table users
        (
            UserID int AUTO_INCREMENT PRIMARY KEY,
            FirstName varchar(30),
            LastName varchar(40),
            Username varchar(40),
            Password varchar(30),
            Email varchar(40),
            Birthday varchar(15),
            PostAddress varchar(80),
            PostCode varchar(20)
        )";
$cquery=mysqli_query($connection,$create);
if($cquery)
{
	echo "<p>Successfully Created Users Table.</p>";
}

$create1="CREATE Table adminstaff
        (
            AdminID int AUTO_INCREMENT PRIMARY KEY,
            AdminName varchar(50),
            Username varchar(50),
            Password varchar(20),
            Email varchar(30)
        )";
$cquery1=mysqli_query($connection,$create1);
if($cquery1)
{
	echo "<p>Successfully Created AdminStaff Table.</p>";
}

$create2="CREATE Table company
        (
            CompanyID int AUTO_INCREMENT PRIMARY KEY,
            CompanyName varchar(30),
            CompanyLogo text
        )";
$cquery2=mysqli_query($connection,$create2);
if($cquery2)
{
	echo "<p>Successfully Created Company Table.</p>";
}

$create3="CREATE Table vehicle
        (
            VehicleID int AUTO_INCREMENT PRIMARY KEY,
            VehicleName varchar(50),
            CompanyID int,
            Type varchar(20),
            Colour varchar(40),
            Description text,
            UnitPrice varchar(20),
            Quantity int,
            VehicleImage text,
            FOREIGN KEY (CompanyID) REFERENCES company(CompanyID)
        )";
$cquery3=mysqli_query($connection,$create3);
if($cquery3)
{
	echo "<p>Successfully Created Vehicles Table.</p>";
}

$create4="CREATE Table contactus
        (
            ContactID int AUTO_INCREMENT PRIMARY KEY,
            UserID int,
            UserName varchar(40),
            Email varchar(40),
            Comment text,
            FOREIGN KEY (UserID) REFERENCES users(UserID)
        )";
$cquery4=mysqli_query($connection,$create4);
if($cquery4)
{
	echo "<p>Successfully Created ContactUs Table.</p>";
}

$create5="CREATE Table newsletter
        (
            NewsletterID int AUTO_INCREMENT PRIMARY KEY,
            Email varchar(40)
        )";
$cquery5=mysqli_query($connection,$create5);
if($cquery5)
{
	echo "<p>Successfully Created Newsletter Table.</p>";
}

?>