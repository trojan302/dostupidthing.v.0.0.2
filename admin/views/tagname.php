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