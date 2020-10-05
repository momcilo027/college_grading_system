<?php
require_once("include/navbar.php");
require_once('backend/database.php');
$id = $_GET['id'];
$prof = find_proff_by_id($id);
if(isset($_POST['save'])){
  prof_update($id);
  $username = $_POST['username'];
  header("Location: profile_prof.php?username=".$username."&pw=".$password);
}
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 prof mt-3">
      <h1>PROFESSOR INFORMATION</h1>
    </div>
  </div>
</div>
<div class="container text-center bgprofs">
  <form class="" action="" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-4">
        <img src="prof_pics/<?php echo $prof['photo']; ?>" alt="" width="250px" height="350px">
        <input type="file" name="photo" class="mt-2">
        <button type="submit" name="save" class="btn bpp mt-3">SAVE</button>
      </div>
      <div class="col-8">
        <label for="first_name">First Name</label><br>
        <input type="text" name="first_name" value="<?php echo $prof['first_name']; ?>"><br> <hr>
        <label for="last_name">Last Name</label><br>
        <input type="text" name="last_name" value="<?php echo $prof['last_name']; ?>"><br> <hr>
        <label for="title">Title</label><br>
        <input type="text" name="title" value="<?php echo $prof['title']; ?>"><br> <hr>
        <label for="username">Username</label><br>
        <input type="text" name="username" value="<?php echo $prof['username']; ?>"><br> <hr>
        <label for="password">Password</label><br>
        <input type="password" name="password" value=""><br> <hr>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" value="<?php echo $prof['email']; ?>"><br> <hr>
        <label for="phone_number">Phone number</label><br>
        <input type="text" name="phone_number" value="<?php echo $prof['phone_number']; ?>"><br> <hr>
        <label for="room_number">Room number</label><br>
        <input type="text" name="room_number" value="<?php echo $prof['room_number']; ?>"><br> <hr>
      </div>
    </div>
  </form>
</div>


<?php
require_once("include/footer.php");
 ?>
