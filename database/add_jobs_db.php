<?php
 include("config.php");
 global $con;
ob_start();

if (isset($_POST['addJob'])) {
  $CompanyName = trim($_POST['name']);
  $description = trim($_POST['description']);
  $url = trim($_POST['url']);
  $lastDate = trim($_POST['date']);
  $acronym = trim($_POST['acronym']);

  $query = $con->prepare("INSERT INTO job_details(job_name,Description,company_registration_url,last_date,Acronym) VALUES (:CompanyName,:description,:url,:date,:acronym)");
  $query->bindParam("CompanyName", $CompanyName, PDO::PARAM_STR);
  $query->bindParam("description", $description, PDO::PARAM_STR);
  $query->bindParam("url", $url, PDO::PARAM_STR);
  $query->bindParam("date", $lastDate, PDO::PARAM_STR);
  $query->bindParam("acronym", $acronym, PDO::PARAM_STR);

  $result = $query->execute();

  if($result){
    echo '<script>alert("Your updation was successful!")</script>';
    echo "<script type='text/javascript'>location.href = '../admin_add_jobs.php';</script>";
  }
  else{
    echo '<p class="error">Something went wrong</p>';
  }
}
?>