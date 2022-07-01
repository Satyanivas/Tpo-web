<?php   
session_start();
if(!isset($_SESSION['loggedin'])){
  header("Location: index.php");
}
 ?> 
<!DOCTYPE html>
<html>
<head>
	<title> Edit Details </title>
  <link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
  <meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="stylesheet" type="text/css" href="./CssFiles/navstyle.css">
  <link rel="stylesheet" href="CssFiles/bootstrap.css">
  <link rel="stylesheet" href="./CssFiles/editDetails.css">
  <link rel="stylesheet" href="CssFiles/styles.css">
  <link rel="stylesheet" href="CssFiles/footer.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
            /*background-image: url("images/Dottedbackground.jpg");*/
		}
        ::placeholder{
            color: black !important;
            font-weight: bold !important;
        }
	</style>
</head>

<body>
	<!--<img src = "sbit-khammam4.jpg" style="margin-left: auto; margin-right: auto; width: 50%; display: block;">-->

    <nav class="navbar navbar1">
        <a href="placements.php"><img src="./images/logo.jpg" class="img-fluid icon" style="margin-left:10px;margin-right: auto; width:50%; height: auto;"></a>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links navbar1">
    <ul style="margin-top: 2%;">
        <li><a href="placements.php">Placements</a></li>
        <li><a href="trainings.php">Trainings</a></li>
        <li><a href="home.php">Job Portal</a></li>
        <li><a href="edit.php" class="active1">Edit Details</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
<div class="update">
  <div id="formContainer" class="pull-left" style="margin-left: 250px;">
    <form id="edit" name="edit" title="edit form" role="form" method="post" action="database/edit.php">
      <br>
      <h2 style="text-align: center;margin-top: 10px; color: #000376;">EDIT DETAILS</h2><br>
      <div style="margin-left: 20px;margin-right: 20px;">
          <div class="form-group">
              <input type="text" class="form-control medium-text-field" placeholder="Name" name="name" id="htno" required="" value="<?php echo $_SESSION['name'] ?>" aria-label="Name">
          </div>
          <div class="form-group">
              <input type="email" class="form-control medium-text-field" placeholder="Email" name="email" id="htno" required="" value="<?php echo $_SESSION['email'] ?>" aria-label="Email">
          </div>
          <div class="form-group">
              <input type="text" class="form-control medium-text-field" placeholder="Branch" name="branch" id="htno" required="" value="<?php echo $_SESSION['branch'] ?>" aria-label="Branch">
          </div>
          <div class="form-group"> 
              <input type="text" class="form-control medium-text-field" placeholder="Phone" name="phno" id="htno" required="" value="<?php echo $_SESSION['phone'] ?>" aria-label="Phone Number">
          </div>
          <div class="form-group">
              <input type="number" class="form-control medium-text-field" placeholder="Percentage" name="percentage" id="htno" required="" value="<?php echo $_SESSION['percentage'] ?>" aria-label="Percentage">
          </div>
              <div class="pull-right">
                  <button type="submit" name="update" value="update" class="btn btn-primary" id="loginBtn" aria-label="Login">Update</button>&nbsp;&nbsp;
              </div>
          </div>
  </form>
    </div>

  <div id="formContainer" class="pull-right" style="float: none;margin-right: 250px;">
        <form id="CompanyPlaced" name="CompanyPlaced" title="CompanyPlaced" role="form" method="post" action="database/update_company_db.php">
                <br>
                <br>
                <h2 style="text-align: center;margin-top: 10px; color: #000376;" class="form-signin-heading">Company Placed</h2>
                <div style="margin-left: 20px;margin-right: 20px;">
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Hall Ticket No" name="htno" id="htno" required="" value="<?php echo $_SESSION['htno'] ?>" aria-label="HtNo" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Company Name" name="name" id="name" required="" value="" aria-label="Name">
                    </div>
                        <div class="pull-right" style="margin-bottom: 15px;">
                            <button type="submit" name="update" value="update" class="btn btn-primary" id="update" aria-label="update">Update</button>&nbsp;&nbsp;
                        </div>
                    </div>
            </form>
        </div>
</div>



<div class="update1">
  <div id="formContainer" class="mobileEdit">
    <form id="edit" name="edit" title="edit form" role="form" method="post" action="database/edit.php">
      <br>
      <h2 style="text-align: center;margin-top: 10px; color: #000376;">EDIT DETAILS</h2><br>
      <div style="margin-left: 20px;margin-right: 20px;">
          <div class="form-group">
              <input type="text" class="form-control medium-text-field" placeholder="Name" name="name" id="htno" required="" value="<?php echo $_SESSION['name'] ?>" aria-label="Name">
          </div>
          <div class="form-group">
              <input type="email" class="form-control medium-text-field" placeholder="Email" name="email" id="htno" required="" value="<?php echo $_SESSION['email'] ?>" aria-label="Email">
          </div>
          <div class="form-group">
              <input type="text" class="form-control medium-text-field" placeholder="Branch" name="branch" id="htno" required="" value="<?php echo $_SESSION['branch'] ?>" aria-label="Branch">
          </div>
          <div class="form-group"> 
              <input type="text" class="form-control medium-text-field" placeholder="Phone" name="phno" id="htno" required="" value="<?php echo $_SESSION['phone'] ?>" aria-label="Phone Number">
          </div>
          <div class="form-group">
              <input type="number" class="form-control medium-text-field" placeholder="Percentage" name="percentage" id="htno" required="" value="<?php echo $_SESSION['percentage'] ?>" aria-label="Percentage">
          </div>
              <div class="pull-right">
                  <button type="submit" name="update" value="update" class="btn btn-primary" id="loginBtn" aria-label="Login">Update</button>&nbsp;&nbsp;
              </div>
          </div>
  </form>
    </div>
  <div id="formContainer">
        <form id="CompanyPlaced" name="CompanyPlaced" title="CompanyPlaced" role="form" method="post" action="database/update_company_db.php">
                <br>
                <br>
                <h2 style="text-align: center;margin-top: 10px; color: #000376;" class="form-signin-heading">Company Placed</h2>
                <div style="margin-left: 20px;margin-right: 20px;">
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Hall Ticket No" name="htno" id="htno" required="" value="<?php echo $_SESSION['htno'] ?>" aria-label="HtNo" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Company Name" name="name" id="name" required="" value="" aria-label="Name">
                    </div>
                        <div class="pull-right" style="margin-bottom: 15px;">
                            <button type="submit" name="update" value="update" class="btn btn-primary" id="update" aria-label="update">Update</button>&nbsp;&nbsp;
                        </div>
                    </div>
            </form>
        </div>
</div>
  <script src="script.js"></script>
  
</body>
</html>