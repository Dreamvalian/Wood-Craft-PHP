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
        <button type="submit" onclick="handleClick()">
          Order now
        </button>
      </div>

      <div class="right-hero">
        <figure>
          <img src="./assets/images/wood-1.png" alt="hero-content-1" class="hero-image" />
        </figure>
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
        <div class="testimony-content">
          <h3>"</h3>
          <span>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            <br />
            Qui tenetur fuga fugit vero commodi voluptatibus,
            <br />
            sequi repellat tempora amet molestias voluptatum labore optio,
            <br />
            repellendus quo atque aspernatur est nobis minima?
          </span>

          <h3>"</h3>
          <span>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            <br />
            Qui tenetur fuga fugit vero commodi voluptatibus,
            <br />
            sequi repellat tempora amet molestias voluptatum labore optio,
            <br />
            repellendus quo atque aspernatur est nobis minima?
          </span>
        </div>
      </div>
    </section>


  </main>
</body>

<?php

@include('./components/Footer.php')

?>

</html>