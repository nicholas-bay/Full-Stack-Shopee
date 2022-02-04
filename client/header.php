<style>
  li {
    margin-left: 20px;
    margin-right: 20px;
  }

  #navmenu {
    font-size: 13px;
  }
</style>
<navbar class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container">
    <!-- toggle navmenu when small screen -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu">
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class="collapse navbar-collapse" id='navmenu'>
      <ul class="navbar-nav mx-auto my-auto">
        <!-- home -->
        <li class='nav-item' id='navitem'>
          <a href="#home" class="nav-link">
            <i class="bi bi-house"></i> Home
          </a>
        </li>
        <!-- download -->
        <li class='nav-item' id='navitem'>
          <a href="#download" class="nav-link">
            <i class="bi bi-download"></i> Download
          </a>
        </li>
        <!-- help -->
        <li class='nav-item' id='navitem'>
          <a href="#help" class="nav-link">
            <i class="bi bi-info-circle"></i> Help
          </a>
        </li>
        <!-- search -->
        <li class='nav-item' id='navitem'>
          <a class="nav-link" href="#search">
            <i class="bi bi-search"></i> Search
          </a>
        </li>
        <!-- cart -->
        <li class='nav-item' id='navitem'>
          <a class="nav-link" href="#cart">
            <i class="bi bi-cart"></i> Cart
          </a>
        </li>
        <!-- person -->
        <li class='nav-item' id='navitem'>
          <a href="../client/index.php" class="nav-link">
            <i class="bi bi-person"></i> <?php echo $_SESSION['username']; ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</navbar>