<!DOCTYPE html>
<html>
<head>
<title>PAYTM</title>
<link rel="icon" href="download.png" type="image/png">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="a3.css">
<link rel="stylesheet" href="a3-theme-teal.css">
<link rel="stylesheet" href="main.css">

<style>
body {font-family: "Roboto", sans-serif}
.w3-sidenav a {padding:16px;font-weight:bold}
</style>
<script>

function funk1(){
alert("You will be the directed to the selected Bank website. THANK YOU");
return false;
}
</script>


<!--------------------------------------body---------->

<body>

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:3;width:250px;" id="mySidenav">
  <a href="#" class="w3-border-bottom w3-large"><img src="Paytm-Wallet.jpg" style="width:80%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-text-teal w3-hide-large w3-closenav w3-large">Close <i class="fa fa-remove"></i></a>
  <a href="main2.php">Mobile Recharge</a>
  <a href="main4.html">Movies</a>
  <a href="main7.html">DTH</a>
  
  <a href="#">Trains</a>
  <a href="#">Flights</a>
  <a href="#">Amusement Parks</a>
  <a href="#">Buttons</a>
  <a href="#">Gifts & Cards</a>
  <a href="#">Landline</a>
  <a href="#">Gas</a>
  <a href="#">Fees</a>
  
  
  <div class="w3-accordion">
    <a onclick="myAccordion('demo')" href="javascript:void(0)">Shoping <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-accordion-content w3-animate-left w3-padding">
      <a href="#">Men's Fashion</a>
      <a href="#">Women's Fashion</a>
      <a href="#">Electronics</a>
      <a href="#">Baby & Kids</a>
      <a href="#">Home & Kitchen Essentials</a>
      <a href="#">Sports & Health</a>  
    </div>
  </div>
  
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-top w3-container w3-padding-16 w3-theme w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">PAYTM</span>
</div>


<header class="w3-container w3-theme w3-padding-64" style="padding-left:32px">
  <center><h1 class="w3-xxxlarge w3-padding-16" id="para1">PAYTM</h1><center>
</header>


<div class="w3-container w3-padding-32" style="padding-left:32px;background-image:url(4.jpg);">

<!-----------------------------------------------------------Form---------------------------------------------->

  <div class="form">
    <form class="login-form" onsubmit="return funk1()" method="post">
    
      <h6>Select Bank:</h6><select>
      <option value="SBI">SBI</option>
      <option value="ICICI">ICICI</option>
  <option value="HDFC">HDFC</option>
  <option value="Bank of Baroda">Bank of Baroda</option>
  <option value="Kerala Bank">Kerala Bank</option>
  <option value="Andhra Bank">Andhra Bank</option>
  <option value="SBH">SBH</option>
  <option value="Canara Bank">Canara Bank</option>
  <option value="SBH">Central Bank of India</option>
  <option value="Karnataka Bank">Karnataka Bank</option>
  
  
</select>
<br><br>
      
      <button class="myButton">Proceed to Recharge</button>
      
    </form>
  </div>
</div>


<footer class="w3-container w3-theme w3-padding-32" style="padding-left:32px">
  <h5 style="color:orange">Disclaimer</h5>
  <p>Please do not share your Paytm Wallet password, Credit/Debit card pin, other confidential information with anyone even if he/she claims to be from Paytm. We advise our customers to completely ignore such communications & report to us at cybercell@paytm.com.</p>
  <a href="main6.html">read more</a> 
</footer>
     
</div>
<!----------------------------------------------------------------php-------------------------------------------------------------->
<?php
$servername="localhost";
$username="root";
$password="dingdong";
$dbname="paytm";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$v1=$_POST['city'];
$v2=$_POST['theatre'];
$v3=$_POST['notickets'];


$sql="insert into movie (city,theatre,notickets) VALUES ('$v1','$v2','$v3')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?> 
<script>
// Open and close the sidenav on medium and small screens
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 

