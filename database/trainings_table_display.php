<?php
    include("config.php");
    global $con;
    $query = $con->prepare("SELECT * FROM trainings_details");
    $query->execute();
    echo "
    <div class='table-responsive'> 
    <table class='table table-hover'>
    <tr>
    <th>Subject</th>
    <th>Date and Time</th>
    <th>Instructor Name</th>
    <th>Feedback</th>
    </tr>";

    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
        if(strtoupper($row['branch'])==strtoupper($_SESSION['branch']) || strtoupper($row['branch'])=="ALL"){
            echo "<tr>";
            echo "<td class='clickable-row' data-href=" . $row['meeting_link'] . ">" . $row['subject'] . "</td>";
            echo "<td class='clickable-row' data-href=" . $row['meeting_link'] . ">" . $row['date_and_time'] . "</td>";
            echo "<td class='clickable-row' data-href=" . $row['meeting_link'] . ">" . $row['instructor_name'] . "</td>";
            echo "<td><input id=". $row['Acronym'] ." data-id=". $row['Acronym'] ." class='feedBackInput' type='number' max='5' min='1' maxlength='2'> <button class='feedbackButton' data-id=". $row['Acronym'] ." onclick='getFeedback(this)'><i class='arrow right'></i></button></td>";
            echo "</tr>";
        }
    }
    echo "</table>
    </div>";
?>