<nav class="navbar navbar-expand-lg navbar-light bg-danger position-sticky sticky-top">
  <img src="img/logo.png" width="100" alt="logo">
  <button type="button" class="btn btn-primary disabled">Hello Application</button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link text-light mr-5 ml-5" href="?page=home" style="font-family: 'Qahiri', sans-serif; font-size:40px">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="?page=hot_new" style="font-family: 'Qahiri', sans-serif; font-size:40px">hot news</a>
      </li>
    </ul>
    <?php
      require_once('data/data.php');
      $log = login();
      foreach($log as $login):
    ?>
      <?php if($login['login'] == "No"): ?>
        <a class="nav-link" href="?page=login"><button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Admin only">Login</button></a>
      <?php elseif ($login['login'] == "Yes"): ?>
        <a class="nav-link" href="?page=logout"><button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Admin only">Logout</button></a>
        <a href="create_html.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
      <?php endif;?>
    <?php endforeach; ?>
  </div>
</nav>