<?php   
session_start();
if(!isset($_SESSION['loggedin'])){
  header("Location: index.php");
}
 ?> 
<!DOCTYPE html>
<html>
<head>

	<title>Trainings</title>
	<link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
	<link rel="stylesheet" type="text/css" href="./CssFiles/navstyle.css">
	<link rel="stylesheet" type="text/css" href="./CssFiles/trainings.css">

	<link rel="stylesheet" href="./CssFiles/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
	<link rel="stylesheet" href="CssFiles/footer.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<script type="text/javascript">
	$(document).ready(function(){
   $(".feedbackButton").each(function() {
        var getCookieName = $(this).data('id');
        if(getCookie(getCookieName)){
           $(this).prop('disabled',true);
        }
   });
});
		jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
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
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getFeedback(Acronym) {
	var feedback;
	var acr=$(Acronym).data('id');
	$("input").each(function(i,e){
		if($(e).attr('id')==acr){
			feedback = $(e).val();
		}
   });
	if(feedback==""){	
		alert("Feedback is empty")
	}
	else if(feedback>5 || feedback<0)
	{
		alert("Feedback range should be 1 to 5.")
	}
	else{
		var cookieName = $(Acronym).data('id');
     var eCookie = setCookie(cookieName, 'setValue',20);
    $(Acronym).prop('disabled',true);
	
    fb=parseInt(feedback); 
    var acr=$(Acronym).data('id');
    var vars = {
        'token': cookieName,
    };
    var userStr = JSON.stringify(vars);
    $.ajax({
        url: 'database/feedback.php',
        type: 'post',
        data: { vars: acr,var2:fb },
        success: function (response) {
            console.log(response);
        }
    });
	alert("Your feedback: "+ feedback)
	} 
    
    } 
	</script>	
	<style>
		.arrow {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}
		body{
			font-family: Arial, Helvetica, sans-serif;
  		/*background-image: url("images/Dottedbackground.jpg");*/

		}
		
		p {
			font-size: 18px;
			color:black;
			font-family: 'Times New Roman', Times, serif;
		}
		tr{
			font-size: 18px !important;
			color: black !important;
			cursor: pointer;
		}
	</style>
</head>

<body> 
<nav class="navbar navbar1">
		<a href="placements.php"><img src="./images/logo.jpg" class="img-fluid icon" style="border-radius: 10px;margin-left:10px;margin-right: auto; width:50%; height: auto;"></a>
			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
			<div class="navbar-links navbar1">
			<ul style="margin-top: 2%;">
					<li><a href="placements.php">Placements</a></li>
					<li><a href="trainings.php" class="active1">Trainings</a></li>
					<li><a href="home.php">Job Portal</a></li>
					<li><a href="edit.php">Edit Details</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>

	<div class="container" style="margin-top: 30px;">
		<img  class="img-fluid vector" src="./images/3784896.jpg" style="width: 50%; height: auto;float: right;margin-left: 10%;">
		<div class="pageContent" style="margin-top: 20px; color: navy;" >
	       <h2 id="content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif' !important; font-weight: 700; size:40px !important;">
	       GET</h1><br> 

	      <h3 id="content"
	      style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif' !important; font-weight: 700; size:40px !important;">
	      Your Classes</h2> <br>

	      <h3 id="content"
	      style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif' !important; font-weight: 700; size:40px !important;">
	     Here</h3>
		</div>
		</div>
	<div class="container" style="margin-top: 50px;">
		<?php
		include('database/trainings_table_display.php');
		?>
	</div>
	<script src="script.js"></script>
	<?php
		include('footer.php');
		?>
</body>
</html>