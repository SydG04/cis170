<?php
  require_once("private/connection.php");
  session_start();
?>

<?php
  require_once("php/header.php");
?>

<main>
  <span class="profile-gray-circle">
    <img src="assets/svgs/profile_icon.svg" alt="profile picture is not set" class="profile-picture">
  </span>


  <h2>
    <?=  $_SESSION["first_name"] .' '. $_SESSION["last_name"]?>
  </h2>
</main>


<?php
  require_once("php/footer.php");
?>