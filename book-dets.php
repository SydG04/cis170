<?php
require_once("private/connection.php");

$dsn = "mysql:host=$host;dbname=$db;";
try {
  $pdo = new PDO($dsn, $user, $pass);
  echo "Connected to DB Successfully.";
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Retrieve the book ID from the URL query parameters
if (isset($_GET["book_id"]) && !empty($_GET["book_id"])) {
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

<?php
require_once("php/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello</title>
</head>

<body>
  <section id="book-details-container">
    <section id="book-container">
      <div class="book-cover-container">
        <img src='https://placehold.it/400x533' alt='placeholder' />
      </div>
      <button class="button">
        Add To Cart
      </button>
    </section>

    <section id="book-details">
      <h1>Book name</h1>
      <h2>Author's Name</h2>
      <div class="ratings">
        <p>
          <span>
            <img src="assets/svgs/star.svg" alt="gray star" class="filled">
            <img src="assets/svgs/star.svg" alt="gray star" class="filled">
            <img src="assets/svgs/star.svg" alt="gray star" class="filled">
            <img src="assets/svgs/star.svg" alt="gray star">
            <img src="assets/svgs/star.svg" alt="gray star">
          </span>3.45/5.00
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate mi sit amet mauris. Dolor sit amet consectetur adipiscing elit duis tristique. Vitae auctor eu augue ut lectus arcu bibendum at varius. Quis ipsum suspendisse ultrices gravida dictum. Praesent semper feugiat nibh sed. Facilisi morbi tempus iaculis urna id volutpat. Blandit turpis cursus in hac habitasse.
        </p>
      </div>
    </section>
  </section>
  <?php
  require_once("php/footer.php");
  ?>
</body>

</html>