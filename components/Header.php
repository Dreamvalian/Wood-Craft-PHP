<link rel="stylesheet" href="./styles/components/header.css">

<header>
  <nav>
    <a href="index.php" class="site-title">
      <img src="./assets/logo/logo-text.svg" alt="logo" width="96" height="13.64" />
    </a>
    <ul class="nav-header">
      <li>
        <a href="our-product.php" class="nav-item">
          our product
        </a>
      </li>
      <li>
        <a href="about.php" class="nav-item">
          about
        </a>
      </li>
      <li>
        <a href="contact.php" class="nav-item">
          contact us
        </a>
      </li>
      <li>|</li>
      <li class="dropdown">
        <a href="profile.php" class="nav-item dropdown-toggle">
          profile
        </a>
        <ul class="dropdown-menu">
          <li><a href="cart.php">Cart</a></li>
          <li><a href="index.php?logout=1">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get the dropdown toggle elements
      const dropdownToggle = document.querySelectorAll(".dropdown-toggle");

      // Add click event listener to each dropdown toggle
      dropdownToggle.forEach(function(toggle) {
        toggle.addEventListener("click", function() {
          // Toggle the dropdown menu visibility
          const dropdownMenu = this.nextElementSibling;
          dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
        });
      });
    });
  </script>
</header>