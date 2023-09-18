<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php appName(); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


  <!-- Custom Assets 

  <link rel="stylesheet" href="<?php //echo FRONTEND_ASSET . 'css/profile.css'; 
                                ?>">
-->
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
    body {
      background-color: #fffff2;
    }
  </style>
</head>

<body>
  <!-- round logo -->
  <div class="jumbotron text-center" style="margin-bottom:0; background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); ">
      <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="rounded" alt="Cinque Terre" height="100" align="left">

      <?php if ($user->isLoggedIn()) : ?>
        <h3 align="right">Hello, <?php echo $user->data()->name; ?></h3>
        <ul align="right" class="navbar-nav ml-auto">
          <li class="nav-item">
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
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="register.php">
              <span class="glyphicon glyphicon-user"></span> Register
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <span class="glyphicon glyphicon-log-in"></span> Log-in
            </a>
          </li>
        </ul>
      <?php endif; ?>
    </div>