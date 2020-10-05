<?php
require_once("include/navbar.php");
if(isset($_POST['search'])){
  $studs = search_students();
  $profs = search_professors();
  $subs = search_subjects();
}else{
  $studs = '';
  $profs = '';
  $subs = '';
}
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 wlc">
      <h1>WELCOME</h1>
      <h3>TO THE COLLEGE GRADE'S SYSTEM</h3>
    </div>
  </div>
</div>
<div class="container text-center srcc pb-5">
  <div class="row">
    <div class="col-12 pt-3 pb-3">
      <h1>SEARCH FOR PROFFESOR OR A STUDENT</h1>
      <form class="" action="" method="post">
        <input type="text" name="search" value=""> <br>
        <button type="submit" name="button" class="btn btn-dark mt-3">SEARCH</button>
      </form>
    </div>
    <?php if(!empty($studs)): ?>
      <div class="table-responsive">
        <table class="table table-dark tsp">
          <thead>
            <tr>
              <th>Name</th>
              <th>Status</th>
              <th>Area of study</th>
           </tr>
          </thead>
          <tbody>
            <?php foreach($studs as $res=>$value): ?>
              <tr>
                <td><?php echo $value['first_name']." ".$value['last_name']; ?></td>
                <td><?php echo $value['status']; ?></td>
                <td><?php echo $value['AOS']; ?></td>
             </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
    <?php if(!empty($profs)): ?>
      <div class="table-responsive">
        <table class="table table-dark tsp">
          <thead>
            <tr>
              <th>Name</th>
              <th>Title</th>
              <th>Room No.</th>
           </tr>
          </thead>
          <tbody>
            <?php foreach($profs as $res=>$value): ?>
              <tr>
                <td><?php echo $value['first_name']." ".$value['last_name']; ?></td>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['room_number']; ?></td>
             </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
    <?php if(!empty($subs)): ?>
      <div class="table-responsive">
        <table class="table table-dark tsp">
          <thead>
            <tr>
              <th>Name</th>
              <th>Year of study</th>
              <th>Area of study</th>
              <th>Professor</th>
           </tr>
          </thead>
          <tbody>
            <?php foreach($subs as $res=>$value): ?>
              <tr>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['year_of_study']; ?></td>
                <td><?php echo $value['aos']; ?></td>
                <td><?php echo $value['professor']; ?></td>
             </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>
</div>


<?php
require_once("include/footer.php");
 ?>
