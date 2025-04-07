<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="./css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 300px;
      height: 300px;
      position: absolute;
      left: 50%;
      top: 128%;
      margin-left: -150px;
      margin-top: -150px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
    }
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./img/banner/banner-1.jpg);"><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div style="border:2px solid white;;height:30px;margin-top: 10px;text-align:center;background-color: white;"><b>VISHAL MANDAL</b></div></div>

      <div class="swiper-slide" style="background-image:url(./img/banner/banner-2.jpg)"><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div style="border:2px solid white;;height:30px;margin-top: 10px;text-align:center;background-color: white;"><b>NIRAJ</b></div></div>

      <div class="swiper-slide" style="background-image:url(./img/banner/Banner.jpg)"><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div style="border:2px solid white;;height:30px;margin-top: 10px;text-align:center;background-color: white;"><b>RAHUL</b></div></div>

      <div class="swiper-slide" style="background-image:url(./images/nature-4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/nature-5.jpg)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="./js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>
</html>
