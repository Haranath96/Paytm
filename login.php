<!DOCTYPE html>
<html>
<head>
<title>Paytm-Login</title>
<link rel="icon" href="download.png" type="image/png">
<link rel="stylesheet" href="login.css">
</head>


<body>
<center>
<div class="login-page">
  <div class="form">
  <!----------------------------------------THIS IS  FORM START------------------------------------------------------>

  
    <form class="login-form" action="main2.php">
   
    <h3 style="color:#0080ff"> Log in</h3>
      <input type="number" placeholder="Enter your Mobile Number" name="mobilenumber"/>
      <input type="password" placeholder="paytm password" name="password"/>
      <button class="myButton">Secure Login</button><br><br>
      <a href="#forgotpassword" onclick="fun()">Forgot password?</a><br><br>
      <p class="message">New User? <a href="signup.html">Sign up</a></p>
    </form>
  </div>
</div></center>

<!----------------------------------------THIS IS  FORM ends------------------------------------------------------>


<!----------------------------------------THIS IS  php START------------------------------------------------------>
<?php
$servername="localhost";
$username="root";
$password="dingdong";
$dbname="paytm";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$v1=$_POST['mobilenumber'];
$v2=$_POST['email'];
$v3=$_POST['password'];
$v4=$_POST['cnpassword'];

$sql="insert into users (mobile,email,password,cnpassword) VALUES ('$v1','$v2','$v3','$v4')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?> 

</div>
<!----------------------------------------THIS IS  php end------------------------------------------------------>
<script>
document.getElementById("php").style.visibility = "hidden";


    function fun(){
        alert("We have sent your username along with password to the registered email. Please do refer there!")
    }
</script>


</body>
</html>

