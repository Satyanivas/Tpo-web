<?php
include("config.php");
global $con;
session_start();
if(isset($_POST['vars'])){
    $vars = "," . $_POST['vars'];
    $htno = $_SESSION['htno'];
    echo $vars;
    $query = $con->prepare("SELECT htno FROM user_company WHERE htno=:htno");
    $query->bindParam("htno", $htno, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() != 0) {
        $query = $con->prepare("UPDATE user_company SET company=concat(company, :vars) WHERE htno=:htno");
        $query->bindParam("vars", $vars, PDO::PARAM_STR);
        $query->bindParam("htno", $htno, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>