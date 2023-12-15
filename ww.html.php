


<?php
session_start();
include 'config.php';


if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   
   

   //$select = mysqli_query($conn, "SELECT * FROM `english` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   	$sql = "SELECT * FROM english WHERE email='$email' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['id'] = $row['id'];
				$_SESSION['image'] = $row['image'];
            	header("Location: english_office3.php");
		        exit();
            }else{
				header("Location: english_login5.php?error=Incorect User name or password");
				
				
		        exit();
			}
		}else{
			header("Location: english_login5.php?error=Incorect User name or password");
	        exit();
		}
	}
	






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<meta https-equiv="X-UA-Compitable" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>O-Knock</title>
<LINK REL="SHORTCUT ICON" HREF="images1/kkonck.jpg" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">   
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="/scripts/snippet-javascript-console.min.js?v=1"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>login</title>

   <!-- custom css file link  -->
   


</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap'); 
:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
   --border:1px solid var(--black);
}
*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}
*::-webkit-scrollbar{
   width: 10px;
   height: 5px;
}
*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.form-container{
   min-height: 3vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:5px;
   padding-bottom: 70px;
   margin-left: 6px;
}

.form-container form{
   width: 300px;
   border:var(--border);
   padding:20px;
   text-align: center;
   background-color: var(--white);
   top: -10px;
   background: #fafafa;
   box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}

.form-container form .input-group{
   width: 100%;
   border:var(--border);
   padding:2px 10px;
   font-size: 18px;
   margin:10px 0;
}
.form-container form p{
   margin-top: 20px;
   font-size: 12px;
   color:var(--blue);
}
input::placeholder {
      color: #D8D8D8;
      opacity: 1;
	  font-size: 15px;
      }
.form-container form, nput-control, label{
   font-size: 12px;
}

input[type=submit]{
	padding: 10px 88px;
	background: #bdbdbd;
	color: #fff;
	font-size: 15px;
	cursor: pointer;
}

/*------------------------------------------*
* {
  box-sizing: border-box;
}
.container::after {
  content: "";
  clear: both;
  display: block;
}
/*---------------------------------------*/

[class*="col-"] {
  float: left;
  padding: 15px;
}
.col-3 {width: 30%;}

.col-6 {width: 70%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}

/*---------------------------------------*
.left-content {
	
}
.R-logo{
     margin: 0 auto;
	 text-align: center;
	 
   }
  .R-logo > img{
    height: 150px;
	margin: -50px auto;
	display: inline-block;
	
  }
/*-----------------------------------------*/

/*------------------------------------------*/

.footer {
 
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/*------------------------------------------*/
.forgotten-password {
 text-align: center;
 
}

.forgotten-password > a{
  font-weight: 600;
  font-size: 14px;
  color: #1877f2;
  display: inline-block;
  margin: 20px 0;
}
.forgotten-password > a:hover{
  text-decoration: underline;
}
.create-new-ac{
 display: inline-block;
 background: #BCF5A9;
 color: black;
 text-decoration: none;
 padding: 10px 10px;
 font-weight: 500;
 font-size: 15px;
 margin: 20px 0 5px;
 font-family: serif;
}

/*-----------------------------------------*/

*{
	padding:0;
	margin:0;
	
}
.body {
	
}

.fixed-header{
        width: 100%;
        position: fixed;        
        background: #fff;
        padding: 10px 0;
        color: #fff;
		margin-right: 3%;
		
    }
    .fixed-header{
        top: 0;
		height: 150px;
    }
<!-------------------------------------->	
	
   


footer{
	position: fixed;
	bottom: 0;
}

/*----------------------------*/



.btn_primary {
	background-color: #BCF5A9;
	border: none;
	color: white;
	padding: 4px 30px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	font-family: serif;
}
.btn_entry {
	font-family: serif;
}
.form_container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:5px;
   padding-bottom: 70px;
   margin-left: 6px;
   background: #fff;
}

