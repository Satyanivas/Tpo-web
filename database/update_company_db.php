<?php
include("config.php");
global $con;
session_start();
if(isset($_POST['update'])){
    $htno = $_SESSION['htno'];
    $companyName = ",".$_POST['name'];
    $query = $con->prepare("SELECT htno FROM users WHERE htno=:htno");
    $query->bindParam("htno", $htno, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() != 0) {
        $query = $con->prepare("UPDATE users SET selected_company=concat(selected_company, :companyName) WHERE htno=:htno");
        $query->bindParam("companyName", $companyName, PDO::PARAM_STR);
        $query->bindParam("htno", $htno, PDO::PARAM_STR);
        $result = $query->execute();
        
        if ($result) {
            echo '<script>alert("Your updation was successful!")</script>';
            echo "<script type='text/javascript'>location.href = '../edit.php';</script>";
            
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
        
    }
}
?>