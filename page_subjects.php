<?php
require_once("include/navbar.php");
require_once('backend/database.php');
$id = $_GET['id'];
$aos = get_aos_by_id($id);
$num = 1;
$subs1 = get_subs_for_aos($id, $num);
$subs2 = get_subs_for_aos($id, 2);
$subs3 = get_subs_for_aos($id, 3);
$subs4 = get_subs_for_aos($id, 4);
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 wlo">
      <h1><?php echo $aos['name']; ?></h1>
    </div>
  </div>
</div>
<div class="container text-center bgprofs">
  <div class="row">
    <div class="table-responsive">
      <table class="table table-dark ptbl">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Year of Study</th>
            <th>AOS</th>
         </tr>
        </thead>
        <tbody>
          <?php foreach($subs1 as $res=>$value): ?>
            <tr>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['year_of_study']; ?></td>
              <td><?php echo $aos['name']; ?></td>
           </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <table class="table table-dark ptbl">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Proffesor</th>
            <th>Classes per week</th>
         </tr>
        </thead>
        <tbody>
          <?php foreach($subs2 as $res=>$value): ?>
            <tr>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['year_of_study']; ?></td>
              <td><?php echo $aos['name']; ?></td>
           </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <table class="table table-dark ptbl">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Proffesor</th>
            <th>Classes per week</th>
         </tr>
        </thead>
        <tbody>
          <?php foreach($subs3 as $res=>$value): ?>
            <tr>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['year_of_study']; ?></td>
              <td><?php echo $aos['name']; ?></td>
           </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <table class="table table-dark ptbl">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Proffesor</th>
            <th>Classes per week</th>
         </tr>
        </thead>
        <tbody>
          <?php foreach($subs4 as $res=>$value): ?>
            <tr>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['year_of_study']; ?></td>
              <td><?php echo $aos['name']; ?></td>
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
