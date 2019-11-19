<?php
  require "frontpage.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <?php
          if (isset($_SESSION['staffId'])) {
            echo '<p class="login-status">Login Successful</p>';
          }
          else {
            echo '<p class="login-status">Logged out</p>';
          }
           ?>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
 ?>
