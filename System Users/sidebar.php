<?php
  require_once '../config.php';
  if(isset($_SESSION['user_Id']) && isset($_SESSION['login_time'])) {
    $id = $_SESSION['user_Id'];
    $users = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$id'");
    $row = mysqli_fetch_array($users);
    $logged_in_user_type = $row['user_type'];

    if($row['user_type'] == 0) {
      $title = 'Administrator';
    } elseif($row['user_type'] == 1) {
      $title = 'Evaluator';
    } elseif($row['user_type'] == 2) {
      $title = 'Alumni Officer';
    } elseif($row['user_type'] == 3) {
      $title = 'Department Secretary';
    } else {
      $title = 'Alumni';
    }

    $login_time = $_SESSION['login_time'];
    // RECORD TIME LOGGED IN TO BE USED IN AUTO LOGOUT - CODE CAN BE FOUND ON ../INCLUDES/FOOTER.PHP
    $_SESSION['last_active'] = time();
    require_once '../includes/header.php';
    require_once 'announcement_add.php'; 
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="dashboard.php" class="brand-link">
    <img src="../images/alumnilogo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AGTGT</span>
    <br>
    <span class="text-sm ml-5 font-weight-light mt-2">&nbsp;&nbsp;Sample Address</span>
  </a>
  
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> -->
    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php
          if($row['user_type'] === '0') {
            include 'sidebar_admin.php';
          } elseif($row['user_type'] === '1') {
            include 'sidebar_evaluator.php';
          } elseif($row['user_type'] === '2') { 
        ?>
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="log_history.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'log_history.php') ? 'active' : ''; ?>">
                <i class="fas fa-list-alt"></i>
                <p>&nbsp;&nbsp; Login history</p>
              </a>
            </li>

        <?php } elseif($row['user_type'] === '3') { ?>

            <li class="nav-item">
              <a href="dashboard.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="log_history.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'log_history.php') ? 'active' : ''; ?>">
                <i class="fas fa-list-alt"></i>
                <p>&nbsp;&nbsp; Login history</p>
              </a>
            </li>

        <?php } else { ?>

            <li class="nav-item">
              <a href="survey.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'survey.php') ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-question-circle"></i>
                <p>Survey Questionnaire</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="log_history.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'log_history.php') ? 'active' : ''; ?>">
                <i class="fas fa-list-alt"></i>
                <p>&nbsp;&nbsp; Login history</p>
              </a>
            </li>

        <?php } ?>
      </ul>
    </nav>
  </div>
</aside>
<?php
  } else {
    header('Location: ../login.php');
  }
?>