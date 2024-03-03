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
    <section class="allbooks">
      <!--1st book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/1984.jpg" alt="1984" class="Books"></a>
        </div>
        <div class="book-inside"></div>
        <div class="label_container">
          <span class="label classic">Classic</span>
          <span class="label dystopian">Dystopian</span>
          <span class="label sci-fi">Sci-fi</span>
        </div>
        <div class="thebook_info">
          <h4>1984</h4>
          <p class="thebook_info_para">George Orwell</p>
        </div>
      </div>
      <!--2nd book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/YN.jpg" alt="Y/N" class="Books"></a>
        </div>
        <div class="label_container">
          <span class="label humor">Humor</span>
          <span class="label thriller">Thriller</span>
        </div>
        <div class="thebook_info">
          <h4>Y/N</h4>
          <p class="thebook_info_para">Esther Yi</p>
        </div>
      </div>
      <!--3rd book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/451.jpg" alt="Fahrenheit 451" class="Books"></a>
        </div>
        <div class="label_container">
          <span class="label dystopian">Dystopian</span>
          <span class="label sci-fi">Sci-fi</span>
        </div>
        <div class="thebook_info">
          <h4>Fahrenheit 451</h4>
          <p class="thebook_info_para">Ray Bradbury</p>
        </div>
      </div>
      <!--4th book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/Yellowface.jpg" alt="Yellowface" class="Books">
        </div>
        <div class="book-inside"></div>
        <div class="label_container">
          <span class="label satire">Satire</span>
          <span class="label mystery">Mystery</span>
          <span class="label thriller">Thriller</span>
        </div>
        <div class="thebook_info">
          <h4>Yellowface</h4>
          <p class="thebook_info_para">R.F. Kuang</p>
        </div>
      </div>
      <!--5th book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/LoveHypothesis.jpg" alt="Lovely Hypothesis" class="Books"></a>
        </div>
        <div class="label_container">
          <span class="label romance">Romance</span>
        </div>
        <div class="thebook_info">
          <h4>The Love Hypothesis</h4>
          <p class="thebook_info_para">Ali Hazelwood</p>
        </div>
      </div>
      <!--6th book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/OOUIL.jpg" alt="One of Us is Lying" class="Books"></a>
        </div>
        <div class="label_container">
          <span class="label mystery">Mystery</span>
          <span class="label ya">YA</span>
          <span class="label thriller">Thriller</span>
        </div>
        <div class="thebook_info">
          <h4>One of Us is Lying</h4>
          <p class="thebook_info_para">Karen M. McManus</p>
        </div>
      </div>
      <!--7th book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/NewKid.jpg" alt="New Kid" class="Books"></a>
        </div>
        <div class="label_container">
          <span class="label gn">Graphic Novel</span>
          <span class="label humor">Humor</span>
          <span class="label ya">YA</span>
        </div>
        <div class="thebook_info">
          <h4>New Kid</h4>
          <p class="thebook_info_para">Jerry Craft</p>
        </div>
      </div>
      <!--8th book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/HeyKiddo.jpg" alt="Hey Kiddo" class="Books"></a>
        </div>
        <div class="label_container">
          <span class="label gn">Graphic Novel</span>
          <span class="label memoir">Memoir</span>
          <span class="label ya">YA</span>
        </div>
        <div class="thebook_info">
          <h4>Hey Kiddo</h4>
          <p class="thebook_info_para">Jarrett J. Krosoczka</p>
        </div>
      </div>
      <!--9th book-->
      <div class="thebook_div">
        <div class="img_div">
          <img src="assets/Images/MNC.jpg" alt="Monday's Not Coming" class="Books"></a>
        </div>
        <div class="label_container">
          <span class="label mystery">Mystery</span>
          <span class="label thriller">Thriller</span>
          <span class="label ya">YA</span>
        </div>
        <div class="thebook_info">
          <h4>Monday's Not Coming</h4>
          <p class="thebook_info_para">Tiffany D. Jackson</p>
        </div>
      </div>
    </section>
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