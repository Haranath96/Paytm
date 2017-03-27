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
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #ffffff;
    border: solid 1px #c3c3c3;
    width:10%;
}

#panel {
    padding: 50px;
    display: none;
    width:85%;
    
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<!--------------------------------------body---------->

<body>

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:3;width:250px;" id="mySidenav">
  <a href="main2.html" class="w3-border-bottom w3-large"><img src="Paytm-Wallet.jpg" style="width:80%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-text-teal w3-hide-large w3-closenav w3-large">Close <i class="fa fa-remove"></i></a>
  <a href="#">Mobile Recharge</a>
  <a href="main4.html">Movies</a>
  <a href="main7.html">DTH Recharge</a>
   <a href="#">Trains</a>
  <a href="#">Flights</a>
  <a href="#">Amusement Parks</a>
  <a href="#">Events</a>
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
  
  <div id="flip" style="color:black;">About Us</div>
<div id="panel" style="color:black;">Paytm is India's largest mobile payments and commerce platform. It started with online mobile recharge and bill payments and has an online marketplace today. In a short span of time we have scaled to over 200 Mn registered users. Paytm is the consumer brand of India's leading mobile internet company One97 Communications. One97 investors include Ant Financial (AliPay), SAIF Partners, Mediatek, Sapphire Venture and Silicon Valley Bank. We strive to maintain an open culture where everyone is a hands-on contributor and feels comfortable sharing ideas and opinions. Our team spends hours designing each new feature and obsesses about the smallest of details.</div>

 
  
 
</div>


<header class="w3-container w3-theme w3-padding-64" style="padding-left:32px">
<center>  <h1 class="w3-xxxlarge w3-padding-16" id="para1">PAYTM</h1></center>
</header>


<div class="w3-container w3-padding-32" style="padding-left:32px;background-image:url(3.jpg)">

<!-----------------------------------------------------------Form---------------------------------------------->
<div>
  <div class="form">
    <form class="login-form" action="main3.php" onsubmit="return valid();updateProfile();" method="post">
    <h3>Recharge or Pay for</h3>
    <select name="type">
    <option value="Prepaid">Prepaid</option>
      <option value="Postpaid">Postpaid</option>
    </select>
 <br>
 <br>   
      <input type="number" placeholder="Mobile Number" id="mobilenumber" name="mobilenumber" required="required"/>
      <br>
      <br>
      <h3>Select Operator:</h3><select name="operators">
      <option value="Jio">Jio</option>
      <option value="bsnl">BSNL</option>
  <option value="Airtel">Airtel</option>
  <option value="Idea">Idea</option>
  <option value="Vodafone">Vodafone</option>
  <option value="Tata Docomo">Tata Docomo</option>
  <option value="Aircel">Aircel</option>
  
  
</select>
      <br>
      <br>
      <input type="number" name="amount" placeholder="Amount" required="required"> 
     <br><br>
     <input type="text"  placeholder="Promocode (Optional)" id="promocode"> 
     <br><br>
      <button class="myButton">Proceed to Recharge</button>
      
    </form>
  </div>
</div>
</div>

<footer class="w3-container w3-theme w3-padding-32" style="padding-left:32px">
  <h5 style="color:orange">Disclaimer</h5>
  <p>Please do not share your Paytm Wallet password, Credit/Debit card pin, other confidential information with anyone even if he/she claims to be from Paytm. We advise our customers to completely ignore such communications & report to us at cybercell@paytm.com.</p>
  <a href="main6.html">read more</a> 
</footer>
     
</div>

<!------------------------------------php begins----------------->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $fstat=test_input($_POST["mobilenumber"]);
	$pwd=test_input($_POST["password"]);
}

function test_input($data)
{
  $data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
 return $data;
}



$servername = "localhost";
$username = "root";
$password = "dingdong";
$dbname = "paytm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 



$sql ="SELECT * FROM users WHERE mobile=$fstat and password=$pwd";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
      $active = $row['active'];
      
      $count =$result->num_rows;
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     
    
    if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
   $fname=strtoupper($row["FIRSTNAME"]);
   
					
} else {
        
    die("INVALID USERNAME AND PASSWORD<br/><br/><form action=\"http://localhost/j/login.php\" method=\"post\" style=\"color:#EBFA05;\">
<input type=\"submit\" value=\"LOGIN PAGE\">");
}
   
$conn->close();
?>

	
	<!----------------------------------- php ------------------------------->


<script>
// Open and close the sidenav on medium and small screens


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

function valid() {
var x = document.getElementById('mobilenumber').value;
if (x.length<10 || x.length>10) {
alert("Mobile number must not be less than 10 and greater than 10");
return false;
}
var y = document.getElementById('promocode').value;
if (y.length>0) {
alert("This Promocode is invalid");
return false;
}
}
function updateProfile(){
    
    var xmlhttp;
     
    if (window.XMLHttpRequest){
       
        xmlhttp=new XMLHttpRequest();
    }else{
       
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
}
</script>
     
</body>
</html> 

