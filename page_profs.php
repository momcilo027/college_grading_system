<?php
require_once("include/navbar.php");
require_once('backend/database.php');
$profs = get_profs();
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 wlcp">
      <h1>PROFESSORS</h1>
    </div>
  </div>
</div>
<div class="container text-center bgprofs">
  <div class="row">
    <div class="table-responsive">
      <table class="table table-dark ptbl">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>AOS</th>
            <th>Room No.</th>
         </tr>
        </thead>
        <tbody>
          <?php foreach($profs as $res=>$value): ?>
            <tr onclick="window.location='profile_prof.php?id=<?php echo $value['id']; ?>&username=<?php echo $username; ?>&pw=<?php echo $password; ?>'">
              <td><?php echo $value['first_name']; ?></td>
              <td><?php echo $value['last_name']; ?></td>
              <td><?php echo $value['title']; ?></td>
              <td><?php echo $value['room_number']; ?></td>
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
