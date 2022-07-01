<?php
    global $con;
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $aUsername = strtoupper($_POST['aUname']);
        $password = $_POST['aPassword'];
        $query = $con->prepare("SELECT * FROM admin WHERE admin_id=:aUsername");
        $query->bindParam("aUsername", $aUsername, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if ($password == $result['admin_password']) {
                $_SESSION['aloggedin'] = true;

                header( 'Location: ../admin_registered.php' );
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
?>