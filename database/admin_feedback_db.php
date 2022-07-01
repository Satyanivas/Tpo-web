<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">
    <link rel="stylesheet" type="text/css" href="../CssFiles/navstyle.css">
  <link rel="stylesheet" href="../CssFiles/bootstrap.css">
  <link rel="stylesheet" href="../CssFiles/styles.css">
  <script src="../tocsv.js"></script>
  <style>
      th,td{
        font-size: 15px;
      }
  </style>
</head>
<body class="container">
<div class="navbar">
		<ul>
			<li><img src="../images/logo.jpg"  style="margin-left:0px;margin-right: auto; width:50%; height:100px;"></li>
			</ul>
      <a href="#" onclick="download_table_as_csv('trainings_feedback');">Download as CSV</a> 
	</div>

<?php
    include("config.php");
    global $con;
    echo "<table id='trainings_feedback' class='table table-bordered' style='margin-top: 20px;'>
    <tr>
    <th>Subject</th>
    <th>Instructor Name</th>
    <th>Date and Time</th>
    <th>Feedback</th>
    </tr>";
    $query = $con->prepare("SELECT AVG(TF.feedback),TD.instructor_name,TD.subject,TD.date_and_time FROM `trainings_feedback` TF 
    INNER JOIN trainings_details TD ON TF.training_acronym = TD.Acronym GROUP BY training_acronym ORDER BY TD.id DESC");
    $query->execute();
    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
    echo "<tr>";
    echo "<td class='clickable-row'>" . $row['subject'] . "</td>";
    echo "<td class='clickable-row'>" . $row['instructor_name'] . "</td>";
    echo "<td class='clickable-row'>" . $row['date_and_time'] . "</td>";
    echo "<td class='clickable-row'>" . ceil($row['AVG(TF.feedback)']) . "</td>";
    echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>