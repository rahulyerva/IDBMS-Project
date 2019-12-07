<?php 
require_once("includes/config.php");
// code user email availablity
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error : You did not enter a valid email.";
	}
	else {
		$sql ="SELECT emailid FROM tblusers WHERE emailid=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$count=1;
if($query -> rowCount() > 0)
{
echo "<span style='color:red'> Email already there .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} 
}
}


?>
