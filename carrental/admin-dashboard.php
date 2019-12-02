<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>
<html>
    <a align="center" href="logout.php">Logout</a>
    <h2 align="center"> ADMIN DASHBOARD </h2></br></br></br></br>
    <a  align="center" href="admin-addcar.php" class="button--style-red">ADD A CAR</a></br></br>
    <a  align="center" href="admin-deletecar.php" class="button--style-red">DELETE A CAR</a></br></br>
    <a  align="center" href="admin-genbill.php" class="button--style-red">GENERATE USER BILL</a></br></br>
    <a  align="center" href="admin-viewcustomerdetails" class="button--style-red">VIEW CUSTOMER BILL</a></br></br>
</html>    