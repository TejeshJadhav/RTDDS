<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
  if ($login->errors) {
    foreach ($login->errors as $error) {
      echo $error;
    }
  }
  if ($login->messages) {
    foreach ($login->messages as $message) {
      echo $message;
    }
  }
}
include('header.php');
?>
<nav class="navbar">
  <div class="navbar-brand">
    <a class="navbar-item">sSync</a>
  </div>
  <div class="navbar-menu">
    <a class="navbar-item" href="register.php">Register</a>
  </div>
</nav>
<section class="section">
  <div class="container is-fluid">
    <form method="post" action="index.php" name="loginform">
      <div class="field">
        <label class="label" for="login_input_username">Username</label>
        <input id="login_input_username" class="input" type="text" name="user_name" required />
      </div>
      <div class="field">
        <label class="label" for="login_input_password">Password</label>
        <input id="login_input_password" class="input" type="password" name="user_password" autocomplete="off" required />
      </div>
      <div class="field">
        <input class="button" type="submit"  name="login" value="Log in" />
      </div>

    </form>
  </div>
</section>
<?php
include('footer.php');
?>
