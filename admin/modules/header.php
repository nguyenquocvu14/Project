<!-- <p>header admin</p> -->
<?php
//dang xuat khoi login

if (isset($_GET['action_login']) == 'dangxuat') {
  unset($_SESSION['dangnhap']);
  header("Location:login.php");
}

?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">


    <li class="nav-item d-none d-sm-inline-block"><a class="nav-link" href="index.php?action_login=dangxuat">Đăng Xuất
        <?php if (isset($_SESSION['dangnhap'])) {
          echo $_SESSION['dangnhap'];
        } ?></a></li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->

</nav>