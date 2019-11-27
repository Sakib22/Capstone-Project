<?php
$msg = "";
  if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);
  require 'includes/dbh.inc.php';
  $image = $_FILES['image']['name'];
  $text = $_POST['text'];

  $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
  mysqli_query($conn, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Error";
  }
}
 ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="media.css">
<head>
    <title>Uploads</title>
</head>
<body>
  <div id="content">

    <form method="post" action="patientsMedia.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <div>
        <input type="file" name="image">
      </div>
      <div>
        <textarea name="text" cols="40" rows="4" placeholder="Say something about this image..."></textarea>
      </div>
      <div>
        <input type="submit" name="upload" value="Uploa7d File">
      </div>
    </form>
  </div>
</body>
</html>
