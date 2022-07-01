<?php
 include("config.php");
 global $con;
ob_start();

if (isset($_POST['addTraining'])) {
  $name = trim($_POST['name']);
  $subject = trim($_POST['subject']);
  $date = trim($_POST['date']);
  $link = trim($_POST['link']);
  $branch = trim($_POST['branch']);
  $acronym = trim($_POST['acronym']);

  $query = $con->prepare("INSERT INTO trainings_details(instructor_name,subject,date_and_time,meeting_link,branch,Acronym) VALUES (:name,:subject,:date,:link,:branch,:acronym)");
  $query->bindParam("name", $name, PDO::PARAM_STR);
  $query->bindParam("subject", $subject, PDO::PARAM_STR);
  $query->bindParam("date", $date, PDO::PARAM_STR);
  $query->bindParam("link", $link, PDO::PARAM_STR);
  $query->bindParam("branch", $branch, PDO::PARAM_STR);
  $query->bindParam("acronym", $acronym, PDO::PARAM_STR);

  $result = $query->execute();

  if($result){
    echo '<script>alert("Your updation was successful!")</script>';
    echo "<script type='text/javascript'>location.href = '../admin_add_trainings.php';</script>";
  }
  else{
    echo '<p class="error">Something went wrong</p>';
  }
}
?>