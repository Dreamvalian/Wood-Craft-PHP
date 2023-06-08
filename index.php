<?php
session_start();
@include('./components/Header.php');

include('server/connection.php');

if (!isset($_SESSION['logged_in'])) {
  header('location: pages/login.html');
  exit;
}

if (isset($_GET['logout'])) {
  if (isset($_SESSION['logged_in'])) {
    unset($_SESSION['logged_in']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_address']);
    unset($_SESSION['user_role']);
    header('location: ./pages/login.html');
    exit;
  } else {
    echo "Session logged_in tidak ditemukan.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/dist/output.css">
  <title>Home</title>
</head>

<body>

  <main>
    <section class="hero" id="hero">
      <div class="left-hero">
        <h6>The Best Wood For Customer</h6>
        <h1>Specialty Wood Production</h1>
        <p>
          We proudly introduce our brand, Wood Craft, a company specializing in wood
          and furniture. We are a center of creativity and high quality in producing
          unique and captivating wooden products.
        </p>
        <a href="./our-product.php">
          <button type="submit" onclick="handleClick()">
            Order now
          </button>
        </a>
      </div>

      <div class="right-hero">
        <figure>
          <img src="./assets/images/wood-1.png" alt="hero-content-1" class="hero-image" />
        </figure>
      </div>
    </section>

    <section class="link-to" id="link-to">
      <a href="#forest" class="link-to-forest">
        <h3>Wood Forest</h3>
        <svg width="81" height="40" viewBox="0 0 81 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M61 38.5C71.2173 38.5 79.5 30.2173 79.5 20C79.5 9.78273 71.2173 1.5 61 1.5C50.7827 1.5 42.5 9.78273 42.5 20C42.5 30.2173 50.7827 38.5 61 38.5Z" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M60.3359 24.0479L64.3359 20.0479L60.3359 16.0479" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M1.5 20.5L64.3359 20.0479" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
      <a href="#workshop" class="link-to-workshop">
        <h3>Workshops</h3>
        <svg width="81" height="40" viewBox="0 0 81 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M61 38.5C71.2173 38.5 79.5 30.2173 79.5 20C79.5 9.78273 71.2173 1.5 61 1.5C50.7827 1.5 42.5 9.78273 42.5 20C42.5 30.2173 50.7827 38.5 61 38.5Z" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M60.3359 24.0479L64.3359 20.0479L60.3359 16.0479" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M1.5 20.5L64.3359 20.0479" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
      <a href="#testimony" class="link-to-testimony">
        <h3>Testimonials</h3>
        <svg width="81" height="40" viewBox="0 0 81 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M61 38.5C71.2173 38.5 79.5 30.2173 79.5 20C79.5 9.78273 71.2173 1.5 61 1.5C50.7827 1.5 42.5 9.78273 42.5 20C42.5 30.2173 50.7827 38.5 61 38.5Z" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M60.3359 24.0479L64.3359 20.0479L60.3359 16.0479" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M1.5 20.5L64.3359 20.0479" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </a>
    </section>

    <section class="forest" id="forest">
      <div class="forest-container">
        <h1>Forest Wood Craft</h1>
        <p>WoodCraft has its own wood forest.
          and the quality is maintained until it reaches
          to the customer's hand</p>
      </div>
    </section>

    <section class="workshop" id="workshop">
      <div class="left-workshop">
        <figure>
          <img src="./assets/images/workshop.png" alt="hero-content-2" class="hero-image" />
        </figure>
      </div>
      <div class="right-workshop">
        <h6>Premier Wood Selection for Discerning Customers</h6>
        <h1>Woodcraft Workshop</h1>
        <p>
          Wood Craft Workshop is a dedicated and specialized
          establishment where skilled craftsmen diligently bring
          to life the artistry of woodwork, catering to the unique
          requirements and visions of our esteemed customers.
          With unwavering dedication and expertise,
          our professional workers passionately transform raw wood
          into exquisite creations, showcasing the timeless beauty
          and craftsmanship that define our workshop.
        </p>
      </div>
    </section>

    <section class="testimony" id="testimony">
      <h2>Testimonials</h2>
      <div class="testimony-container">
        <div class="testimony-card">
          <p>"I was amazed by the quality of the wood crafting products. They added an elegant touch to my home decor."</p>
          <p class="name">- John Doe</p>
        </div>

        <div class="testimony-card">
          <p>"The minimalist design of the wood crafting items perfectly matched my aesthetic preferences. I'm extremely satisfied with my purchase."</p>
          <p class="name">- Jane Smith</p>
        </div>

        <div class="testimony-card">
          <p>"The glamorous wood crafting pieces have become the centerpiece of my living room. They truly elevate the ambiance."</p>
          <p class="name">- Alex Johnson</p>
        </div>
      </div>
    </section>

  </main>
</body>

<script src="./script.js"></script>

<?php

@include('./components/Footer.php')

?>

</html>