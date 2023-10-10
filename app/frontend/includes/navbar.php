<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top ">
  <div class="container">
    <div class="row">
      <button class="navbar-toggler col" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="form-inline mx-auto my-2 my-lg-0 d-lg-none col" action="search.php" method="GET">
        <div class="input-group">
          <input class="form-control" type="text" name="search" placeholder="Search">
        </div>
      </form>
    </div>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="row w-75 mx-auto">
        <ul class="navbar-nav col">
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
            <a class="nav-link" href="webshop.php">Webshop</a>
          </li>
        </ul>

        <form class="form-inline mx-auto d-lg-block d-none col" action="search.php" method="GET">
          <div class="input-group">
            <input class="form-control" type="text" name="search" placeholder="Search">
          </div>
        </form>
        <ul class="navbar-nav d-none d-lg-block col">
          <li class="nav-item">
            <a class="nav-link" href="webshop.php">Webshop</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
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
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="webshop.php">Webshop</a>
      </li>
    </ul>
  </div>
</nav>