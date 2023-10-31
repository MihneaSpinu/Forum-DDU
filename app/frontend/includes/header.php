<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php appName(); ?></title>
  <!-- Find ../../../../Img/ using php -->
  <link rel="shortcut icon" href="<?php echo FRONTEND_ASSET . 'Img/LogoTing.png'; ?>" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo FRONTEND_ASSET . 'css/style.css'; ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- <div class="jumbotron header py-3 px-3"> -->
  <header class="d-flex align-items-center justify-content-center justify-content-md-between py-3">
    <div class="col-md-auto ml-5">
      <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img class="bi" src="<?php echo FRONTEND_ASSET . 'Img/LogoTitle.png'; ?>" type="image/png" height="150" role="img">
      </a>
    </div>

    <div class="col-md-auto mr-5">
        <div class="my-auto text-right"> <?php if ($user->isLoggedIn()) : ?> <h3 class="ml-auto" style="color: white;">Hello, <?php echo $user->data()->name; ?></h3>
            <ul class="navbar-nav">
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
            <a type="button" class="btn btn-outline-primary me-2" href="login.php">Login</a>
            <a type="button" class="btn btn-primary" href="register.php">Sign-up</a>
          <?php endif; ?>
        </div>
      </div>
  </header>