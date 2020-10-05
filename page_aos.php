<?php
require_once("include/navbar.php");
require_once('backend/database.php');
$aos = get_aos();
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 wlc">
      <h1>PROGRAMS</h1>
    </div>
  </div>
</div>
<div class="container text-center bgprofs">
  <div class="row">
    <div class="table-responsive">
      <table class="table table-dark ptbl">
        <thead>
          <tr>
            <th>id</th>
            <th>Program NAME</th>
            <th>Slots</th>
         </tr>
        </thead>
        <tbody>
          <?php foreach($aos as $res=>$value): ?>
            <tr onclick="window.location='page_subjects.php?id=<?php echo $value['id']; ?>&username=<?php echo $username; ?>&pw=<?php echo $password; ?>'">
              <td><?php echo $value['id']; ?></td>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['slots']; ?></td>
           </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php
require_once("include/footer.php");
 ?>
