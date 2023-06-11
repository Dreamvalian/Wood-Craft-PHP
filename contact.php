<?php

@include('./components/Header.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/contact.css">
  <link rel="stylesheet" href="/dist/output.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Woodcraft - Contact Us</title>
</head>

<body>
  <section class="contact">
    <div class="container">
      <div class="card-container">
        <div class="contact-heading">
          <h2>Feedback</h2>
          <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
          <div class="contact-form">
            <label for="name" class="">Name</label>
            <input type="text" id="name" name="name" class="">
          </div>
          <div class="contact-form">
            <label for="email" class="">Email</label>
            <input type="email" id="email" name="email" class="">
          </div>
          <div class="contact-message">
            <label for="message" class="">Message</label>
            <textarea id="message" name="message" class=""></textarea>
          </div>
          <a href="mailto:your-email@example.com">
            <button type="submit">Button</button>
          </a>
        </div>
        <div class="contact-social">
          <div class="contact-location">
            <i class="fa-solid fa-location-dot fa-xl">
            </i>
            <p>Jl. Phh. Mustofa No.23, Neglasari,
              Kec. Cibeunying Kaler, Kota Bandung,
              Jawa Barat 40124</p>
          </div>
          <div class="contact-email">
            <i class="fa-solid fa-envelope fa-xl"></i>
            <p>marketing@woodcraft.co</p>
          </div>
          <div class="contact-phone">
            <i class="fa-solid fa-phone fa-xl"></i>
            <p>0812345678</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>

<?php

@include('./components/Footer.php')

?>