<?php
 include("config.php");
 global $con;
ob_start();

// try {
// 	$con = new PDO("mysql:dbname=tpoDB;host=localhost", "tpoDBadmin", "Redhat@2112");
// 	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
// }
// catch(PDOExeption $e) {
// 	echo "Connection failed: " . $e->getMessage();
// }


if (isset($_POST['register'])) {
    $htno = strtoupper(trim($_POST['htno']));
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $branch = trim($_POST['branch']);
    $phno = trim($_POST['phno']);
    $percentage = trim($_POST['percentage']);
    $password = $_POST['password'];
    try{if (strpos($htno, 'M6') !== false||strpos($htno, 'RC') !== false) {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $query = $con->prepare("SELECT * FROM users WHERE htno=:htno");
            $query->bindParam("htno", $htno, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                echo '  <!DOCTYPE html>
                <html>
                <head>
                <title>Error</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                <meta charset="UTF-8">
                <link rel="stylesheet" href="../CssFiles/restrictAccess.css">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                </head>
                <body>
                <div class="w3-display-middle">
                <h1 class="w3-jumbo w3-animate-top w3-center"><code>Check Your Hall Ticket Number</code></h1>
                <hr class="w3-border-white w3-animate-left" style="margin:auto;width:50%">
                <h3 class="w3-center w3-animate-right">The hall ticket number is already registered!</h3>
                <h3 class="w3-center w3-animate-zoom">🚫🚫🚫🚫</h3>
                </div>
                </body>
                </html>
        ';
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
                    header( 'Location: ../login.php' );
                } else {
                    echo '<p class="error">Something went wrong!</p>';
                }
            }
    }else{
            echo '  <!DOCTYPE html>
                    <html>
                    <head>
                    <title>Access Denied</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                    <meta charset="UTF-8">
                    <link rel="stylesheet" href="../CssFiles/restrictAccess.css">
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                    </head>
                    <body>
                    <div class="w3-display-middle">
                    <h1 class="w3-jumbo w3-animate-top w3-center"><code>Access Denied</code></h1>
                    <hr class="w3-border-white w3-animate-left" style="margin:auto;width:50%">
                    <h3 class="w3-center w3-animate-right">You dont have permission to enter this site.</h3>
                    <h3 class="w3-center w3-animate-zoom">🚫🚫🚫🚫</h3>
                    <h6 class="w3-center w3-animate-zoom">error code:403 forbidden</h6>
                    </div>
                    </body>
                    </html>
            ';
        }



    }catch(Exception $e) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        
    }


}
?>