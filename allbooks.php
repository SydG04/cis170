<?php
  require_once("private/connection.php");

  $dsn = "mysql:host=$host;dbname=$db;";
  try {
      $pdo = new PDO($dsn, $user, $pass);
      echo "Connected to DB Successfully.";
  } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

  //joins the author adn book table so that the author name is in the books table
  $results = $pdo->query("SELECT *, CONCAT(authors.first_name,' ', authors.last_name) as author
  FROM books
  INNER JOIN authors
  ON books.author = authors.author_id;");
  //$genres = $pdo -> query("SELECT genre1, genre2, genre3 FROM books")->fetch(PDO::FETCH_ASSOC);

?>

<?php
require_once("php/header.php");
?>
<main>
  <section class="allbooksheading">
    <h1>Look At What We Have!</h1>
  </section>
  <!--
          <section id="filter-and-sort">
            <div id="list1" class="dropdown-check-list" tabindex="100">
              <span class="anchor">
                Filter
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="#432818"><path d="M400-240v-80h160v80H400ZM240-440v-80h480v80H240ZM120-640v-80h720v80H120Z"/></svg>
              </span>
            
              <ul class="genres">
                <li><input type="checkbox" />Classic</li>
                <li><input type="checkbox" />YA (Young Adult)</li>
                <li><input type="checkbox" />Romance</li>
                <li><input type="checkbox" />Fantasy</li>
                <li><input type="checkbox" />Sci-Fi</li>
                <li><input type="checkbox" />Mystery</li>
                <li><input type="checkbox" />Thriller</li>
                <li><input type="checkbox" />Historical</li>
                <li><input type="checkbox" />Contemporary</li>
                <li><input type="checkbox" />Literary</li>
                <li><input type="checkbox" />Adventure</li>
                <li><input type="checkbox" />Horror</li>
                <li><input type="checkbox" />Dystopian</li>
                <li><input type="checkbox" />Graphic</li>
                <li><input type="checkbox" />Memoir</li>
                <li><input type="checkbox" />Biography</li>
                <li><input type="checkbox" />Self-Help</li>
                <li><input type="checkbox" />Nonfiction</li>
                <li><input type="checkbox" />Poetry</li>
                <li><input type="checkbox" />Humor</li>
                <li><input type="checkbox" />Suspense</li>
                <li><input type="checkbox" />Crime</li>
                <li><input type="checkbox" />Paranormal</li>
                <li><input type="checkbox" />Science</li>
                <li><input type="checkbox" />Philosophy</li>
                <li><input type="checkbox" />Satire</li>
              </ul>
              
            </div>
            <script src="js\filter-dropdown.js"></script>

            <div id="sort">
              <label for="sort">Sort by:</label>
              <select name="sort" id="sort">
                <option value="">-- Select an option --</option>
                <option value="alphabet-asc">Alphabetical Order (A-Z)</option>
                <option value="alphabet-desc">Alphabetical Order (Z-A)</option>
                <option value="popularity">Popularity</option>
              </select>
            </div>
          </section>
          -->

  <div class="Normal">
    <!--I will create a database and automate all of this.
    BookID (Primary Key), Title, Author, Genres (max 3), ISBN number (Unique Key), maybe a link to the cover 
  or once i find a API, I can use the isbn to use the API to display a cover. 
I can do this with open library.-->
    <section class="allbooks">
    <?php
      require ("php/genresDictionary.php");
            foreach ($results as $books)
            //! I NEED to find an api for the book cover. The links are temporary. I may just have to do google books :(
            {
              echo "<div class='thebook_div'>
              <div class='img_div'>
                <img src='{$books["cover_url"]}' alt='{$books["title"]}' class='Books'></a>
              </div>
              <div class='book-inside'></div>
              <div class='label_container'>";
              $genres = array($books['genre1'], $books['genre2'], $books['genre3']);

              //start of the foreach loop for the labels
              foreach ($genres as $genre) {
                //convert the abbrv to full name
                if(isset($genresDictionary[$genre]) and (!empty($genre))) {
                  $fullGenreName = $genresDictionary[$genre];
                } 
                // Only display the genre if it's not empty
                if (!empty($genre)) {
                    echo "<span class='label {$genre}'>{$fullGenreName}</span>";
                }
            } //end of the foreach loop inside the echo statement
              
            echo "</div>
              <div class='thebook_info'>
                <h4>{$books["title"]}</h4>
                <p class='thebook_info_para'>{$books["author"]}</p>
              </div>
            </div>";
            }
        ?>
  </div>
  </div>
</main>
<?php
require_once("php/footer.php");
?>
</body>

</html>
<!--Automate this page. Create a JSON file-->
<!--When you have the time, try to reinvent the page by creating a bookshelf-->