/*---------------------------------*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
	
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
	
}
.container{
	max-width: 1170px;
	margin:auto;
	
}
.row{
	display: flex;
	flex-wrap: wrap;
	overflow: scroll;
}
ul{
	list-style: none;
}
.footer{
	background-color: #f2f2f2;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: blue;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-family: serif;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 12px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #000000;
	display: block;
	transition: all 0.3s ease;
	font-family: serif;
}
.footer-col ul li a:hover{
	color: red;
	padding-left: 8px;
	
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: blue;
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	font-size: 25px;
	color: #fff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
logo {
	margin-left: 5%;
}
hr {
      width: 100%;
      height: 2px;
      mar
      gin-left: auto;
      margin-right: auto;
      background-color: #000000;
	  box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
      }
	  
	  

</style>
<body>
<div class="fixed-header">
	     <nav>
		   <ul class="MenuItems">
		       <div class="fixed-header">
	               <nav>
		                <div class="container">
                               <div class="header-container">
                                   <div class="logo" style="float: left;">
                                      <a href="http://localhost:82/online/english/bar.php" class=""><img src="images1/kkonck.jpg" class="logo" alt="" height="100" width="230">   </a>            
					               </div>
                                    <div class="button-melde" style="float: right; font-size: 120%;" >
                                      <a href="http://localhost:82/online/english/english_login5.php" class="btn_entry" style="margin-left: -20%; text-decoration: none;" >Login</a>
                                      <a href="http://localhost:82/online/english/english_register5.php" class="btn_primary" >Register</a>
                                   </div>
								    <hr />
                               </div>
                         </div>

	                </nav>		
              </div>

	       </ul>
          
	    </nav>		
      </div><br><br><br><br>

<div class="form_container">	  
<div class="container">
  <div class="content">
    <br><br>
        <div class="col-3 menu">
                <div class="left-content" style="width: 340px; float: right; margin-right: 6.5em;">
                     <div class="R-logo">
		               <div class="image">
	                      <img src="images100/aaaa.png" width="400px" height="350px">
                       </div>
		            </div>
		             <h4 class="f-quote" style="margin-left: 14%; font-family: serif;">Do you want to sell your goods online? sign-up. O-Knock enables you to open your own Onlineshop</h4>
		             <h2 class="f-quote"></h2>
		             
	            </div>
       </div> 
  <div class="col-6">
     
  <div class="right-content">
   
    <div class="form-container">

        <form action="english_login5.php" method="post" enctype="multipart/form-data" action="" name="myForm">
                               <h3 style="float: right;">Login</h3>
	                          <p>you do not have an account </p><a href="english_register5.php" style="color: red;">register now</a>
							  
		                      <?php if (isset($_GET['error'])) { ?>
     		                    <p class="error"><?php echo $_GET['error']; ?></p>
                              <?php } ?>  
	                   
	                    <div class="input-group" style="text-align: center;">
                          <input type="email" name="email" placeholder="enter email" class="box" required>
	                   </div>
	                   <div class="input-group" style="text-align: center;">
                            <input type="password" name="password" placeholder="enter password" class="box" required="" id="id_password">
							<img src="images1/eye_off.png" class="inputEyeIcon" style="width: 16px; height: 16px; float: right; cursor: pointer;">
                              
					   </div>
	                 
	  
                      <input type="submit" name="submit" value="login now" class="btn">
					  <br>
  	
	           <div class="forgotten-password">
		               <a href="http://localhost:82/online/english/english_forgot_password.php" style="text-decoration: none; color: red;">Forgot Password?</a>
	         </div><br>
	 
	         <div class="" style="text-align: center;">
		               <a class="create-new-ac" href="http://localhost:82/online/english/english_front_page1.php" style="width: 200px; height: 40px;">Create a new account?</a>
            </div>
	    </form>
                     
	  
	  
    </div>
  </div>
  </div>
 </div>
</div>
</div>

<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Language</h4>
  	 			<ul>
  	 				<li><a href="http://localhost:8/online/english_login2.php">እንግሊዘኛ/English</a></li>
		            <li><a href="http://localhost:82/online/arabic_register2.php">አራብኛ/Arabic</a></li>
		            <li><a href="http://localhost:82/online/amharic/amharic_login2.php">አማርኛ/Amharic</a></li>
		            <li><a href="">ትግርኛ/Tignya</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Service</h4>
  	 			<ul>
  	 				  <li><a href="http://localhost:82/online/english/shops/bar.php" style="color: #4CAF50;">የገበያ ቦታ/shopping galerie</a></li>		
                      <li><a href="">እርዳታ/Help</a></li>
					
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Social networking</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Social networking</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/?lang=de"><i class="fa fa-twitter"></i></a>
  	 				<a href="#"><i class="fa fa-instagram"></i></a>
  	 				
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

	
	
	
	
    
      
   <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-44fe83e49b63affec96918c9af88c0d80b209a862cf87ac46bc933074b8c557d.js"></script>
  
</body>
</html>

<script>
 var clearAllInputs = document.querySelectorAll('.inputEyeIcon');
    clearAllInputs.forEach(function (clearEachInputs) {
      clearEachInputs.addEventListener('click', function (e) {
        var inputAll = this.parentElement.querySelector('input');
        if (inputAll.type === "password") {
          inputAll.type = "text";
          this.src = "images1/eye_on.png";
        } else {
          inputAll.type = "password";
          this.src = "images1/eye_off.png";
        }
      })
    })

 
</script> 