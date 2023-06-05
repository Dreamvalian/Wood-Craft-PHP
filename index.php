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

    <section class="forest" id="forest">
      <div class="forest-container">
        <h6>Historical Significance of Forest Wood Craft in Artisan Traditions</h6>
        <h1>Forest Wood Craft</h1>
        <details>
          <summary>The Origins of Forest Wood Craft</summary>
          <p>Forest wood craft originated in ancient civilizations where people relied on the resources available in their surroundings. Forests provided abundant raw materials, including different types of wood, which were utilized to create functional objects, decorative pieces, and artistic expressions.</p>
          <p>The early artisans, deeply connected with nature, developed their woodworking skills and techniques to harness the inherent beauty and strength of wood. They crafted various items like tools, furniture, carvings, and religious artifacts, showcasing their creativity and craftsmanship.</p>
        </details>

        <details>
          <summary>Preservation of Traditional Techniques</summary>
          <p>Over the centuries, forest wood craft has evolved and diversified, adapting to the cultural, social, and technological changes of each era. Despite the introduction of modern machinery and mass production, traditional techniques and craftsmanship have been preserved by dedicated artisans who prioritize authenticity and cultural heritage.</p>
          <p>These skilled artisans meticulously handcraft each piece, paying attention to every detail, and infusing their work with a sense of artistry and individuality. Their expertise is often passed down through apprenticeships or within family lineages, ensuring the continuity of these ancient techniques.</p>
        </details>

        <details>
          <summary>The Artistry of Forest Wood Craft</summary>
          <p>Forest wood craft encompasses a wide range of artistic expressions, each showcasing the unique characteristics of wood and the imagination of the artisans. Carvings, sculptures, and relief works are common forms of artistic woodcraft, where intricate designs and motifs are meticulously chiseled or etched into the wood.</p>
          <p>Furniture making is another prominent aspect of forest wood craft. Artisans skillfully transform blocks of wood into functional pieces that combine beauty and utility. Each piece of furniture is crafted with care, considering the grain patterns, textures, and natural colors of the wood to create harmonious and aesthetically pleasing designs.</p>
        </details>
      </div>
    </section>

    <section class="testimony">
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