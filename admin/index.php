<?php 
include "config/config.php";
include "views/header.php";

$dproject = "SELECT * FROM projects ORDER BY id DESC";
$dpro    = $db->query($dproject);

$contact = $db->query("SELECT * FROM contact");
$data = $contact->fetch_assoc();
?>
  
  <?php 

  include "views/trafic.php"; 
  include "views/project.php";
  include "views/profile.php";
  include "views/contact.php";
  include "views/tagname.php";
  
  ?>

<script>
// Script to open and close sidenav
function betta_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function betta_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>



<?php include "views/footer.php"; ?>