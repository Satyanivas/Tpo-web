<?php   
session_start();
if(!isset($_SESSION['loggedin'])){
  header("Location:index.php");
}
global $con;
include('config.php');
$query = $con->prepare("SELECT * FROM job_details");

$query->execute();  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Job Portal</title>  
<!-- Latest compiled and minified CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script type="text/javascript">

  function getButtonDataId(Acronym) { 
    var acr=$(Acronym).data('id');
    var vars = {
        'token': acr,
    };
    var userStr = JSON.stringify(vars);
    $.ajax({
        url: 'registered.php',
        type: 'post',
        data: { vars: acr },
        success: function (response) {
            console.log(response);
        }
    });
    
    } 
</script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">SBIT TPO Job Portal</h3><br />  
                <br />  
                <div class="panel-group" id="posts">  
                <?php  
                while($row = $query->fetch(PDO::FETCH_ASSOC))
                {  
                ?>  
                     <div class="panel panel-default">  
                          <div class="panel-heading">  
                               <h4 class="panel-title">  
                                    <a href="#<?php echo $row["id"]; ?>" data-toggle="collapse" data-parent="#posts"><?php echo $row["job_name"]; ?></a>  
                               </h4>  
                          </div>  
                          <div id="<?php echo $row["id"]; ?>" class="panel-collapse collapse">  
                               <div class="panel-body">  
                                <h5><b>Description:</b><br> <br> 
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><br>
                                <a href=<?php echo $row["company_registration_url"]; ?>>Apply Now</a> <br> <br> 
                                <button id='registedButton' type='button' onclick='getButtonDataId(this)' data-id=<?php echo $row["Acronym"]; ?>>Applied</button> 
                              </div>  

                          </div>  
                     </div>  
                <?php  
                }  
                ?>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  