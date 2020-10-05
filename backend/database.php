<?php
$message = "";
function connection(){
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'college';
  if($conn = mysqli_connect($host, $username, $password, $dbname)){
    $message = "Connection succesful.";
  }else{
    $message = "Connection failed : ".mysqli_connect_error();
  }
  return $conn;
}

function register(){
  $connection = connection();
  $user = $_POST['user'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $pw = $_POST['password'];
  if($user == 'prof'){
    $sql = "SELECT * FROM proffesors WHERE username='".$username."' ";
    $result = $connection->query($sql);
    if($row = $result->fetch_assoc() > 0){
      echo "Username is takken.";
    }else{
      $password = password_hash($pw, PASSWORD_DEFAULT);
      $sql = "INSERT INTO proffesors(first_name, last_name, username, password) VALUES('".$fname."', '".$lname."', '".$username."', '".$password."')";
      if($connection->query($sql)){
        $message = "Informations are inserted";
      }else{
        echo "Error : " . $connection->error;
      }
      header("Location: home.php");
    }
  }elseif($user == 'stud'){
    $sql = "SELECT * FROM students WHERE username='".$username."' ";
    $result = $connection->query($sql);
    if($row = $result->fetch_assoc() > 0){
      return $message = "Username is takken.";
    }else{
      $password = password_hash($pw, PASSWORD_DEFAULT);
      $sql = "INSERT INTO students(first_name, last_name, username, password) VALUES('".$fname."', '".$lname."', '".$username."', '".$password."')";
      if($connection->query($sql)){
        $message = "Informations are inserted";
      }else{
        echo "Error : " . $connection->error;
      }
      header("Location: home.php");
    }
  }
}
function log_in_s(){
  $connection = connection();
  $un = '';
  $pw = '';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM students WHERE username='".$username."' ";
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();
  if($row > 0){
    $un = $row['username'];
    $pw = $row['password'];
    if($username == $un && password_verify($password, $pw)){
      $_SESSION['user'] = $_POST['username'];
      header("Location: profile_stud.php?username=".$username."&pw=".$pw);
    }
  }
}
function log_in_p(){
  $connection = connection();
  $un = '';
  $pw = '';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM proffesors WHERE username='".$username."' ";
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();
  if($row > 0){
    $un = $row['username'];
    $pw = $row['password'];
    if($username == $un && password_verify($password, $pw)){
      $_SESSION['user'] = $_POST['username'];
      header("Location: profile_prof.php?username=".$username."&pw=".$pw);
    }
  }
}
function prof_find(){
  $id = $_GET['id'];
  $connection = connection();
  $sql = "SELECT * FROM proffesors WHERE id = '$id'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function prof_update($id){
  $connection = connection();
  $photo_dir = "prof_pics/";
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $room_number = $_POST['room_number'];
  $title = $_POST['title'];
  $subject_id = $_POST['subject_id'];
  if(!empty($_POST['password'])){
    if($_FILES['photo']['name'] !== ""){
      $file_name = $_FILES['photo']['name'];
      $filetmpname = $_FILES['photo']['tmp_name'];
      move_uploaded_file($filetmpname, $photo_dir.$file_name);
      $password_hashed = password_hash($pass_stud, PASSWORD_DEFAULT);
      $sql = "UPDATE proffesors SET first_name='".$first_name."', last_name='".$last_name."', username='".$username."', password='".$password_hashed."',  title='".$title."', email='".$email."', phone_number='".$phone_number."', room_number='".$room_number."', photo='".$file_name."' WHERE id='".$id."'";
      $connection->query($sql);
      return (mysqli_affected_rows($connection) == 1) ? true : false;
    }else{
      $password_hashed = password_hash($pass_stud, PASSWORD_DEFAULT);
      $sql = "UPDATE proffesors SET first_name='".$first_name."', last_name='".$last_name."', username='".$username."', password='".$password_hashed."',  title='".$title."', email='".$email."', phone_number='".$phone_number."', room_number='".$room_number."' WHERE id='".$id."'";
      $connection->query($sql);
      return (mysqli_affected_rows($connection) == 1) ? true : false;
    }
  }else{
    if($_FILES['photo']['name'] !== ""){
      $file_name = $_FILES['photo']['name'];
      $filetmpname = $_FILES['photo']['tmp_name'];
      move_uploaded_file($filetmpname, $photo_dir.$file_name);
      $sql = "UPDATE proffesors SET first_name='".$first_name."', last_name='".$last_name."', username='".$username."', title='".$title."', email='".$email."', phone_number='".$phone_number."', room_number='".$room_number."', photo='".$file_name."' WHERE id='".$id."'";
      $connection->query($sql);
      return (mysqli_affected_rows($connection) == 1) ? true : false;
    }else{
      $sql = "UPDATE proffesors SET first_name='".$first_name."', last_name='".$last_name."', username='".$username."', title='".$title."', email='".$email."', phone_number='".$phone_number."', room_number='".$room_number."' WHERE id='".$id."'";
      $connection->query($sql);
      return (mysqli_affected_rows($connection) == 1) ? true : false;
    }
  }
}
function stud_find(){
  $id = $_GET['id'];
  $connection = connection();
  $sql = "SELECT * FROM students WHERE id = '$id'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function stud_update($id){
  $connection = connection();
  $first_name = $_POST['first_name'];
  $parent_name = $_POST['parent_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $pass_stud = $_POST['password'];
  $birthday = $_POST['birthday'];
  $AOS = $_POST['AOS'];
  $UID = $_POST['UID'];
  $status = $_POST['status'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  if(!empty($_POST['password'])){
    $password_hashed = password_hash($pass_stud, PASSWORD_DEFAULT);
    $sql = "UPDATE students SET first_name='".$first_name."', parent_name='".$parent_name."', last_name='".$last_name."', username='".$username."', password='".$password_hashed."', birthday='".$birthday."', AOS='".$AOS."', UID='".$UID."', status='".$status."', email='".$email."', ";
    $sql.= "phone_number='".$phone_number."' WHERE id='".$id."'";
    $connection->query($sql);
    return (mysqli_affected_rows($connection) == 1) ? true : false;
  }else{
    $sql = "UPDATE students SET first_name = '".$first_name."', parent_name = '".$parent_name."', last_name = '".$last_name."', username='".$username."', birthday='".$birthday."', AOS='".$AOS."', UID='".$UID."', status='".$status."', email='".$email."', ";
    $sql .= "phone_number='".$phone_number."' WHERE id = '".$id."'";
    $connection->query($sql);
    return (mysqli_affected_rows($connection) == 1) ? true : false;
  }
}
function get_aos(){
  $connection = connection();
  $sql = "SELECT * FROM aos";
  $result = $connection->query($sql);
  return $result;
}
function get_profs(){
  $connection = connection();
  $sql = "SELECT * FROM proffesors";
  $result = $connection->query($sql);
  return $result;
}
function find_by_username($username){
  $connection = connection();
  $sql = "SELECT * FROM students WHERE username = '$username'";
  $result = $connection->query($sql);
  $row = mysqli_fetch_assoc($result);
  if(empty($row)){
    $sql1 = "SELECT * FROM proffesors WHERE username = '$username'";
    $result1 = $connection->query($sql1);
    return $row1 = mysqli_fetch_assoc($result1);
  }else{
    return $row = mysqli_fetch_assoc($result);
  }
}
function find_out($username){
  $connection = connection();
  $sql = "SELECT * FROM students WHERE username = '$username'";
  $result = $connection->query($sql);
  $row = mysqli_fetch_assoc($result);
  if(empty($row)){
    return $a = 10;
  }else{
    return $a = 20;
  }
}
function find_proff_by_id($id){
  $connection = connection();
  $sql = "SELECT * FROM proffesors WHERE id = '$id'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function find_stud_by_id($id){
  $connection = connection();
  $sql = "SELECT * FROM students WHERE id = '$id'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function find_stud_by_username($username){
  $connection = connection();
  $sql = "SELECT * FROM students WHERE username = '$username'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function find_prof_by_username($username){
  $connection = connection();
  $sql = "SELECT * FROM proffesors WHERE username = '$username'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function get_aos_by_id($id){
  $connection = connection();
  $sql = "SELECT * FROM aos WHERE id = '$id'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function get_subs_for_aos($id, $year){
  $connection = connection();
  $sql = "SELECT * FROM subjects WHERE aos = '$id' AND year_of_study = '$year'";
  $result = $connection->query($sql);
  return $result;
}
function get_subs(){
  $connection = connection();
  $sql = "SELECT * FROM subjects";
  $result = $connection->query($sql);
  return $result;
}
function get_subs_by_name($name){
  $connection = connection();
  $sql = "SELECT * FROM subjects WHERE name LIKE '%$name%'";
  $result = $connection->query($sql);
  $row = mysqli_fetch_assoc($result);
  if(empty($row))
  {
    return $empt = 1;
  }else{
    return $result;
  }
}
function update_subject($id){
  $connection = connection();
  $name = $_POST['name'];
  $year_of_study = $_POST['year_of_study'];
  $professor = $_POST['professor'];
  $sql = "UPDATE subjects SET name='".$name."', year_of_study='".$year_of_study."', professor='".$professor."' WHERE id='".$id."'";
  $connection->query($sql);
  return (mysqli_affected_rows($connection) == 1) ? true : false;
}
function get_sub_by_id($id){
  $connection = connection();
  $sql = "SELECT * FROM subjects WHERE id = '$id'";
  $result = $connection->query($sql);
  return $row = mysqli_fetch_assoc($result);
}
function get_subs_by_prof($prof_name){
  $connection = connection();
  $sql = "SELECT * FROM subjects WHERE professor='$prof_name'";
  $result = $connection->query($sql);
  $row = mysqli_fetch_assoc($result);
  if(empty($row))
  {
    return $empt = 1;
  }else{
    return $result;
  }
}
function check_prof(){
  $connection = connection();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM proffesors WHERE username='$username'";
  $result = $connection->query($sql);
  $row = mysqli_fetch_assoc($result);
  if($row > 0){
    $user_name = $row['username'];
    $pass_word = $row['password'];
    if($username == $user_name && password_verify($password, $pass_word)){
      $res = 2;
    }else{
      return $log = 1; //something doesn't match
    }
  }return $log = 1; //something doesn't match
}
function check_stud(){
  $connection = connection();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM students WHERE username='$username'";
  $result = $connection->query($sql);
  $row = mysqli_fetch_assoc($result);
  if($row > 0){
    $user_name = $row['username'];
    $pass_word = $row['password'];
    if($username == $user_name && password_verify($password, $pass_word)){
      $res = 2;
    }else{
      return $log = 1; //something doesn't match
    }
  }return $log = 1; //something doesn't match
}
function search_students(){
  $connection = connection();
  $data = $_POST['search'];
  $sql = "SELECT * FROM students WHERE first_name LIKE '%".$data."%' OR last_name LIKE '".$data."%';";
  $result = $connection->query($sql);
  if(!empty($result)){
    return $result;
  }else{
    return $log = ''; //something doesn't match
  }
}
function search_professors(){
  $connection = connection();
  $data = $_POST['search'];
  $sql = "SELECT * FROM proffesors WHERE first_name LIKE '%".$data."%' OR last_name LIKE '".$data."%';";
  $result = $connection->query($sql);
  if(!empty($result)){
    return $result;
  }else{
    return $log = ''; //something doesn't match
  }
}
function search_subjects(){
  $connection = connection();
  $data = $_POST['search'];
  $sql = "SELECT * FROM subjects WHERE name LIKE '%".$data."%'";
  $result = $connection->query($sql);
  if(!empty($result)){
    return $result;
  }else{
    return $log = ''; //something doesn't match
  }
}
?>
