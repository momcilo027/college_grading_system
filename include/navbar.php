<?php
require_once("header.php");
require_once("backend/database.php");

$_SESSION['user'] = $_GET['username'];
$_SESSION['password'] = $_GET['pw'];
if(isset($_SESSION['user'])){
  $username = $_SESSION['user'];
  $password = $_SESSION['password'];
}else{
  header("Location: home.php");
}
$theuser = find_out($username);
if(isset($_POST['logout'])){
  session_destroy();
  header("Location: home.php");
}
?>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top text-center nb justify-content-center">
     <a class="navbar-brand" href="page_search.php?username=<?php echo $username; ?>&pw=<?php echo $password; ?>">COLLEGE</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="<?php
                 if($theuser == 10){
                   echo "profile_prof.php?username=".$username."&pw=".$password;
                 }elseif($theuser == 20){
                   echo "profile_stud.php?username=".$username."&pw=".$password;
                 }else{
                   echo "page_home.php";
                 } ?>">PROFILE</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" href="page_aos.php?username=<?php echo $username; ?>&pw=<?php echo $password; ?>">AOS</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" href="page_profs.php?username=<?php echo $username; ?>&pw=<?php echo $password; ?>">PROFESSORS</a>
             </li>
         </ul>
         <b class="mr-3 wtxt"><?php echo $_SESSION['user']; ?></b>
         <form class="" action="" method="post">
           <button type="submit" class="btn btn-dark lout" name="logout"><i class="fas fa-sign-out-alt"></i></button>
         </form>
     </div>
 </nav>
