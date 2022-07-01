<?php   
session_start();
if(!isset($_SESSION['loggedin'])){
  header("Location: index.php");
}
global $con;
include('database/config.php');
$query = $con->prepare("SELECT * FROM job_details ORDER BY id DESC");

$query->execute();  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <title>Job Portal</title>
      <link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
	<link rel="stylesheet" type="text/css" href="./CssFiles/navstyle.css">
	<link rel="stylesheet" href="./CssFiles/bootstrap.css">
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
  		/*background-image: url("images/Dottedbackground.jpg");*/
		}
	</style> 
<!-- Latest compiled and minified CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script>
$(document).ready(function(){
   $(".registedButton").each(function() {
        var getCookieName = $(this).data('id');
        if(getCookie(getCookieName)){
           $(this).prop('disabled',true);
        }
   });
});
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
</script>

    <script type="text/javascript">
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
  function getButtonDataId(Acronym) { 
     alert("Hurray! You have applied");
     var cookieName = $(Acronym).data('id');
     var eCookie = setCookie(cookieName, 'setVal',20);
     $(Acronym).prop('disabled',true);
     
    var acr=$(Acronym).data('id');
    var vars = {
        'token': cookieName,
    };
    var userStr = JSON.stringify(vars);
    $.ajax({
        url: 'database/registered.php',
        type: 'post',
        data: { vars: acr },
        success: function (response) {
            console.log(response);
        }
    })
    
    } 
</script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="CssFiles/footer.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">      
</head>  
      <body> 
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
					<li><a href="home.php" class="active1">Job Portal</a></li>
					<li><a href="edit.php">Edit Details</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>

	<img src="./images/5853.jpg" class="img-fluid vector" style="margin-left: 10%; margin-top: 20px; width:50%; height:auto; float:right;">
	<div class="container">
		<div class="pageContent" style="margin-top: 10%; color: navy;">
		<h2 id="content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif' !important; font-weight: 700; size:40px;line-height: 20px !important">FIRST STEP</h1>
		<h3 id="content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif' !important; font-weight: 700; size:40px;line-height: 20px !important">TO YOUR CAREER</h2>
		<h3 id="content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif' !important; font-weight: 700; size:40px;line-height: 20px !important">STARTS HERE</h3>
		</div>
	</div>
           <div class="container" style="width:100%;">
                <div class="panel-group container" id="posts">  
                <?php  
                
                while($row = $query->fetch(PDO::FETCH_ASSOC))
                {  
                ?>  
                <div class="panelJobDetails">
                     <div class="panel panel-default">  
                          <div class="panel-heading">  
                               <h4 class="panel-title">  
                                    <a href="#<?php echo $row["id"]; ?>" data-toggle="collapse" data-parent="#posts"><?php echo $row["job_name"]; ?></a>  
                               </h4>  
                          </div>  
                          <div id="<?php echo $row["id"]; ?>" class="panel-collapse collapse">  
                               <div class="panel-body">  
                                <h5><b>Description:</b><br> <br> 
                                <p><?php echo $row["Description"]; ?></p><br>
                                <h5><b>Last date to register:</b><br> <br> 
                                <p><?php echo $row["last_date"]; ?></p><br>
                                <a target="_blank" href=<?php echo $row["company_registration_url"]; ?>>Apply Now</a> <br> <br> 
                                <button id='registedButton_<?php echo $row["Acronym"]; ?>' class="registedButton btn btn-primary" type='button' onclick='getButtonDataId(this)' data-id=<?php echo $row["Acronym"]; ?>>Applied</button> 
                              </div>  

                          </div>  
                     </div>  
                </div>     
                <?php  
                }  
                ?>  
                </div>  
           </div>  
           <br />  
           <script src="script.js"></script>
           <?php
		include('footer.php');
		?>
      </body>  
 </html>  