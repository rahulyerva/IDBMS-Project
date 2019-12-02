<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$vid=$_POST['vid'];
$sql="DELETE FROM  tblvehicles WHERE vid=:vid";
$query = $dbh->prepare($sql);
$query->bindParam(':vid',$vid,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();



?>
<html>
<form action="admin-deletecar.php">
  <div class="container">

    <label for="vehiclename"><b>Vehicle Name</b></label>
    <input type="text" placeholder="Enter Vehicle Name" name="vehiclename" required>
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>
</html>




