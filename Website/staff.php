<?php
require 'includes/dbh.inc.php';?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="staff.css">
</head>
<body>

<h2>Patient Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Patient Names</th>
    <th>Care Giver Email</th>
    <th></th>
  </tr>
  <?php
  require 'includes/dbh.inc.php';
  $sql = "SELECT idPatients, uidPatients, emailPatients FROM patients";
  $result = $conn-> query($sql);

  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["idPatients"] . "</td>";
      echo "<td>" . $row["uidPatients"] . "</td>";
      echo "<td>" . $row["emailPatients"] . "</td>";
      echo "<td>" . '<button class="button button1">Delete</button>' . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  else {
    echo "No results";
  }
$conn-> close();
   ?>
</table>
<div class="container" style="background-color:#f1f1f1">
<a href="careGiverSignup.php" class="add-patient">ADD NEW USER</a>
</div>
<br/><br/>
<div class="logout">
<a href="index.php?logout=true">Logout</a>
</div>
</body>
</html>
