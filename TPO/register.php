<?php
include("config.php");
global $con;

if (isset($_POST['register'])) {
    $htno = $_POST['htno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $phno = $_POST['phno'];
    $percentage = $_POST['percentage'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $con->prepare("SELECT * FROM users WHERE htno=:htno");
    $query->bindParam("htno", $htno, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">The hall ticket number is already registered!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $con->prepare("INSERT INTO users(htno,name,email,branch,mobile,percentage,password) VALUES (:htno,:name,:email,:branch,:phno,:percentage,:password_hash)");
        $query->bindParam("htno", $htno, PDO::PARAM_STR);
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("branch", $branch, PDO::PARAM_STR);
        $query->bindParam("phno", $phno, PDO::PARAM_STR);
        $query->bindParam("percentage", $percentage, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            $query2 = $con->prepare("INSERT INTO user_company(htno) VALUES (:htno)");
            $query2->bindParam("htno", $htno, PDO::PARAM_STR);
            $result2 = $query2->execute();
            echo '<p class="success">Your registration was successful!</p>';
            header( 'Location: index.php' );
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>