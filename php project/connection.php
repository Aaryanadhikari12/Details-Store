<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "savedetails";

$con = mysqli_connect($server, $user, $pass, $db);

if($con){
    // echo "Connection is successful!";
?>
    <script>
        alert('Connection Successful!');
        </script>
   <?php
}
else{
    // echo "Connection is unsuccessful!";
    die("No connection".mysqli_connect_error());
}


?>