<?php
session_start();

if (!isset($_SESSION['uname'])) {
  echo '<meta http-equiv="Refresh" content="0;url=login.php" />';
}

include "config/config.php";
include "config/contact_act.php";
include "views/header.php";

?>

  <div class="betta-content betta-padding" style="margin-top: 20px;">
          <h2><i class="fa fa-link betta-small"></i> Contact Us</h2>
          <hr>
          <?php 
          if (isset($notif)) {
            echo "<div class='betta-animate-fading betta-container betta-padding betta-round betta-blue'>";
            echo $notif;
            echo "</div>";
            echo '<meta http-equiv="Refresh" content="3;url=" />';
          }
          ?>
          <form method="POST" class="betta-container">
            <label>Username : </label>
            <input type="text" name="uname" placeholder="Enter Your Username" value="<?= $_SESSION['uname'] ?>" disabled class="betta-input betta-margin-bottom betta-border">
            <label>Email Address :</label>
            <input type="email" name="email" placeholder="Enter Your Email" required class="betta-input betta-margin-bottom betta-border">
            <label>Messages :</label>
            <textarea name="messages" class="betta-input betta-margin-bottom betta-border" style="resize: none;height: 100px;" placeholder="Enter Your Message" required></textarea>
            <input type="submit" name="contact_us" value="Send Message" class="betta-btn betta-round">
          </form>
  </div>

  
<?php 
include "views/footer.php";
?>