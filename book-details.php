<?php
  require_once("./private/connection.php");
 // Retrieve the book ID from the URL query parameters
if(isset($_GET["book_id"]) && !empty($_GET["book_id"])) {
  $book_id = $_GET["book_id"];
  // Now you can use $book_id to fetch the details of the selected book from your database
  // Query your database to fetch book details based on $book_id
  // Assuming you're using PDO, fetch the book details
  $stmt = $pdo->prepare("SELECT *, CONCAT(authors.first_name,' ', authors.last_name) as author
  FROM books
  INNER JOIN authors
  ON books.author = authors.author_id
  WHERE book_id = :book_id");
  $stmt->execute(array(":book_id" => $book_id));
  $book = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!--! I may need to make a json file to hold the descriptions adn possibly rating-->
<?php
require_once("./php/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
    echo "<title>{$book['title']}</title>";
  ?>
</head>
<body>

<section id="book-details-container">
  <?php
if ($book) {
  echo"
  <section id='book-container'>
  <div class='book-cover-container'>
    <img src='{$book['cover_url']}' alt='placeholder' style='width:400px; height:auto;' />
  </div>
  <button>
    Add To Cart
  </button>
</section>

<section id='book-details'>
  <h1>{$book['title']}</h1>
  <h2>{$book['author']}</h2>
  <div class='ratings'>
    <p>
      <span>
        <img src='assets/svgs/star.svg' alt='gray star' class='filled'>
        <img src='assets/svgs/star.svg' alt='gray star' class='filled'>
        <img src='assets/svgs/star.svg' alt='gray star' class='filled'>
        <img src='assets/svgs/star.svg' alt='gray star'>
        <img src='assets/svgs/star.svg' alt='gray star'>
      </span> 3.45/5.00
    </p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate mi sit amet mauris. Dolor sit amet consectetur adipiscing elit duis tristique. Vitae auctor eu augue ut lectus arcu bibendum at varius. Quis ipsum suspendisse ultrices gravida dictum. Praesent semper feugiat nibh sed. Facilisi morbi tempus iaculis urna id volutpat. Blandit turpis cursus in hac habitasse.
    </p>
  </div>
</section>
  ";
  }
  
?>
  </section>


<?php
require_once("./php/footer.php");
?>
</body>
</html>

