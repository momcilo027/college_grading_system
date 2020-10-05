<?php
require_once("include/header.php");
require_once('backend/database.php');

session_destroy();
header("Location: page_home.php");

require_once("include/footer.php");
 ?>
