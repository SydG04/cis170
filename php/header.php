<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KitBook</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="resources/responsiveNav.css">
    <link rel="stylesheet" href="resources/floatingPlaceholder.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <body>
    <header>
      <h1 id="logo"><a href="index.php" class="logo">KitBook</a></h1>
      <p id="CurrentDeal">
        Get Your First Box for 30% off with the code <strong>TBR</strong> at
        checkout. <a href="login.php" id="join-today">Join Today</a>
      </p>
      <nav class="navbar">
        <ul id="navlist" class="myNavList">
          <li class="hamburger-container">  
            <div class="hamburger-icon" id="icon" onclick="dropDownNav()">
              <div class="icon-1" id="a"></div>
              <div class="icon-2" id="b"></div>
              <div class="icon-3" id="c"></div>
            </div>
          </li>
          <li><a href="allbooks.php">All Books</a></li>
          <li><a href="Buy-a-book-kit.php">Buy a Book Kit</a></li>
          <li><a href="#">Our Company</a></li>
          <li><a href="login.php">Log-In/Sign-Up</a></li>
          <li><a href="featuredAuthor.php">Featured Author</a></li>
        </ul>
        <script src="js/responsiveNav.js"></script>
      </nav>
    </header>