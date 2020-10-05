<?php
require_once("include/navbar.php");
if(!empty($_GET['id'])){
  $id = $_GET['id'];
  $prof = find_proff_by_id($id);
  $prof_name = $prof['first_name']." ".$prof['last_name'];
  $subs = get_subs_by_prof($prof_name);
  if($prof['username'] == $username){
    $edit = 1;
  }else{
    $edit = 2;
  }
}else{
  $id = 0;
  $prof = find_prof_by_username($username);
  $edit = 1;
  $prof_name = $prof['first_name']." ".$prof['last_name'];
  $subs = get_subs_by_prof($prof_name);
}
?>

<div class="container text-center chs mt-3 pb-0">
  <div class="row">
      <div class="col col-12 mb-3 text-right">
        <?php if($edit == 1): ?>
        <a class="btn bp mr-1" href="edit_prof.php?id=<?php echo $prof['id']; ?>&username=<?php echo $username; ?>&pw=<?php echo $password; ?>">Edit Profile</a>
        <a class="btn bps mr-5" href="set_subjects.php?username=<?php echo $username; ?>&pw=<?php echo $password; ?>">Set Your Subjects</a>
        <?php endif; ?>
      </div>
    <div class="col col-lg-5 col-sm-12 col-xs-12 studout mt-0 pt-0 text-right pr-3">
      <div class="mr-5 pr-0">
        <img src="prof_pics/<?php echo $prof['photo']; ?>" alt="" width="250px" height="350px">
      </div>
    </div>
    <div class="col col-lg-7 col-sm-12 col-xs-12 profout mt-0 pt-4 text-left ml-0 pl-0">
      <h1 class="pc"><?php echo $prof['first_name']." ".$prof['last_name']; ?></h1>
      <p class="mb-0">AOS</p>
      <h4 class="pc"><?php echo $prof['title']; ?></h4>
      <p class="mb-0">E-mail</p>
      <h4 class="pc"><?php echo $prof['email']; ?></h4>
      <p class="mb-0">Phone</p>
      <h4 class="pc"><?php echo $prof['phone_number']; ?></h4>
      <p class="mb-0">Room No.</p>
      <h4 class="pc"><?php echo $prof['room_number']; ?></h4>
    </div>
  </div>
  <?php if(is_object($subs)): ?>
    <div class="table-responsive">
      <table class="table table-dark tsp">
        <thead>
          <tr>
            <th>Subject NAME</th>
            <th>Year of study</th>
         </tr>
        </thead>
        <tbody>
          <?php foreach($subs as $res=>$value): ?>
            <tr>
              <td><?php echo $value['name']; ?></td>
              <td><?php echo $value['year_of_study']; ?></td>
           </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <div class="text-center pb-5">
      <h1>NO SUBJECTS ASIGNED</h1>
    </div>
  <?php endif; ?>
</div>


<?php
require_once("include/footer.php");
 ?>
