<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php appName(); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo FRONTEND_ASSET . 'css/style.css'; ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


  <!-- Custom Assets 

  <link rel="stylesheet" href="<?php //echo FRONTEND_ASSET . 'css/profile.css'; 
                                ?>">
-->
  <style>

  </style>
</head>

<body>
  <div class="jumbotron header">
    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle">
    <div align="right">

      <?php if ($user->isLoggedIn()) : ?>
        <h3>Hello, <?php echo $user->data()->name; ?></h3>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item profile">
            <a class="nav-link" href="profile.php">
              <span class="glyphicon glyphicon-user"></span> Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span class="glyphicon glyphicon-log-out"></span> Logout
            </a>
          </li>
        </ul>
      <?php else : ?>

        <div class="col-md-3 text-end">
          <a type="button" class="btn btn-outline-primary me-2" href="login.php">Login</a>
          <a type="button" class="btn btn-primary" href="register.php">Sign-up</a>
        </div>
      <?php endif; ?>

    </div>
  </div>