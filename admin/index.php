<?php 
include "config/config.php";
include "views/header.php";
?>

	<div class="betta-row-padding betta-content" style="margin-top: 80px;">
	   <h2><i class="fa fa-dashboard"></i> Dashboard</h2>
     <hr>
     <div class="betta-row-padding betta-content betta-container">
       <div class="betta-col l4 m4 s4">
         <h3>Hi, Bro Semagat Yah!</h3>
         <hr>
         <nav class="betta-sidenav betta-white" style="width:20%">
            <a href="#">Project</a> 
            <a href="#">Blog</a> 
            <a href="#">Edit Contact</a> 
            <a href="#">Edit Profile</a> 
          </nav>
          <div style="clear: both;"></div>
       </div>
       <div class="betta-col l8 m8 s8">
         <h3>Trafic</h3>
         <hr>
         <span>Project </span>
         <div class="betta-progress-container betta-small">
            <div id="myBar" class="betta-progressbar betta-green" style="width:25%">
              <div class="betta-center betta-text-white">25%</div>
            </div>
          </div>
          <span>Indexs </span>
         <div class="betta-progress-container betta-small">
            <div id="myBar" class="betta-progressbar betta-green" style="width:57%">
              <div class="betta-center betta-text-white">57%</div>
            </div>
          </div>
       </div>
     </div>
  </div>

<?php include "views/footer.php"; ?>