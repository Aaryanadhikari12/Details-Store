<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        h1 {
            background-color: blue;
            color: white;
            text-align: center;
        }

        p {
            font-size: 32px;
            color: black;
            margin: 0 20% 0 24%;
            background-color: skyblue;
            border: 3px solid black;

        }

        .form {
            width: 60%;
            margin: auto;
            height: 60%;
            border: 2px solid black;
            diplay: flex;
            align-items: center;
            justify-content: center;
            background-color: purple;
            position: absolute;
            top: 50%;
            left: 52.5%;
            transform: translate(-50%, -52.5%);
            background-color: purple;
        }

        label {
            font-size: 40px;
            color:white;
        }

        input{
            width:50%;
            font-size: 30px;
            color:red;
        }
        form{
            margin:20px;
        }
        .name, .email{
            background-color:green;
            
        }
        .address, .number, .save{
            background-color:green;
        }
    </style>
</head>

<body>
    <h1>Details Saving Website!</h1>
    <p>This website is specially builtfor those people who are unable to
        remember their details and don't share your passwords!</p>
    </p>
    <div class="form">
        <form action="" method="post">
            <div class="name">
            <label for="#">Name:</label>
            <input type="text" name="name" id="name" required>
            </div>
            <br>
            <div class="address">
            <label for="#">Address:</label>
            <input type="text" name="address" id="address" required>
            </div>
            <br>
            <div class="email">
            <label for="#">Email:</label>
            <input type="email" name="email" id="email" required>
            </div>
            <br>
            <div class="number">
            <label for="#">Phone number:</label>
            <input type="number" name="number" id="number" required>
            </div>
            <br><br>
           
            <div class="save">
            <input type="Submit" value="Save" name="save" id="save" required>
            </div>
         <button onclick="display.php">Check Data</button>
        </form>
    </div>
</body>

</html>
<?php
include 'connection.php';
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['number'];

$insertdata = "INSERT INTO phpproject(Name,Address,Email,Phone) VALUES ('$name','$address','$email','$phone')";

$res = mysqli_query($con, $insertdata);
if($res){
    header("Location:index.php");
    
?>
<script>
    alert("Data added Successfully");
    </script>
    <?php
}
else{
    // echo "<h2>Data Could not be added succeffully</h2>";
}
}