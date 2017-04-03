<?php
// Includes settings
include('includes/config.php');

// head section <head>
include('includes/head.php');

// Include header code
include('includes/header.php');

// Include Navigation
include ('includes/menu.php');

if(isset($_GET['page']) && $_GET['page'] == "home" || !isset($_GET['page'])) {
  // Include Home Page content
  include ('views/home.php');
}

if(isset($_GET['page']) && $_GET['page'] == "contact") {
  // Include Home Page content
  include ('views/contact.php');
}
// Include footer
include ('includes/footer.php');
?>
