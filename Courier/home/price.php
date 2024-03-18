<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
</head>
<body>
    <h1 style ="text-align: center; color: #1A0000; ">PRICE DETAILS</h1>
    <table width='30%' border="5px solid" style="margin-top:30px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 5px 5px;border-collapse: collapse;">
    <tr style="background-color: #2DCDDF;font-size:30px">
    <th>Weight in Kg</th><th>Price</th>
    </tr>
    <tr>
    <td>0-1</td><td>120</td>
    </tr>
    <tr>
    <td>1-2</td><td>200</td>
    </tr>
    <tr>
    <td>2-4</td><td>250</td>
    </tr>
    <tr>
    <td>4-5</td><td>300</td>
    </tr>
    <tr>
    <td>5-7</td><td>400</td>
    </tr>
    <tr>
    <td>7-8</td><td>500</td>
    </tr>
    <tr>
    <td>9-10 MAX</td><td>1500</td>
    </tr>
    </table>
    <h3 align="center" style="margin-top:20px;">We don't undertake material weighing more than 10kg</h3>
    <h3 align="center" style="margin-top:20px;"> As per your courier's weight pay the amount on:</h3>
    <div style="margin-left:45% ;margin-right:auto ;font-weight:bold;">
    <ol>
    <li>UPI: abcd@okicic</li>
    <li>GPay: 6362786223</li>
    <li>PhnPay: 9765436734</li>
    <div  class="col-lg-4"  style="margin-left:45% ;margin-right:auto ;font-weight:bold;">
          <img class="img-fluid" src="../images/qr.jpg" style="width:60%;height:95%;" alt="BHIM and PhonePe QR Code">
           <h6 style="margin-left: 25px;">BHIM QR Code</h6>
        </div>
    </ol>
    </div>
    
</body>
</html>

<!---->