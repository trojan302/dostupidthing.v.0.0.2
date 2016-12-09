<?php 
session_start();

if (!isset($_SESSION['uname'])) {
  echo '<meta http-equiv="Refresh" content="0;url=login.php" />';
}

include "config/config.php";
include "views/header.php";

// Posting Data
$dpost = "SELECT * FROM post ORDER BY id DESC";
$dp    = $db->query($dpost);
?>

	<div class="betta-row-padding betta-content" style="margin-top: 40px;">
	<?php
	while ( $post =  $dp->fetch_assoc() ) {
		$flag = $db->query("SELECT * FROM flag WHERE id= '".$post['id']."' ");
		$flag_name = $flag->fetch_assoc();
	?>
    <div class="betta-col l4 m4 s6 betta-margin-bottom">
      <div class="betta-display-container betta-padding">
        <div class="betta-display-topleft betta-deep-orange betta-padding"><?= $flag_name['flag_name']; ?></div>
        <img src="./libs/img/wallpaper.png" alt="Placeholder" style="width:100%">
        <p class="betta-large">
        	<b><?= $post['title']; ?></b>
        	<br>
			<span class="betta-tiny">Date : <?= $post['date']; ?> | By <?= $post['author']; ?></span>
        </p>
        <a href="<?= $base_dir; ?>post/<?= $post['id']; ?>" class="betta-round betta-btn-block betta-blue">Read More <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
	<?php } ?>

  </div>

<?php include "views/footer.php"; ?>