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
  <link href="./CssFiles/styles.css" rel="stylesheet">
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
			<li><a href="admin_registered.php"> Required Lists </a></li>
			<li><a href="database/admin_feedback_db.php"> Feedback </a></li>
			<li><a href="admin_add_trainings.php"> Add Trainings</a></li>
			<li><a href="admin_add_jobs.php" class="active1"> Add Jobs </a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
    <div class="container">
    <div id="formContainer" class="" style="float: none;margin: 0 auto; margin-top:50px;">
    <form id="addJobs" name="addJobs" title="Add Jobs" role="form" method="post" action="database/add_jobs_db.php">
                <br>
                <br>
                <h2 style="text-align: center;margin-top: 0px; color: #000376;" class="form-signin-heading">ADD JOB DETAILS</h2>
                <div style="margin-left: 20px;margin-right: 20px;">
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Company Name" name="name" id="name" required="" value="" aria-label="name">
                    </div>
                    <div class="form-group">
                        <input type="text-area" class="form-control medium-text-field" placeholder="Description" name="description" id="description" required="" value="" aria-label="description">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Registration URL" name="url" id="url" required="" value="" aria-label="url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Last Date" name="date" id="date" required="" value="" aria-label="date">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Acronym" name="acronym" id="acronym" required="" value="" aria-label="acronym">
                    </div>
                        <div class="pull-right">
                            <button type="submit" name="addJob" value="addJob" class="btn btn-primary" id="addJob" aria-label="addJob">ADD JOB</button>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </form>
  </div>
    </div>
</body>
</html>