<?php
include("config.php");
global $con;
session_start();

if (isset($_POST['update'])) {
    $htno = $_SESSION['htno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $phno = $_POST['phno'];
    $percentage = $_POST['percentage'];
        $query = $con->prepare("SELECT * FROM users WHERE htno=:htno");
        $query->bindParam("htno", $htno, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            $query2 = $con->prepare("UPDATE users SET name=:name,email=:email,branch=:branch,mobile=:phno,percentage=:percentage WHERE htno=:htno");
            $query2->bindParam("name", $name, PDO::PARAM_STR);
            $query2->bindParam("email", $email, PDO::PARAM_STR);
            $query2->bindParam("branch", $branch, PDO::PARAM_STR);
            $query2->bindParam("phno", $phno, PDO::PARAM_STR);
            $query2->bindParam("percentage", $percentage, PDO::PARAM_STR);
            $query2->bindParam("htno", $htno, PDO::PARAM_STR);
            $result=$query2->execute();
            if ($result) {
                $_SESSION['percentage'] = $percentage;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['branch'] = $branch;
                $_SESSION['phone'] = $phno;
                header( 'Location: ../edit.php' );
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
}else{
    echo '<p class="error">Something went wrong out!</p>';
}
?>