<?php
include "config.php";
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: {$hostname}/admin/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel</title>
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div id="header-admin">
    <div class="container">
      <div class="admin-header-inner">
        <!-- Left: Logo/Title -->
        <div class="admin-logo">
          <h1 align=center>Just In Times</h1>
        </div>

        <!-- Right: User Info -->
        <div class="admin-user">
          <i class="fa fa-user"></i>
          <span>Welcome <?php echo $_SESSION["username"]; ?></span>
          <a href="logout.php" class="logout-btn">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <div id="admin-menubar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="admin-menu">
            <li>
              <a href="post.php">Post</a>
            </li>
            <?php
            if ($_SESSION["user_role"] == '1') {
            ?>
              <li>
                <a href="category.php">Category</a>
              </li>
              <li>
                <a href="users.php">Users</a>
              </li>
              <li>
                <a href="settings.php">Settings</a>
              </li>
              <li>
                <a href="logout.php" class="logout-btn">Logout</a>
              </li>

            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /Menu Bar -->