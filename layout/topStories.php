 <?php
 include "helper/database.php";
 include "helper/testimonials_dao.php";
 $testimonials_dao = new TestimonialsDao($dbconn);
 $testimonials = $testimonials_dao->get_testimonials();
//print_r($testimonials);

  ?>
        <!-- TopStories Start -->
        <div class="container-fluid testimonial py-4 my-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 section-title" style="max-width: 800px;">
                    <h2 class="fs-8 text-uppercase text-primary">Top Stories</h2>
                    <h1 class="display-4 mb-4 text-white">What People Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php foreach($testimonials as $key => $value){?>
                    <div class="testimonial-item rounded p-4">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex flex-column mx-auto">
                                    <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                        <img src="<?= $value["profilePic"];?>" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="text-center">
                                        <h4 class="mb-2 text-primary"><?= $value["person_name"];?></h4>
                                        <p class="m-0 text-white"><?= $value["profession"];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="position-absolute" style="top: 20px; right: 25px;">
                                    <i class="fa fa-quote-right fa-2x text-secondary"></i>
                                </div>
                                <div class="testimonial-content">
                                    <div class="d-flex mb-4">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="fs-5 mb-0 text-white"><?= $value["message"];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- TopStories End -->