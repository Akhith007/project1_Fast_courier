<!-- when admin click delete data link, page with filter options-->
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


<div class="admintitle">
    <div>
    <h5 ><a href="dashboard.php" style="float: left; margin-left:20px; color:aliceblue;">BackToDashboard</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">User Data Information</h1>
</div>

<div style="overflow-x:auto;">
<table width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-spacing: 5px 5px;">
    <tr style="background-color: #2DCDDF">
        <th>No.</th>
        <th>Items Image</th>
        <th>Sender Name</th>
        <th>Sender Email</th>
        <th>Sender phnumber</th>
        <th>Pickup address</th>
        <th>Receiver Name</th>
        <th>Receiver Email</th>
        <th>Receiver phnumber</th>
        <th>Delivery address</th>
       
        <th>Action</th>
    </tr>

    <?php
    include('../dbconnection.php');

    $qryd= "SELECT * FROM `courier`";
    $run= mysqli_query($dbcon,$qryd);

    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
        <tr align="center">
            <td><?php echo $count; ?></td>
            <td><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"/> </td>
            <td><?php echo $data['sname']; ?></td>
            <td><?php echo $data['semail']; ?></td>
            <td><?php echo $data['sphone']; ?></td>
            <td><?php echo $data['saddress']; ?></td>
            <td><?php echo $data['rname']; ?></td>
            <td><?php echo $data['remail']; ?></td>
            <td><?php echo $data['rphone']; ?></td>
            <td><?php echo $data['raddress']; ?></td>
            <td><a href="datadeleted.php?bb=<?php echo $data['billno']; ?>">Delete</a></td>
        </tr>
        <?php
        }
    }
    ?>
</table>
</div>
