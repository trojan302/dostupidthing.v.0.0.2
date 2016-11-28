<?php 
include "config/config.php";
include "views/header.php";

// Posting Data
$dproject = "SELECT * FROM projects ORDER BY id DESC";
$dpro    = $db->query($dproject);
?>

	<div class="betta-row-padding betta-content" style="margin-top: 40px;">
  <div class="betta-col l4 m6 s12 betta-small">
    <h2><i class="fa fa-flag"></i> <small>Flag Post</small></h2>
    <hr>
    <?php 
    $flag = $db->query("SELECT * FROM flag");
    while($flag_name = $flag->fetch_assoc()){
    ?>
    <a href="javascript:;" class="betta-tag betta-round betta-margin-bottom" style="text-decoration: none;"><?= $flag_name['flag_name']; ?></a>
    <?php
    }
    ?>
  </div>
  <div class="betta-col l8 m12 s12">
  <h2><code><i class="fa fa-code"></i> <small>Project Shared</small></code></h2>
    <hr>
	<?php
	while ( $project =  $dpro->fetch_assoc() ) {
		$flag = $db->query("SELECT * FROM flag WHERE id= '".$project['id']."' ");
		$flag_name = $flag->fetch_assoc();
	?>
    <div class="betta-col l6 m6 s6 betta-margin-bottom">
      <div class="betta-display-container betta-padding betta-blue betta-round betta-hover-shadow">
        <div class="betta-display-bottomleft betta-blue betta-padding"><i class="fa fa-link"></i> <?= $flag_name['flag_name']; ?></div>
        <p class="betta-center">
          <img src="<?= $base_dir; ?>libs/img/<?= $project['project_img']; ?>" alt="Placeholder" style="width:60%">
        </p>
        <p class="betta-large">
        	<b><?= $project['project_title']; ?></b>
        	<br>
			<span class="betta-tiny">Date : <?= $project['project_date']; ?> | By <?= $project['project_author']; ?></span>
        </p>
        <br>
        <a href="<?= $project['project_link']; ?>" target="_blank" class="betta-display-bottomright betta-btn betta-blue betta-hover-white" style="box-shadow: none;">Get Link <i class="fa fa-share-alt"></i></a>
      </div>
    </div>
	<?php } ?>
  </div>

  </div>

<?php include "views/footer.php"; ?>