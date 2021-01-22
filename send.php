<?php
if (!isset($_POST['UM'])){
exit();
return false;
}else {
$servername = "enteryourmysqlserverip";
$database = "enteryourdatabasename";
$username = "enteryourusername";
$password = "enteryourpassword";
$UM = $_POST['UM'];
$PW = $_POST['PW'];
$EM = $_POST['EM'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Signing Up";
 
$sql = "INSERT INTO signup (Username, Password, Email) VALUES ('$UM', '$PW', '$EM')";
if (mysqli_query($conn, $sql)) {
      echo "<br />";
      echo "Done";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>