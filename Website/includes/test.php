<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="staff.css">
</head>
<body>

<h2>Patient Table</h2>

<table>
  <tr>
    <th>Patient Names</th>
    <th>Care Giver Email</th>
  </tr>
  <?php
  require 'dbh.inc.php';
  $sql = "SELECT uidPatients, emailPatients FROM patients";
  $result = $conn-> query($sql);

  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
      echo "<tr><td>". $row["uidPatients"] . "</td><td>" . $row["emailPatients"] . "</td></tr>";
    }
    echo "</table>";
  }
  else {
    echo "No results";
  }
$conn-> close();
   ?>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td><button class="button button1">Delete</button></td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td><button class="button button1">Delete</button></td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td><button class="button button1">Delete</button></td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td><button class="button button1">Delete</button></td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td><button class="button button1">Delete</button></td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td><button class="button button1">Delete</button></td>
  </tr>
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
