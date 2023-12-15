<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" media="screen" href="./beispiel:SELFHTML-Beispiel-Grundlayout.css" />-->
  <link rel="stylesheet" type="text/css" href="reg_log.css" />
  <style>
  html,body{
              height:100%;
             }
           body{
               margin:0;
               background:white url('images/log.png') no-repeat center 
               top;
           min-height: 700px;
            -webkit-box-shadow:inset 0 0 0 5px white,
             inset 0 0 0 10px #90c0aa,inset 0 0 0 15px #f2f2f2;
           -mox-box-shadow:inset 0 0 0 3px #f2f2f2,inset 0 0 0 10px #90c0aa,
              inset 0 0 0 15px #f2f2f2;
              box-shadow:inset 0 0 0 5px #f2f2f2,
              inset 0 0 0 10px #90c0aa,
              inset 0 0 0 15px #f2f2f2;
            }
section {
 float: right;
  margin: 0 1.5%;
  width: 70%;
  
}
aside {
  float: left;
  margin: 0 1.5%;
  width: 30px;
  padding: 20px;
}
.header{
  width: 400px;
  height: 30px;
  margin: 50px auto 0px;
  color: white;
  background: gray;
  text-align: center;
  border: 1px solid white;
  border-bottom: none;
  border-radius: 0px 0px 0px 0px;
  padding: 0px;
}
form, .content {
  width: 70%;
  margin: 0px auto;
  padding: 10px;
  border: 1px solid white;
  background: white;
  border-radius: 0px 0px 0px 0px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}




</style>

</head>
<body>
<div id="menu-wrapper">
<section>

<br></br>

  
<?php include "log_nav.php"; ?>

    <?php
	 if(isset($_GET['page'])) {
	    switch ($_GET['page']){
			
			case "english_login.php":
			  include "english_login.php";
			  break;
			case "tigrigna_login.php":
			  include "tigrigna_login.php";
			  break;
			case "amharic_login.php":
			  include "amharic_login.php";
			  break;
			case "german_login.php":
			  include "german_login.php";
			  break;
			case "china_login.php":
			  include "china_login.php";
			  break;
			case "arabic_login.php":
			  include "arabic_login.php";
			  break;
			  
			  default: 
			     
		};
    }
	?>
	
   </div>
    
 </section>
   <aside>
  
          
          
		  <img src="images/logo1.png" width="370px" height="600px"> 
		 
    </aside>
</body>
</html>