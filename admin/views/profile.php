<!-- Profile -->
  <div class="betta-container" id="Profile" style="margin-top:75px">
    <h1 class="betta-xxxlarge betta-text-red"><b>Profile <i class="fa fa-user"></i></b></h1>
    <hr style="width:30%;border:5px solid black" class="betta-round">
    <div class="betta-content betta-display-container betta-border betta-round">
        <a href="" title="Edit Profile" class="betta-hover-blue betta-large betta-tag betta-round betta-display-topright"><i class="fa fa-pencil"></i></a>
        <div class="betta-center">
      <h1><?php echo $data['contact_title']; ?></h1>
        <span class="betta-small">ZIP : <?php echo $data['contact_zip']; ?> | Email <?php echo $data['contact_email']; ?></span> | <span class="betta-small betta-round betta-tag"><?php echo $data['contact_phone']; ?></span>
        </div>
      <hr>
        <p class="betta-center betta-padding">
          <img src="<?= $base_dir; ?>libs/img/<?= $data['contact_img'] ?>" alt="<?= $data['contact_img'] ?>" style="width: 80%;">
        </p>
        <div class="betta-large betta-justify betta-padding">
            <?php echo $data['contact_description']; ?>
            <?php echo $data['contact_contribute']; ?>
        </div>
    </div>
  </div>