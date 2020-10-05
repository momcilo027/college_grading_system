<?php
require_once("include/navbar.php");
require_once('backend/database.php');
$id = $_GET['id'];
$stud = find_stud_by_id($id);
$aos = get_aos();
if(isset($_POST['save'])){
  stud_update($id);
  $username = $_POST['username'];
  header("Location: profile_stud.php?username=".$username."&pw=".$password);
}
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 stud mt-3">
      <h1>STUDENT INFORMATION</h1>
    </div>
  </div>
</div>
<div class="container text-center bgprofs">
  <form class="" action="" method="post">
    <div class="row">
      <div class="col-6">
        <label for="first_name">First Name</label><br>
        <input type="text" name="first_name" value="<?php echo $stud['first_name']; ?>"><br> <hr>
        <label for="parent_name">Parent Name</label><br>
        <input type="text" name="parent_name" value="<?php echo $stud['parent_name']; ?>"><br> <hr>
        <label for="last_name">Last Name</label><br>
        <input type="text" name="last_name" value="<?php echo $stud['last_name']; ?>"><br> <hr>
        <label for="username">Username</label><br>
        <input type="text" name="username" value="<?php echo $stud['username']; ?>"><br> <hr>
        <label for="password">Password</label><br>
        <input type="password" name="password" value=""><br> <hr>
        <button type="submit" name="save" class="btn bss mt-3">SAVE</button>
      </div>
      <div class="col-6">
        <label for="birthday">Birthday</label><br>
        <input type="date" name="birthday" value="<?php echo $stud['birthday']; ?>"><br> <hr>
        <label for="AOS">AOS *(always select the right one)</label><br>
        <select name="AOS" id="aos">
          <?php foreach($aos as $res=>$value): ?>
          <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
          <?php endforeach; ?>
        </select>
        <br><hr>
        <label for="UID">UID</label><br>
        <input type="text" name="UID" value="<?php echo $stud['UID']; ?>"><br><hr>
        <label for="status">Status *(always select the right one)</label><br>
        <input type="radio" name="status" value="Active" checked> Active <br>
        <input type="radio" name="status" value="Graduated"> Graduated <br>
        <input type="radio" name="status" value="Quit"> Quit <br>
        <input type="radio" name="status" value="Expelled"> Expelled <br> <hr>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" value="<?php echo $stud['email']; ?>"><br> <hr>
        <label for="phone_number">Phone number</label><br>
        <input type="text" name="phone_number" value="<?php echo $stud['phone_number']; ?>"><br> <hr>
      </div>
    </div>
  </form>
</div>


<?php
require_once("include/footer.php");
 ?>
