    <?php
    require_once("php/header.php");
    ?>
    <main>
      <div class="as-headers">
        <h1>Author Spotlight</h1>
        <p>Discover Literary Gems: Author Spotlight of the Month - From Timeless Classics to Contemporary Voices</p>
      </div>
      <section id="author-spotlight-container">
        <div id="as-details">
          <div id="as-img-container">
            <img src='https://placehold.it/300x450' alt='Featured author photo' id="authors-pic">
          </div>
          <div id="as-facts">
            <h2 id="authors-name">Authors Name</h2>
            <p id="authors-bio">Bio</p>
            <h3>Date Of Birth</h3>
            <p id="authors-dob">DOB</p>
            <h3>Popular Work</h3>
            <p id="popular-work">Popular Work</p>
            <h3>Other Works</h3>
            <ul id="other-work">
            </ul>
            <script src="js/authorEventsAPI.js"></script>
          </div>
        </div>
      </section>
    </main>
    <?php
    require_once("php/footer.php");
    ?>
    </body>

    </html>