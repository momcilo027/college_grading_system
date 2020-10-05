<?php
require_once("include/header.php");
require_once('backend/database.php');
if(isset($_POST['login'])){
  $res = check_stud();
  log_in_s();
  session_start();
}else{
  $res = 0;
}
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 wlc">
      <h1>LOG IN</h1>
      <h3 style="color: #B00020;">STUDENT</h3>
    </div>
  </div>
</div>
<div class="container text-center pt-3">
  <div class="row">
    <div class="col-12 pt-5">
      <form class="form" action="" method="post">
        <p class="sgn">username</p>
        <input type="text" name="username" value="">
        <hr style="width: 50%;">
        <p class="sgn">password</p>
        <input type="password" name="password" value="">
        <hr style="width: 50%;">
        <?php if($res == 1): ?>
          <p style="color:red;">incorrect username or password</p>
        <?php endif; ?>
        <button class="btn btn-dark" type="submit" name="login">Log in</button>
      </form>
    </div>
  </div>
</div>
<div class="container text-center mt-3">
  <div class="row">
    <div class="col-12">
      <a class="admn" href="home.php">BACK</a>
    </div>
  </div>
</div>


<?php
require_once("include/footer.php");
 ?>
