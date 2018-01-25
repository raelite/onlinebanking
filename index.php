<?php 
if(isset($_REQUEST['submitBtn'])){
    include '_inc/dbconn.php';
    $username=$_REQUEST['uname'];
    
    //salting of password
    $salt="@g26jQsG&nh*&#8v";
    //$password= sha1($_REQUEST['pwd'].$salt);
    //$password=$_REQUEST['pwd'];
    //$salt = sha1(md5($password));
   // $password = md5($password.$salt);
    //$password=$_REQUEST['pwd'];
    $password=  sha1($_REQUEST['pwd'].$salt);
    
    $sql="SELECT email,password FROM customer WHERE email='$username' AND password='$password'";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    $rws=  mysqli_fetch_array($result);
    
    $user=$rws[0];
    $pwd=$rws[1];    
    
    if($user==$username && $pwd==$password){
        session_start();
        $_SESSION['customer_login']=1;
        $_SESSION['cust_id']=$username;
    header('location:customer_account_summary.php'); 
    }
   
else{
    header('location:index.php');  
}}
?>
<?php 
session_start();
        
if(isset($_SESSION['customer_login'])) 
    header('location:customer_account_summary.php');   
?>

<!DOCTYPE html>

<html>
    <head>
        
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>    
        
        
        <meta charset="UTF-8">
        <title>Online Banking System</title>
        <link rel="stylesheet" href="newcss.css">
    </head>
    <body>
    
        <div class="wrapper">
            
        <div class="header">
            <img src="header.jpg" height="100%" width="100%"/>
            </div>
            <div class="navbar">
                
            <ul>
            <li><a href="index.php">Home </a></li>
            <li><a href="features.php">Features </a></li>
            <li id="last"><a href="contact.php">Contact Us</a></li>
            </ul>
            </div>
            
        <div class="user_login">
            <form action='' method='POST'>
        <table align="left">
            <tr><td><span class="caption">Secure Login</span></td></tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr><td>Username:</td></tr>
            <tr><td><input type="text" name="uname" required></td> </tr>
            <tr><td>Password:</td></tr>
            <tr><td><input type="password" name="pwd" required></td></tr>
            
            <tr><td class="button1"><input type="submit" name="submitBtn" value="Log In" class="button"></td></tr>
        </table>
                </form>
            </div>
        
        <div class="image">
            <img src="home1.jpg" height="100%" width="100%"/>
            <div class="text">


           <!--  <style>
					.fade {
               -webkit-animation-name: fade;
               -webkit-animation-duration: .0s;
               animation-name: fade;
               animation-duration: 2.0s;
             }
                @-webkit-keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
             }

                @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
             }
           </style>

				<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="home1.jpg" height="100%" width="100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="home2.jpg" height="100%" width="100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="home3.jpg" height="100%" width="100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script> -->

                
                </div>
            </div>
            
            <div class="left_panel">
                <p>Our internet banking portal provides personal banking services that gives you complete control over all your banking demands online.</p>
                <h3>Features</h3>
                <ul>
                    <li>Registration for online banking</li>
                    <li>Adding Beneficiary account</li>
                    <li>Funds Transfer</li>
                    <li>Last Login record</li>
                    <li>Mini Statement</li>
                    <li>ATM and Cheque Book</li>
                    <li>Staff approval Feature</li>
                    <li>Account Statement by date</li>
                    
                    
                </ul>
                </div>
            
            <div class="right_panel">
                
                    <h3>PERSONAL BANKING</h3>
                    <ul>
                        <li>Personal Banking application provides features to administer and manage non personal accounts online.</li>
                        <li>Phishing is a fraudulent attempt, usually made through email, phone calls, SMS etc seeking your personal and confidential information.</li>
                        <li>Online Bank or any of its representative never sends you email/SMS or calls you over phone to get your personal information, password or one time SMS (high security) password.</li>
                        <li>Any such e-mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on reportif you receive any such email/SMS or Phone call. Please lock your user access immediately.
</li>
                    </ul>
                </div>
                    <?php include 'footer.php' ?>
