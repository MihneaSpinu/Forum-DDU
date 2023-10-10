<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <form class="form-inline mx-auto my-2 my-lg-0 d-lg-none" action="search.php" method="GET">
      <div class="input-group">
        <input class="form-control" type="text" name="search" placeholder="Search">
      </div>
    </form>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="forum.php">Forums</a>
          <div class="dropdown-menu bg-dark">
            <a class="dropdown-item" href="forum.php">Finite Abys</a>
            <a class="dropdown-item" href="forum.php">Mod Workshop</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link webshop" href="webshop.php">Webshop</a>
        </li>
      </ul>

      <form class="form-inline mx-auto d-lg-block d-none" action="search.php" method="GET">
        <div class="input-group">
          <input class="form-control" type="text" name="search" placeholder="Search">
        </div>
      </form>
      <ul class="navbar-nav d-none d-lg-block ml-auto">
        <li class="nav-item">
          <a class="nav-link webshop" href="webshop.php">Webshop</a>
        </li>
      </ul>
    </div>
  </div>
</nav>