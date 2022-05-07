<header class="header">

   <div class="flex">

      <a href="#" class="logo">foodies</a>

      <nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
      </nav>

      <?php
      @include 'config.php';

      #le problem kan 8na psq table cart matexistich aw idir die direct l code li kayen ta7t hadik die ga3 maytexecutach

      #$select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed (cart table)');
      #$row_count = mysqli_num_rows($select_rows);

      ?>

      <!-- zedt na7it $row_count psq commentit8a l fo9 dert num -->
      <a href="cart.php" class="cart">cart <span><?php echo 3 /*$row_count*/; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>