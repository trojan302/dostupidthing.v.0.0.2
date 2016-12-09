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