<?php
require_once("include/navbar.php");
require_once('backend/database.php');
$id = $_GET['id'];
$sub = get_sub_by_id($id);
if(isset($_POST['save'])){
  update_subject($id);
  header("Location: set_subjects.php?username=".$username."&pw=".$password);
}
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 prof mt-3">
      <h1>SET SUBJECTS INFO</h1>
    </div>
  </div>
</div>
<div class="container text-center bgprofs">
  <form class="pt-2" action="" method="post">
    <label for="name">Subject Name</label>
    <input type="text" name="name" value="<?php echo $sub['name']; ?>"> <br> <hr>
    <label for="year_of_study">Year of Study</label>
    <input type="text" name="year_of_study" value="<?php echo $sub['year_of_study']; ?>"> <br> <hr>
    <label for="professor">Professor</label>
    <input type="text" name="professor" value="<?php echo $sub['professor']; ?>"> <br>
    <button type="submit" name="save" class="btn bpp">SAVE</button>
  </form>
</div>



<?php
require_once("include/footer.php");
 ?>
