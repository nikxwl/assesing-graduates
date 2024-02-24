<title>AGTGT | Change Password</title>
<?php require_once 'header.php'; ?>
<div class="content m-5">
  <div class="login-box d-block m-auto">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Create new </b>Password</a>
      </div>
      <div class="card-body">
        <?php
        if(isset($_GET['user_Id'])) {
        $user_Id = $_GET['user_Id'];
        ?>
        <p class="login-box-msg">Please check your email for a message with your code. Your code is 6 numbers long.</p>
        <form action="processes.php" method="POST">
          <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="New password" name="password" id="password" minlength="8">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <p id="password-message" class="text-bold" style="font-style: italic;font-size: 12px;color: #e60000;"></p>
          
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Confirm new password" name="cpassword" id="cpassword" onkeyup="validate_confirm_password()" minlength="8">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <p id="wrong_pass_alert" class="text-bold" style="font-style: italic;font-size: 12px;color: #e60000;"></p>
          <div class="icheck-primary mt-3">
            <input type="checkbox" id="remember" onclick="showBothPassword()">
            <label for="remember">
              Show password
            </label>
          </div>
          <div class="row">
            <div class="col-12">
              <button class="btn btn-block bg-gradient-primary" type="submit" name="changepassword" id="submit_button">Change password</button>
            </div>
          </div>
        </form>
        <p>
          <a href="login.php">Login</a>
        </p>
        <?php } else { require_once '404.php'; } ?>
      </div>
    </div>
  </div>
</div>
<?php require_once 'footer.php'; ?>
