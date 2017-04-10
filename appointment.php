<?php
include "db.php";
//send into db for a test
if (isset($_POST['submit']))
{


$username =   $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$bookingdate = $_POST['datepicker'];
//echo $date;
$msg = $_POST['txtmessage'];
//echo $username .''. $email.''.$phonenumber.''.$bookingdate .''.$msg;

//$hostname = localhost;
$server = "localhost";
$servername = "";
$serverpassword = ""; //insert database coonection details.
if(!empty($username) && !empty($email) && !empty($phonenumber)&& !empty($bookingdate) && !empty($msg))
{

try {
$conn = new PDO("mysql:host=$server;dbname=salon",$servername,$serverpassword); //you can change the
                                            //mysql to mysqli  or SQLITE depending on which drivers you have
                                            // available in your php version. Check by echoing phpinfo();

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

$sql = "INSERT INTO appointment (username, email, phonenumber, bookingdate, message)
VALUES (:username, :email, :phonenumber, :bookingdate, :msg)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':phonenumber', $phonenumber, PDO::PARAM_STR);
$stmt->bindParam(':bookingdate', $bookingdate, PDO::PARAM_STR);
$stmt->bindParam(':msg', $msg, PDO::PARAM_STR);

if($stmt->execute()=== true && $stmt->rowCount() > 0)
//check if query was executed & how many rows were affected by the db operation
{
  echo "data saved";
}else {
  echo "hol' up";
  }
}
//  $conn = null;

catch(PDOException $e) //catch pdo exception and display in next line
{
   $e->getMessage();
}
}else {
$ERROR = "Please fill in all fields biko";

}
}







?>
