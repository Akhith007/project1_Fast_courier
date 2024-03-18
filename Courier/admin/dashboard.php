<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url('../images/cr1.jpg');
        background-size: cover;
        }
        .click{
            color: Black;
        }
        .click:hover {
            background-color: #fff;
        }
        a{
            text-decoration: none;
        }
        
</style>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color:aliceblue;">LoginAsUser</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Welcome To Admin Dashbord</h1>
</div>
<div align="center" style="margin-top:240px;">
<form style="position: center;font-weight:bold;font-size:50px">
    
    <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

    <!-- <a href="updatedata.php">Update Data</a><br><br> -->

    <a class="click" href="deletedata.php">Order Details</a><br><br>

    <a class="click"  href="deleteusers.php">Users Data</a><br><br>
</form>

</div>
</body>
</html>