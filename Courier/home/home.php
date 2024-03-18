<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif; text-size: 250px"><br><br><br><br><br><br><br>
        <h1>Fast Courier Service</h1>
        <h5>Order🙏>>Pickup🚚>>Delivered✔️</h5><br><br>
        <h3>DBMS MINI PROJECT🙏</h3>
        <!-- <h6>By Group 24</h6> -->
    </div>
</body>
</html>