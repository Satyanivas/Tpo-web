<html>
</html>
<?php
include("config.php");
global $con;
session_start();
if(isset($_POST['vars'])){
    $vars = $_POST['vars'];
    $var2 = $_POST['var2'];
    $query = $con->prepare("SELECT * FROM trainings_details WHERE Acronym=:vars");
    $query->bindParam("vars", $vars, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $t_name=$result["instructor_name"];
    if ($query->rowCount() != 0) {
        $query2 = $con->prepare("INSERT INTO trainings_feedback(training_acronym,trainer_name,feedback) VALUES (:vars,:tname,:fb)");
        $query2->bindParam("vars", $vars, PDO::PARAM_STR);
        $query2->bindParam("tname", $t_name, PDO::PARAM_STR);
        $query2->bindParam("fb", $var2, PDO::PARAM_STR);
        $result2 = $query2->execute();
        if ($result2) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>