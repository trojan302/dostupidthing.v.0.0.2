<?php 
include "config/config.php";
include "config/contact_act.php";
include "views/header.php";

?>

  <div class="betta-content betta-padding" style="margin-top: 20px;">
          <h2><i class="fa fa-link betta-small"></i> Contact Us</h2>
          <hr>
          <?php 
          if (isset($notif)) {
            echo "<div class='betta-container betta-padding betta-round betta-blue'>";
            echo $notif;
            echo "</div>";
          }
          ?>
          <form method="POST" class="betta-container">
            <label>Username : </label>
            <input type="text" name="uname" placeholder="Enter Your Username" required class="betta-input betta-margin-bottom betta-border">
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