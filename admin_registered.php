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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CssFiles/footer.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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
			<li><a href="admin_registered.php" class="active1"> Required Lists </a></li>
			<li><a href="database/admin_feedback_db.php"> Feedback </a></li>
			<li><a href="admin_add_trainings.php"> Add Trainings </a></li>
			<li><a href="admin_add_jobs.php"> Add Jobs </a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
    <div class="container">
        <form action="database/admin_registered_db.php" style="margin-left:35%;margin-top:10%" method="POST">
				<h4> Company Registered Students list(Use acronym in the search box)</h4>
            <div class="form-group" style="display: flex;">            
                <input name="search_company_acr" type="text" placeholder="Search" class="form-control medium-text-field" autofocus="autofocus" style="width:250px;">           
                <button class="btn btn-primary" style="margin-left:3%;">SEARCH</button>
            </div>
        </form>
    </div>

		<div class="container">
        <form action="database/admin_placedStudents_db.php" style="margin-left:35%;margin-top:10%" method="POST">
				<h4> Students who got placed list(Enter branch in the search box)</h4>
            <div class="form-group" style="display: flex;">            
                <input name="branch" type="text" placeholder="Search" class="form-control medium-text-field" autofocus="autofocus" style="width:250px;">           
                <button class="btn btn-primary" style="margin-left:3%;">SEARCH</button>
            </div>
        </form>
    </div>

		<div class="container">
        <form action="database/admin_notPlacedStudents_db.php" style="margin-left:35%;margin-top:10%" method="POST">
				<h4> Students not got placed list(Enter branch in the search box) </h4>
            <div class="form-group" style="display: flex;">            
                <input name="branch" type="text" placeholder="Search" class="form-control medium-text-field" autofocus="autofocus" style="width:250px;">           
                <button class="btn btn-primary" style="margin-left:3%;">SEARCH</button>
            </div>
        </form>
    </div>
</body>
</html>