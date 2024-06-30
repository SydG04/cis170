<?php
require_once("php/header.php");
?>
<main>
  <section class="signup-box">
    <!--rename to sign-up box-->
    <!--<section class="image-box">-->
    <aside class="signup-image">
      <img src="assets/Images/Stack%20of%20books.png" alt="Stack of books" class="stack_of_books" />
    </aside>
    <!-- </section> -->
    <section class="signup">
      <form id="signup-form" method="post" action="private/addAccount.php" class="contact-inform form" novalidate>
        <h1 class="signup-heading">BECOME A MEMBER!</h1>
        <div class="form-control">
          <input id="fname" type="text" name="fname" class="form-input" placeholder="none" />
          <label for="fname" class="form-label">First Name</label>
        </div>

        <div class="form-control">
          <input id="lname" type="text" name="lname" class="form-input" placeholder="none" />
          <label for="lname" class="form-label">Last Name</label>
        </div>

        <div class="form-control">
          <input id="email" type="email" name="email" class="form-input" placeholder="none" />
          <label for="email" class="form-label invalid">Email</label>
        </div>
        <p id="emailStatus"></p>

        <div class="form-control password-box">
          <input id="password" type="password" name="password" class="form-input" placeholder="none" />
          <label for="password" class="form-label">Password</label>
          <button id="showPasswordBtn" aria-label="show password" onclick="showPassword(event)">
            <img src="assets/svgs/visibility.svg" alt="visible icon" id="visibilityIcon">
          </button>
        </div>

        <ul class="pwrequirements">
          <li id="length" class="invalid">At least 8 characters</li>
          <li id="uppercase" class="invalid">
            At least one uppercase letter
          </li>
          <li id="lowercase" class="invalid">
            At least one lowercase letter
          </li>
          <li id="number" class="invalid">At least one number</li>
          <li id="special" class="invalid">
            At least one special character
          </li>
        </ul>

        <section class="remember-me-container">
          <label class="check-container">
            <input type="checkbox" class="remember-me" />
            Remember Me
            <span class="checkmark"></span>
          </label>
        </section>

        <p id="status"></p>
        <input type="submit" id="CA-button" value="Create Account" />

        <p class="a-member">
          Already have an account?
          <u>
            <a href="login.php" class="create-account-link"> Log In </a>
          </u>
        </p>

        <script src="js/signupValidate.js?v=<?php echo time();?>"></script>
        <script src="js/passwordVisibility.js"></script>
      </form>
    </section>
  </section>
</main>

<?php
require_once("php/footer.php");
?>
</body>

</html>

<!--rename this page to signup-->