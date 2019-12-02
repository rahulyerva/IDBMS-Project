<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$vehiclename=$_POST['vehiclename'];
$vehiclebrand=$_POST['vehiclebrand']; 
$vehicleoverview=$_POST['vehicleoverview'];
$vehicleprice=$_POST['vehicleprice'];
$vehiclefueltype=$_POST['vehiclefueltype'];
$vehiclemodel=$_POST['vehiclemodel'];
$vehicleseatcapacity=$_POST['vehicleseatcapacity'];
$sql="INSERT INTO  tblvehicles(vehiclename,vehicleoverview,vehicleprice,vehiclefueltype,vehiclemodel,vehicleseatcapacity) VALUES(:vehiclename,:vehicleoverview,:price,:fueltype,:modelyear,:seatingcapacity,:vimage)";
$sql1="INSERT INTO tblbrand(brandname) VALUES (:vehiclebrand)";
$query = $dbh->prepare($sql);
$query1 = $dbh->prepare($sql1);
$query->bindParam(':vehiclename',$vehiclename,PDO::PARAM_STR);
$query->bindParam(':vehicleoverview',$vehicleoverview,PDO::PARAM_STR);
$query->bindParam(':vehicleprice',$vehicleprice,PDO::PARAM_STR);
$query->bindParam(':vehiclefueltype',$vehiclefueltype,PDO::PARAM_STR);
$query->bindParam(':vehiclemodel',$vehiclemodel,PDO::PARAM_STR);
$query->bindParam(':vehicleseatcapacity',$vehicleseatcapacity,PDO::PARAM_STR);
$query1->bindParam(':vehiclebrand',$vehiclebrand,PDO::PARAM_STR);
$query->execute();
$query1->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successfull.');</script>";
}


?>
<html>
    <h1 align="center"> Please fill in the details into the Database </h1>
<form action="admin-addcar.php">
  <div class="container">

    <label for="vehiclename"><b>Vehicle Name</b></label>
    <input type="text" placeholder="Enter Vehicle Name" name="vehiclename" required>

    <label for="vehiclebrand"><b> Vehicle Brand</b></label>
    <input type="text" placeholder="Enter Vehicle Brand" name="vehiclebrand" required>

    <label for="vehicleoverview"><b>Vehicle Overview</b></label>
    <input type="text" placeholder="Enter Vehicle Overview" name="vehicleoverview" required>

    <label for="vehicleprice"><b>Vehicle Price</b></label>
    <input type="text" placeholder="Enter Vehicle Price" name="vehicleprice" required>

    <label for="vehiclefueltype"><b>Vehicle Fueltype</b></label>
    <input type="text" placeholder="Enter Vehicle FuelType" name="vehiclefueltype" required>

    <label for="vehiclemodelyear"><b>Vehicle Model</b></label>
    <input type="text" placeholder="Enter Vehicle Model" name="vehiclemodel" required>

    <label for="vehicleseatingcapacity"><b>Vehicle seat capacity</b></label>
    <input type="text" placeholder="Enter Vehicle Seat Capacity" name="vehicleseatcapacity" required>

    Select a file to upload image: <input type="file" name="myFile">

    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>
</html>