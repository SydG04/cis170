<?php
require_once("php/header.php");
?>
<main>
  <section class="intro">
    <aside class="welcome_image">
      <img src="assets/Images/Reading.jpg" alt="Book covering a woman's face" class="reading_book" />
    </aside>
    <section class="welcome_text">
      <aside>
        <h1 id="welcome_heading">Welcome!</h1>
        <p class="welcome_para">
          Need a new book without the bookstore trip? Exploring new genres?
          Searching for the ideal gift for a book lover?
        </p>
        <p class="welcome_para">
          No worries! You came to the right spot. This button can help solve
          <i>all</i> those problems.
        </p>
        <div class="btn-container">
          <!--This tag may not be semantic. i will change when I find a better one-->
          <form action="signup.php">
            <button class="btns" id="join-now-btn">Join Now!</button>
          </form>
          <form action="login.php">
            <button class="btns" id="log-in-btn">Log in!</button>
          </form>
        </div>
      </aside>
    </section>
  </section>
  <section id="what-we-do">
    <h2>What We Do For You!</h2>
    <p id="a-note">
      Alongside providing you with the latest releases, for an extra $5, we
      give you what every book needs:
    </p>
    <section class="flex-container">
      <ul id="a-note-list">
        <li class="bookmark">Bookmarks</li>
        <li class="post-it">Post-its</li>
        <li class="highlighter">Highlighters</li>
        <li class="pen">Pens</li>
      </ul>
    </section>
  </section>
</main>
<?php
require_once("php/footer.php");
?>
</body>

</html>