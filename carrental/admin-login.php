<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['login']))
{
$adminid=$_POST['adminid'];
$password=$_POST['password'];
$sql ="SELECT adminid,password FROM tbladmin WHERE adminid=:adminid and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':adminid', $adminid, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
    $_SESSION['login']=$_POST['adminid'];
    header("location: admin-dashboard.php");
}
else{
    echo "<script>alert('Invalid Details');</script>"; 
  }
}  
?>
<header>

<div align='right' class="default-header">
  <div class="container">
    <div class="row">
      <div align="center">
        
        
<div> <h2>CAR RENTAL SYSTEM ADMIN LOGIN</h2></div>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-style: italic;
                width: 50%;
                margin: 0px auto;
            }
            #login_form {

            }    
            #f1 {
                background-color: #FFF;
                border-style: solid;
                border-width: 1px;
                padding: 23px 1px 20px 114px;
            }
            .f1_label {
                white-space: nowrap;
            }
            span {color: white;}

            .new {
                background: black;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div id="login_form">
            <div class="new"><span>enter admin details</span></div>  <!-- This is your header text-->
            <form name="f1" method="post" action="admin-dashboard.php" id="f1">
                <table>
                    <tr>
                        <td class="f1_label">adminID :</td> <!-- This is your first Input Box Label-->
                        <td><input type="text" name="adminid" value="" /><!-- This is your first Input Box-->
                        </td>
                    </tr>
                    <tr>
                        <td class="f1_label">Password  :</td><!-- This is your Second Input Box Label-->
                        <td><input type="password" name="password" value=""  /><!-- This is your Second Input Box -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="login" value="Log In" style="font-size:18px; " /><!-- This is your submit button -->
                        </td>
                    </tr>
                </table>
            </form> 
        </div>
    </body>
</html>
<?php
 ?>
      </div>
      
 
        </div>
      </div>
    </div>
  </div>
</div>