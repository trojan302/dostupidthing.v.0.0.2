<?php 
include "config/config.php";
include "views/header.php";

$contact = $db->query("SELECT * FROM contact");
$data = $contact->fetch_assoc();
?>

	<div class="betta-content betta-padding" style="margin-top: 20px;">
        <div class="betta-center">
    	<h1><?php echo $data['contact_title']; ?></h1>
        <span class="betta-small">ZIP : <?php echo $data['contact_zip']; ?> | Email <?php echo $data['contact_email']; ?></span> | <span class="betta-small betta-round betta-tag"><?php echo $data['contact_phone']; ?></span>
        </div>
    	<hr>
    	<p class="betta-center">
        	<img src="<?= $base_dir; ?>libs/img/<?= $data['contact_img'] ?>" alt="<?= $data['contact_img'] ?>" style="width: 80%;">
        </p>
        <div class="betta-large betta-justify">
            <?php echo $data['contact_description']; ?>
            <?php echo $data['contact_contribute']; ?>
        </div>
    </div>

	
<?php 
include "views/footer.php";
?>