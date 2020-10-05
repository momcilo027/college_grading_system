<?php
require_once("include/navbar.php");
require_once('backend/database.php');
if(isset($_POST['search'])){
  $subs = get_subs_by_name($_POST['search']);
  if($_POST['search'] == 'show all'){
    $subs = get_subs();
  }
}else{
  $subs = get_subs();
}
if(isset($_POST['showall'])){
  $subs = get_subs();
}
if(isset($_POST['save'])){
  set_subjects($_POST['professor']);
}
?>

<div class="container text-center">
  <div class="row">
    <div class="col-12 prof mt-3">
      <h1>SET SUBJECTS</h1>
      <form class="" action="" method="post">
        <input type="text" name="search" placeholder="search...">
      </form>
    </div>
  </div>
</div>
<?php if(is_object($subs)): ?>
  <div class="container text-center bgprofs">
    <form class="" action="" method="post">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-dark subtbl">
            <thead>
              <tr>
                <th>Subject Name</th>
                <th>Year of Study</th>
                <th>Professor</th>
             </tr>
            </thead>
            <tbody>
              <?php foreach($subs as $res=>$value): ?>
                <tr>
                  <td style="width:40%;"><?php echo $value['name']; ?></td>
                  <td style="width:20%;"><?php echo $value['year_of_study']; ?></td>
                  <td style="width:40%;">
                    <?php if($value['professor'] == ''): ?>
                      <a href="set_subject_info.php?id=<?php echo $value['id']; ?>&username=<?php echo $username; ?>&pw=<?php echo $password; ?>">___<i class="fas fa-pen"></i></a>
                    <?php else: ?>
                     <?php echo $value['professor']; ?>
                     <a href="set_subject_info.php?id=<?php echo $value['id']; ?>&username=<?php echo $username; ?>&pw=<?php echo $password; ?>"><i class="far fa-edit ml-3"></i></a>
                   <?php endif; ?>
               </tr>
               <?php endforeach; ?>
            </tbody>
          </table>
          <button type="submit" name="showall" class="btn showall">SHOW ALL</button>
        </div>
      </div>
    </form>
  </div>
<?php else: ?>
  <div class="text-center pt-5">
    <h1 style="color:white;">No match in database.</h1>
    <form class="" action="" method="post">
      <button type="submit" name="showall" class="btn showall">SHOW ALL</button>
    </form>
  </div>
<?php endif; ?>


<?php
require_once("include/footer.php");
 ?>
