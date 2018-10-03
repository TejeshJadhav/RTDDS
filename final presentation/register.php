<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
  if ($registration->errors) {
    foreach ($registration->errors as $error) {
      echo $error;
    }
  }
  if ($registration->messages) {
    foreach ($registration->messages as $message) {
      echo $message;
    }
  }
}
include('header.php');
?>
    
        <nav class="navbar">
            <div class="navbar-brand">
                <a class="navbar-item">RTDDS</a>
            </div>
            <!--
  <div class="navbar-menu">
    <a class="navbar-item" href="/register.php">Register</a>
  </div>
-->
        </nav>
        <!--<section class="section">-->

        <div class="container is-fluid" style="background-color:#86888A">

            <!-- register form -->
            <form method="post" action="register.php" name="registerform">

                <!-- the user name input field uses a HTML5 pattern check -->
                <div class="field">
                    <label class="label" for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
                    <input class="input" id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                </div>
                <!-- the email input field uses a HTML5 email type check -->
                <div class="field">
                    <label class="label" for="login_input_email">User's email</label>
                    <input class="input" id="login_input_email" class="login_input" type="email" name="user_email" required />
                </div>

                <div class="field">
                    <label class="label" for="login_input_password_new">Password (min. 6 characters)</label>
                    <input class="input" id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                </div>
                <div class="field">
                    <label class="label" for="login_input_password_repeat">Repeat password</label>
                    <input class="input" id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                </div>
                <div class="field">
                    <input class="button" type="submit" name="register" value="Register" />
                </div>
            </form>

            <!-- backlink -->
            <a href="index.php" style="color:white"><---Back to Login Page</a>
    
        <!--    </section>-->
    </div>
    <?php
include('footer.php');
?>
