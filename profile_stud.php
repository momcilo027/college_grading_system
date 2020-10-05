<?php
require_once("include/navbar.php");
$stud = find_stud_by_username($username);
?>

<div class="container text-center studpro mt-3 mb-0">
  <div class="row">
    <div class="col-12">
      <h3><?php echo $username; ?></h3>
    </div>
  </div>
</div>
<div class="container text-center chstud mt-0">
  <div class="col col-12 mb-3 text-right">
    <a class="btn bs mr-5" href="edit_stud.php?id=<?php echo $stud['id']; ?>&username=<?php echo $username; ?>&pw=<?php echo $password; ?>">Edit Profile</a>
  </div>
  <div class="row mt-3 pb-3">
    <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 tbbl pb-3">
      <table class="stud_info">
        <tbody>
          <tr>
            <th>First Name<hr></th>
            <td><?php echo $stud['first_name']; ?><hr></td>
          </tr>
          <tr>
            <th>Parent Name<hr></th>
            <td><?php echo $stud['parent_name']; ?><hr></td>
          </tr>
          <tr>
            <th>Last Name<hr></th>
            <td><?php echo $stud['last_name']; ?><hr></td>
          </tr>
          <tr>
            <th>Birthday<hr></th>
            <td><?php echo $stud['birthday']; ?><hr></td>
          </tr>
          <tr>
            <th>Area of Study<hr></th>
            <td><?php echo $stud['AOS']; ?><hr></td>
          </tr>
          <tr>
            <th>Index no.<hr></th>
            <td><?php echo $stud['UID']; ?><hr></td>
          </tr>
          <tr>
            <th>Status<hr></th>
            <td><?php echo $stud['status']; ?><hr></td>
          </tr>
          <tr>
            <th>AVG. Grade<hr></th>
            <td>9.45<hr></td>
          </tr>
          <tr>
            <th>E-mail<hr></th>
            <td><?php echo $stud['email']; ?><hr></td>
          </tr>
          <tr>
            <th>Phone<hr></th>
            <td><?php echo $stud['phone_number']; ?><hr></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-dark tss">
          <thead>
            <tr>
              <th>Subject NAME</th>
              <th>Year of study</th>
              <th>Grade</th>
              <th>Status</th>
           </tr>
          </thead>
          <tbody>
            <tr>
              <td>Programing</td>
              <td>2.</td>
              <td>7</td>
              <td>P</td>
           </tr>
           <tr>
             <td>Programing</td>
             <td>2.</td>
             <td>7</td>
             <td>P</td>
          </tr>
          <tr>
            <td>Programing</td>
            <td>2.</td>
            <td>7</td>
            <td>P</td>
         </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php
require_once("include/footer.php");
 ?>
