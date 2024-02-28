<?php
require_once("php/header.php");
?>
<main>
  <section class="login-box">
    <!--<section class="image-box">-->
    <aside class="login-image">
      <img src="Images/Stack%20of%20books.png" alt="Stack of books" class="stack_of_books" />
    </aside>
    <!-- </section> -->
    <section class="login">
      <form id="login-form" method="get" name="contact" class="contact-inform form">
        <h1 class="welcome-back">WELCOME BACK!</h1>

        <div class="form-control">
          <input id="email" type="email" name="email" class="form-input" placeholder="none" />
          <label for="email" class="form-label">Email</label>
        </div>

        <div class="form-control password-box">
          <input id="password" type="password" name="password" class="form-input" placeholder="none" />
          <label for="password" class="form-label">Password</label>
          <button id="showPasswordBtn" aria-label="show password">
            <img src="assets\Images\svgs\visibility.svg" alt="visible icon">
          </button>
        </div>

        <section class="remember-me-container">
          <label class="check-container">
            <input type="checkbox" class="remember-me" />
            Remember Me
            <span class="checkmark"></span>
          </label>
        </section>

        <button id="loginpage-button">Login</button>
        <p class="not-a-member">
          Not a member?
          <u>
            <a href="createaccount.php" class="sign-up-link" id="sign-up">Sign Up
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