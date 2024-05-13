<nav>
    <div class="navbar">
      <div class="logo"></div>
      <ul>
        <li>Home</li>
        <li>Frota</li>
        <li>Contactos</li>
      </ul>
    <div class="button-header">
      <button class="button-nav"><a href="Login.php">Login</a></button>
      <?php
      use FamilyRentCar\BackEnd\App\User;
      if(isset($_SESSION['logged_id'])){
        echo '<button class="button-nav"><a href="Logout.php">Logout</a></button>';
      } else {
        echo '<button class="button-nav" style="visibility: hidden"><a href="Logout.php">Logout</a></button>';
      }
      ?>
      
    </div>
    <!-- <button class="button-nav"><a href="Dashboard/Admin.php">Admin</a></button> -->
    </div>
</nav>