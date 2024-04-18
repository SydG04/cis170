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

  <?php
  require_once("php/footer.php");
  ?>
</body>

</html>