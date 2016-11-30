<?php 
include "config/config.php";
include "views/header.php";

$dproject = "SELECT * FROM projects ORDER BY id DESC";
$dpro    = $db->query($dproject);

$contact = $db->query("SELECT * FROM contact");
$data = $contact->fetch_assoc();
?>

<!-- !PAGE CONTENT! -->
<div class="betta-main betta-animate-top" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="betta-container" style="margin-top:80px" id="Trafic">
    <h1 class="betta-jumbo"><b><i class="fa fa-link"></i> Do Stupid Thing</b></h1>
    <h1 class="betta-xxxlarge betta-text-red"><b>Trafic <i class="fa fa-area-chart"></i></b></h1>
    <hr style="width:30%;border:5px solid black" class="betta-round">
  </div>
  
  <!-- Trafic Website-->
  <div class="betta-row-padding">
    <div class="betta-half">
      <span>Views</span>
      <div class="betta-progress-container betta-tiny betta-round">
        <div id="myBar" class="betta-progressbar betta-red betta-round" style="width:25%">
          <div class="betta-center betta-text-white">25%</div>
        </div>
      </div>
      <span>Projects</span>
      <div class="betta-progress-container betta-tiny betta-round">
        <div id="myBar" class="betta-progressbar betta-red betta-round" style="width:55%">
          <div class="betta-center betta-text-white">55%</div>
        </div>
      </div>
      <span>Downloads</span>
      <div class="betta-progress-container betta-tiny betta-round">
        <div id="myBar" class="betta-progressbar betta-red betta-round" style="width:87%">
          <div class="betta-center betta-text-white">87%</div>
        </div>
      </div>
    </div>

    <div class="betta-half">
      <span>Github</span>
      <div class="betta-progress-container betta-tiny betta-round">
        <div id="myBar" class="betta-progressbar betta-red betta-round" style="width:76%">
          <div class="betta-center betta-text-white">76%</div>
        </div>
      </div>
      <span>Stalkers</span>
      <div class="betta-progress-container betta-tiny betta-round">
        <div id="myBar" class="betta-progressbar betta-red betta-round" style="width:99%">
          <div class="betta-center betta-text-white">99%</div>
        </div>
      </div>
      <span>Requests</span>
      <div class="betta-progress-container betta-tiny betta-round">
        <div id="myBar" class="betta-progressbar betta-red betta-round" style="width:69%">
          <div class="betta-center betta-text-white">69%</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Project -->
  <div class="betta-container" id="Project" style="margin-top:75px">
    <h1 class="betta-xxxlarge betta-text-red"><b>Projects <i class="fa fa-github"></i></b></h1>
    <hr style="width:30%;border:5px solid black" class="betta-round">
    <div class="betta-responsive">
      <table class="betta-table betta-bordered betta-striped">
        <tr class="betta-black">
          <th>Project Name</th>
          <th>Project Tag</th>
        </tr>
    <?php
    while ( $project =  $dpro->fetch_assoc() ) {
      $flag = $db->query("SELECT * FROM flag WHERE id= '".$project['id']."' ");
      $flag_name = $flag->fetch_assoc();
    ?>
        <tr>
          <td><?= $project['project_title']; ?></td>
          <td><?= $flag_name['flag_name']; ?> <a href="" class="betta-right betta-hover-text-red"><i class="fa fa-trash"></i></a> <a href="" class="betta-right betta-margin-right betta-hover-text-red"><i class="fa fa-pencil"></i></a></td>
        </tr>
    <?php } ?>
      </table>
      <hr style="width:30%;border:1px solid black" class="betta-round">
      <a href="" class="betta-hover-blue betta-small betta-tag betta-round"><i class="fa fa-plus"></i></a> Create New Project
    </div>
  </div>
  
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

  <!-- Contact -->
  <div class="betta-container" id="Contact" style="margin-top:75px">
    <h1 class="betta-xxxlarge betta-text-red"><b>Contact <i class="fa fa-id-card"></i></b></h1>
    <hr style="width:30%;border:5px solid black" class="betta-round">
    <div class="betta-content betta-display-container betta-border betta-round">
        <a href="" title="Edit Contact" class="betta-hover-blue betta-large betta-tag betta-round betta-display-topright"><i class="fa fa-pencil"></i></a>
        <div class="betta-padding-large">
        <p class="betta-large betta-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consequatur doloribus adipisci placeat sunt consequuntur fuga debitis, sequi non, dolorum aut odio culpa reiciendis ullam eveniet deleniti facilis. Nostrum, quidem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed tenetur rerum sequi perspiciatis perferendis, magnam fugit nulla possimus, libero quaerat nisi, voluptatum porro recusandae odit molestias at quod, eum omnis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum consectetur asperiores doloremque libero labore, hic minima sit, voluptate, error tenetur modi recusandae! Nihil, quasi. Deleniti ratione, voluptatum porro beatae deserunt.
          </p>
          <p class="betta-large betta-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consequatur doloribus adipisci placeat sunt consequuntur fuga debitis, sequi non, dolorum aut odio culpa reiciendis ullam eveniet deleniti facilis. Nostrum, quidem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed tenetur rerum sequi perspiciatis perferendis, magnam fugit nulla possimus, libero quaerat nisi, voluptatum porro recusandae odit molestias at quod, eum omnis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum consectetur asperiores doloremque libero labore, hic minima sit, voluptate, error tenetur modi recusandae! Nihil, quasi. Deleniti ratione, voluptatum porro beatae deserunt.
          </p>
          <p class="betta-large betta-justify">
            <blockquote>
              <?php echo $data['contact_contribute']; ?>
            </blockquote>
          </p>
          <h2><i class="fa fa-link betta-small"></i> Cloning Project</h2>
          <hr>
          <div class="betta-panel betta-leftbar betta-border-black">
            <span class="betta-codespan">$ git clone <i>< trojan-project ></i></span><br>
            <span class="betta-codespan">$ git init</span><br>
            <span class="betta-codespan">$ git add --all</span><br>
            <span class="betta-codespan">$ git commit -m <i>"Your Commit Message"</i></span>
          </div>
          <h2><i class="fa fa-link betta-small"></i> Bug &amp; Error Reporting</h2>
          <hr>
          <address>
            trojanboy302@gmail.com <br>
            bettadevindonesia@gmail.com <br>
            ratnasetya209@gmail.com
          </address>
    </div>
  </div>
  
  <!-- Tag Name -->
  <div class="betta-container" id="Tag" style="margin-top:75px">
    <h1 class="betta-xxxlarge betta-text-red"><b>Tag Name <i class="fa fa-flag"></i></b></h1>
    <hr style="width:30%;border:5px solid black" class="betta-round">
    <div class="betta-container betta-padding">
    <?php 
    $flag = $db->query("SELECT * FROM flag");
    while($flag_name = $flag->fetch_assoc()){
    ?>
    <a href="javascript:;" class="betta-tag betta-round betta-margin-bottom" style="text-decoration: none;"><?= $flag_name['flag_name']; ?></a>
    <?php
    }
    ?>
    <hr>
    <a href="" class="betta-hover-blue betta-small betta-tag betta-round"><i class="fa fa-plus"></i></a> Create New Tag
    </div>
  </div>

<!-- End page content -->
</div>

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