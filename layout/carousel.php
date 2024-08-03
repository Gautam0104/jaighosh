<?php
include "helper/database.php";
include "helper/carousel_dao.php";
$carousel_dao = new CarouselDao($dbconn);
$carousels = $carousel_dao->get_carousel();
//  print_r($carousels); 
?>
<!-- Carousel Start -->
<div class="container-fluid  carousel-header px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="bullets">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            foreach ($carousels as $key => $value) {
                ?>
                <div class="<?= $value["class"] ?>">
                    <img src="<?= $value["img-src"] ?>" class="d-block w-100" alt="Image">
                </div>
                <?php
            } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->