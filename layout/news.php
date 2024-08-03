<?php
include "helper/database.php";
include "helper/news_dao.php";
include "helper/config.php";
$news_dao = new NewsDao($dbconn);
$latestNews = $news_dao->get_news();
// print_r( $latestNews);
?>
<!-- News Section Start -->
<div class="container-fluid about py-5">
    <div class="container py-5 ">
        <div class="text-center section-title py-4">
            <h2 class="fs-8 text-uppercase text-primary ">NEWS</h2>
            <h1 class="display-4 mb-4">Today's Latest News </h1>
            
        </div>
        <?php
        foreach ($latestNews as $key => $value) {
            ?>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5" id="thumbnail">
                    <div class="video">
                        <img src="assets/img/newsreporter.png" class="img-fluid rounded w-200" alt="">
                        
                        <div class="position-absolute rounded border-5 border-top border-start border-white"
                           style="bottom:0; right:0;" >
                            <img src="assets/img/latestNews.png" class="img-fluid rounded " alt="">
                        </div>
                        <button type="button" class="btn btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7 section-title">
                    <!-- <h2 class="fs-8 text-uppercase text-primary " >NEWS</h2>-->
                <h1 class="display-6 mb-4">Here you can read today's latest news and many more.. </h1> 
                    <p class="mb-4"><?= $value["headline"]; ?></p>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-newspaper fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">STATION NEWS</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-industry fa-3x text-primary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">INDUSTRY NEWS</h5>
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="my-4"><?= $value["short_description"]; ?>
                    </p>
                    <p class="mb-4"><?= $value["long_description"]; ?>
                    </p>
                    <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore More</a>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade mb-4" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <video controls autoplay>
                            <source src="<?= $value["video"]; ?>" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- News Section End -->

