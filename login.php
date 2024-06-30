<?php
require_once("php/header.php");
session_start();
?>
<main>
  <section class="login-box">
    <!--<section class="image-box">-->
    <aside class="login-image">
      <img src="assets/Images/Stack%20of%20books.png" alt="Stack of books" class="stack_of_books" />
    </aside>
    <!-- </section> -->
    <section class="login">
      <form id="login-form" method="post" action="private/loggedIn.php" name="contact" class="contact-inform form">
        <h1 class="welcome-back">WELCOME BACK!</h1>
        <!-- !This piece of code was taken from: https://phppot.com/php/php-login-form/-->
          <?php
          if (isset($_SESSION["errorMessage"])) {
          ?>
          <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
          <?php
              unset($_SESSION["errorMessage"]);
            }
          ?>
        <div class="form-control">
          <input id="email" type="email" name="email" class="form-input" placeholder="none" />
          <label for="email" class="form-label">Email</label>
        </div>

        <div class="form-control password-box">
          <input id="password" type="password" name="password" class="form-input" placeholder="none" />
          <label for="password" class="form-label">Password</label>
          <button id="showPasswordBtn" aria-label="show password" onclick="showPassword(event)">
            <img src="assets/svgs/visibility.svg" alt="visible icon" id="visibilityIcon">
          </button>
          <script src="js/signupValidate.js"></script>
          <script src="js/passwordVisibility.js"></script>
        </div>

        <!--Forgot Password ;)-->
        <div class="forgot-password">
          <a href="#" class="forgot-password-link">Forgot Password?</a>
        </div>

        <section class="remember-me-container">
          <label class="check-container">
            <input type="checkbox" class="remember-me" />
            Remember Me
            <span class="checkmark"></span>
          </label>
        </section>
        <input type="submit" id="loginpage-button" value="Login">
        <p class="not-a-member">
          Not a member?
          <u>
            <a href="signup.php" class="sign-up-link" id="sign-up">Sign Up
            </a>
          </u>
        </p>
      </form>
    </section>
  </section>
</main>
<?php
require_once("php/footer.php");
?>
</body>

</html>