<?php
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Asset/style.css">
</head>
<body style="background-image: url('Asset/bg2.jpg');background-size: 100% 100%;background-attachment: fixed;background-repeat: no-repeat;">

<div id="header">
       <br>
       <h1 style=" font-family:Agency FB; font-size: 70px  ; "> Sparks Foundation Internship Project </h1>
       <br>
       <h2 style=" font-family:Agency FB; font-size: 55px  ; "> Basic Banking management </h2>
        </div>
        
        <div id="section">
            <table>
                <tr></tr>
                <tr>        
               
                <div class="css-button" >
                  <p class="css-button-text">View Users</p>
                  <div class="css-button-inner">
                  <a href="getdetail.php" >
                  <div class="reset-skew">
                  <p class="css-button-inner-text">View Users</p>
                </div></a>
                </div>
                </div>
                </td>
                </tr>
                <tr>        
               <br> <br> <br> <br> <br>
               <div class="css-button" >
                 <p class="css-button-text">Credit Transfer</p>
                 <div class="css-button-inner">
                 <a href="selectuser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Credit Transfer</p>
               </div></a>
               </div>
               </div>
               </td>
               </tr>
            </table>
    </div>
</body>
</html>