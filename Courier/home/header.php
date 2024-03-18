
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Navbar with Logo Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    .bs-example{
        margin: 0;
    }
    a{
        color: Black;
    }
</style>
</head>
<body>
<div class="bs-example" id="nav" >
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;" > 
        <a href="home.php" class="navbar-brand">
            <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/delivery-truck_1f69a.png" height="80" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link active">Home</a>
                <a href="price.php" class="nav-item nav-link active">Price</a>
                <a href="courierMenu.php" class="nav-item nav-link">Courier</a>
                <a href="trackMenu.php" class="nav-item nav-link">Track</a>
                
                <a href="profile.php" class="nav-item nav-link">Profile</a>
                <a href="contactUS.php" class="nav-item nav-link">ContactUs</a>
                <!-- mailto:akhith7@gmail.com -->
            </div>
            <div class="navbar-nav ml-auto">
                <a href="../admin/logout.php" class="nav-item nav-link">AdminPage</a>
                <a href="../logout.php" class="nav-item nav-link">LogOut</a>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
<?php include('footer.php'); ?>


<!-- navbar-expand-lg -->
 <!-- style="background-color: #e3f2fd; " -->
 <!-- navbar-expand-lg bg-primary" data-bs-theme="dark" -->


 <!-- ../images/fcmw.png -->
  