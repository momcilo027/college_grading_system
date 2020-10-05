<?php
require_once("include/header.php");
require_once("backend/database.php");
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 wlc">
      <h1>WELCOME</h1>
      <h3>TO THE COLLEGE GRADE'S SYSTEM</h3>
    </div>
  </div>
</div>
<div class="container text-center chs">
  <div class="row">
    <div class="col-12 pt-3">
      <h1>JOIN AS</h1>
    </div>
    <div class="col col-lg-6 col-sm-12 col-xs-12 profout">
      <div class="prof">
        <a href="login_prof.php">
          <i class="fas fa-book fa-7x"></i>
          <h3>PROFFESOR</h3>
        </a>
      </div>
    </div>
    <div class="col col-lg-6 col-sm-12 col-xs-12 studout">
      <div class="stud">
        <a href="login_stud.php">
          <i class="fas fa-graduation-cap fa-7x"></i>
          <h3>STUDENT</h3>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="container text-center mt-3">
  <div class="row">
    <div class="col-12">
      <a class="admn" href="signup.php">admin</a>
    </div>
  </div>
</div>


<?php
require_once("include/footer.php");
 ?>
