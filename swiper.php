<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper</title>
<?php include "components/importantLinks.php"; ?>
  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper {
      margin-left: auto;
      margin-right: auto;
    }
    </style>
</head>
<body>

<?php
 include "helper/database.php"; 
 include "helper/carousel_dao.php";
 $carousel_dao = new CarouselDao($dbconn);
 $carousels = $carousel_dao->get_carousel();
//  print_r($carousels); 
?>
  <!-- Swiper -->

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php
       foreach($carousels as $key => $value){
        ?>
        <div class="swiper-slide">
            <img src="<?=$value["img-src"]?>" alt="">
        </div>
        <?php
      } ?>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  
  <?php include "components/importantScripts.php"; ?>
  <!-- Initialize Swiper -->
  <script>
   var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
       
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
 
  </script>
</body>
</html>