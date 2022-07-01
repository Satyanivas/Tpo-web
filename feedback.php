<?php   
session_start();
if(!isset($_SESSION['aloggedin'])){
  header("Location: admin.php");
}
 ?>  
<!DOCTYPE html>
<html>
<head>
	<title> ADMIN </title>
	<link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
	<link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
	<link rel="stylesheet" type="text/css" href="./CssFiles/navstyle.css">
	<link rel="stylesheet" href="./CssFiles/bootstrap.css">
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
  		/*background-image: url("images/Dottedbackground.jpg");*/
		}
	</style> 
</head>

<body>
	<div class="navbar1">
		<ul>
			<li><img src="./images/logo.jpg"  style="margin-left:0px;margin-right: auto; width:50%; height:100px;"></li>
			<li><a href="admin_registered.php"> Registered Candidates </a></li>
			<li><a href="feedback.php" class="active1"> Feedback </a></li>
			<li><a href="logout.php">Logout</a></li>
			</ul>
	</div>
    <div class="container">
        <form action="database/admin_feedback_db.php" method="POST" style="margin-left:35%;margin-top:10%">
            <div class="form-group" style="display: flex;">            
                <input type="text" name="search_training_acr" placeholder="Search" class="form-control medium-text-field" autofocus="autofocus" style="width:250px;">           
                <button class="btn btn-primary" style="margin-left:3%;">SEARCH</button>
            </div>
        </form>
    </div>
	
</body>
</html>