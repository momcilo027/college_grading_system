<?php
require_once("include/header.php");
require_once('backend/database.php');
if(isset($_POST['signup'])){
  register();
}
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 wlca">
      <h1>SIGN UP</h1>
      <h3>USERS</h3>
    </div>
  </div>
</div>
<div class="container text-center pt-3">
  <div class="row">
    <div class="col-12">
      <form class="form" action="" method="post">
        <div class="wlc">
          <input type="radio" name="user" value="prof"> PROFFESOR <br>
          <input type="radio" name="user" value="stud" checked> STUDENT
        </div>
        <p class="sgn">First name</p>
        <input type="text" name="fname" value="">
        <hr style="width: 50%;">
        <p class="sgn">Last name</p>
        <input type="text" name="lname" value="">
        <hr style="width: 50%;">
        <p class="sgn">Username</p>
        <input type="text" name="username" value="">
        <?php echo "<p>".$message."</p>"; ?>
        <hr style="width: 50%;">
        <p class="sgn">Password</p>
        <input type="password" name="password" value="">
        <hr style="width: 50%;">
        <button class="btn btn-dark" type="submit" name="signup">Sign up</button>
      </form>
    </div>
  </div>
</div>
<div class="container text-center mt-3">
  <div class="row">
    <div class="col-12">
      <a class="admn" href="page_home.php">BACK</a>
    </div>
  </div>
</div>


<?php
require_once("include/footer.php");
 ?>
