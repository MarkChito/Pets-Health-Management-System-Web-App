<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 lazy" data-src="<?= dist_image("Happy Dog") ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                        <h1 class="display-3 text-white mb-3">Make Your Pet Happy</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">
                            Pet health management services for happy and healthy pets
                        </h5>
                        <a href="pricing" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                        <a href="about_us" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 lazy" data-src="<?= dist_image("Cat in Vet") ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                        <h1 class="display-3 text-white mb-3">Pet's Health Care</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">
                            Your pet's care, our peace of mind
                        </h5>
                        <a href="pricing" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                        <a href="about_us" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 lazy" data-src="<?= dist_image("Happy Owner and Pet") ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                        <h1 class="display-3 text-white mb-3">Adopt a Pet</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">
                            Every pet needs a best friend to take care of them
                        </h5>
                        <?php if ($this->session->userdata("primary_key")) : ?>
                            <a href="available_pets" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Adopt Now</a>
                        <?php else : ?>
                            <a href="javascript:void(0)" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4 login_alert">Adopt Now</a>
                        <?php endif ?>
                        <a href="about_us" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">About Us</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">Boarding</span> & <span class="text-secondary">Daycare</span></h1>
            <h5 class="text-muted mb-3">
                Pet boarding & daycare: peace of mind for your furry friends when you're away.
            </h5>
            <p class="mb-4">
                Your pet will have a safe, fun, and relaxing stay at our boarding and daycare facilities. We cater to all types of pets, from dogs and cats to birds and small animals.
            </p>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <ul class="list-inline">
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Best In Industry</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Emergency Services</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12">
                    <ul class="list-inline">
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Pet-Friendly Amenities</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Grooming Services</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Training Classes</h5>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="about_us" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
        </div>
        <div class="col-lg-5">
            <div class="row px-3">
                <div class="col-12 p-0">
                    <img class="img-fluid w-100 lazy" data-src="<?= dist_image("Dog in a Couch") ?>" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100 lazy" data-src="<?= dist_image("Two Dogs") ?>" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100 lazy" data-src="<?= dist_image("Cats in a Couch") ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Our Services</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Pet Boarding</h3>
                    <p>
                        Pet boarding is a safe and reliable option to leave your pet when you're away. Choose a reputable facility with good reviews.
                    </p>
                    <a class="text-uppercase font-weight-bold read_more" href="#" data-toggle="modal" data-target="#read_more_modal" modal_title="Pet Boarding" read_more_services="pet_boarding">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Pet Feeding</h3>
                    <p>
                        Pet feeding is key to your pet's health. Choose the right food, provide fresh water, and do your research.
                    </p>
                    <a class="text-uppercase font-weight-bold read_more" href="#" data-toggle="modal" data-target="#read_more_modal" modal_title="Pet Feeding" read_more_services="pet_feeding">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Pet Grooming</h3>
                    <p>
                        Pet grooming keeps your pet clean, healthy, and happy. There are many services to fit your needs & budget.
                    </p>
                    <a class="text-uppercase font-weight-bold read_more" href="#" data-toggle="modal" data-target="#read_more_modal" modal_title="Pet Grooming" read_more_services="pet_grooming">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Pet Training</h3>
                    <p>
                        Train your pet with a method that fits their learning style. It'll make them more enjoyable & well-behaved.
                    </p>
                    <a class="text-uppercase font-weight-bold read_more" href="#" data-toggle="modal" data-target="#read_more_modal" modal_title="Pet Training" read_more_services="pet_training">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-dog display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Pet Exercise</h3>
                    <p>
                        Pet exercise is essential for their health and well-being. It can help them stay fit, reduce stress, and enjoy life more.
                    </p>
                    <a class="text-uppercase font-weight-bold read_more" href="#" data-toggle="modal" data-target="#read_more_modal" modal_title="Pet Exercise" read_more_services="pet_exercise">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                    <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>
                    <h3 class="mb-3">Pet Treatment</h3>
                    <p>
                        Regular vet checkups are essential to your pet's health. Early detection of potential problems can help prevent serious illness or injury.
                    </p>
                    <a class="text-uppercase font-weight-bold read_more" href="#" data-toggle="modal" data-target="#read_more_modal" modal_title="Pet Treatment" read_more_services="pet_treatment">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Features Start -->
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5">
            <img class="img-fluid w-100 lazy" data-src="<?= dist_image("Girl and a Dog") ?>" alt="">
        </div>
        <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">Why Choose Us?</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">Special Care</span> On Pets</h1>
            <p class="mb-4">
                We offer special care on pets because we understand that your furry friends are part of your family. We want to make sure that they receive the best possible care while they are in our care.
            </p>
            <div class="row py-2">
                <div class="col-6">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Best In Industry</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Emergency Services</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Special Care</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                        <h5 class="text-truncate m-0">Customer Support</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Pricing Plan Start -->
<div class="container-fluid bg-light pt-5 pb-4">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Pricing Plan</h4>
            <h1 class="display-4 m-0">Choose the <span class="text-primary">Best Price</span></h1>
        </div>
        <div class="row">
            <!-- Premium -->
            <div class="col-lg-12 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top lazy" data-src="<?= dist_image("Happy Dogs") ?>" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h1 class="text-white mb-3">Premium</h1>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>1499<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Boarding</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Grooming</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Training</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Nutritional Counseling</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Vaccinations</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <?php if (!$this->session->userdata("primary_key")) : ?>
                            <a href="javascript:void(0)" class="btn btn-danger btn-block p-3 login_alert" style="border-radius: 0;">Book Now</a>
                        <?php else : ?>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#booking_modal" category="Premium Plan" plan_img="<?= dist_image("Cute Cat") ?>" plan_price="1499" class="btn btn-danger btn-block p-3 booking" style="border-radius: 0;">Signup Now</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <!-- Basic -->
            <div class="col-lg-6 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top lazy" data-src="<?= dist_image("Cute Cat") ?>" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 class="text-primary mb-3">Basic</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>499<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Boarding</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Grooming</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Training</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Nutritional Counseling</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Vaccinations</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <?php if (!$this->session->userdata("primary_key")) : ?>
                            <a href="javascript:void(0)" class="btn btn-primary btn-block p-3 login_alert" style="border-radius: 0;">Book Now</a>
                        <?php else : ?>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#booking_modal" category="Basic Plan" plan_img="<?= dist_image("Orange Cat") ?>" plan_price="499" class="btn btn-primary btn-block p-3 booking" style="border-radius: 0;">Signup Now</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <!-- Standard -->
            <div class="col-lg-6 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top lazy" data-src="<?= dist_image("Orange Cat") ?>" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 class="text-secondary mb-3">Standard</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small>999<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                    </div>
                    <div class="card-body text-center p-0">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Boarding</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Grooming</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Training</li>
                            <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Nutritional Counseling</li>
                            <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Vaccinations</li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <?php if (!$this->session->userdata("primary_key")) : ?>
                            <a href="javascript:void(0)" class="btn btn-secondary btn-block p-3 login_alert" style="border-radius: 0;">Book Now</a>
                        <?php else : ?>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#booking_modal" category="Standard Plan" plan_img="<?= dist_image("Happy Dogs") ?>" plan_price="999" class="btn btn-secondary btn-block p-3 booking" style="border-radius: 0;">Signup Now</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->

<!-- Team Start -->
<div class="container mt-5 pt-5 pb-3">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Team Member</h4>
        <h1 class="display-4 m-0">Meet Our <span class="text-primary">Team Member</span></h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top lazy" data-src="dist/img/team-1.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Nicolas, Kathline A.</h5>
                        <i>Group Leader & Documentation</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top lazy" data-src="dist/img/team-2.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Capistrano, Dan Marshall D.</h5>
                        <i>Programmer and Design</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top lazy" data-src="dist/img/team-3.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Perillo, Reynaldo Jr T.</h5>
                        <i>Documentation & Designer</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top lazy" data-src="dist/img/team-4.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Ybañez, Nolito R.</h5>
                        <i>Programmer</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="team card position-relative overflow-hidden border-0 mb-4">
                <img class="card-img-top lazy" data-src="dist/img/team-5.jpg" alt="">
                <div class="card-body text-center p-0">
                    <div class="team-text d-flex flex-column justify-content-center bg-light">
                        <h5>Guarin, Jomar V.</h5>
                        <i>Designer</i>
                    </div>
                    <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid bg-light my-5 p-0 py-5">
    <div class="container p-0 py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Testimonial</h4>
            <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid lazy" data-src="dist/img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>John Smith</h5>
                        <i>Software Engineer</i>
                    </div>
                </div>
                <p class="m-0">
                    I'm so glad I found your pet care business! My dog, Charlie, had a great time at your boarding facility. He was so happy and playful when I picked him up. Thanks for taking such good care of him!
                </p>
            </div>
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid lazy" data-src="dist/img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>David White</h5>
                        <i>Doctor</i>
                    </div>
                </div>
                <p class="m-0">
                    Mittens was pampered and groomed to perfection by your team. She came home looking and feeling her best, and I highly recommend your services to anyone looking for a great pet groomer.
                </p>
            </div>
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid lazy" data-src="dist/img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>Michael Brown</h5>
                        <i>Lawyer</i>
                    </div>
                </div>
                <p class="m-0">
                    I was so relieved to find your pet training service. My dog, Sparky, was a handful before I started training with you. Now, he's a well-behaved member of the family. Thanks for all your help!
                </p>
            </div>
            <div class="bg-white mx-3 p-4">
                <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                    <img class="img-fluid lazy" data-src="dist/img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="ml-3">
                        <h5>Peter Green</h5>
                        <i>Businessman</i>
                    </div>
                </div>
                <p class="m-0">
                    I'm so glad I found your pet vaccination service. I was able to get my dog, Rex, up-to-date on his vaccinations without having to wait in line at the vet. Thanks for making it so easy!
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Pet Blog</h4>
        <h1 class="display-4 m-0"><span class="text-primary">Updates</span> From Blog</h1>
    </div>
    <div class="row pb-3">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top lazy" data-src="dist/img/blog-1.png" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Top 10 Essential Vaccinations for Your Pet's Health</h4>
                    <div class="mb-3">
                        <small class="mr-2 d-block text-truncate"><i class="fa fa-user text-muted"></i> Dr. Olivia Thompson</small>
                        <small class="mr-2 d-block"><i class="fa fa-clock text-muted"></i> July 14, 2023 - 03:06 PM</small>
                        <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_1"></span></small>
                    </div>
                    <p class="truncate-lines text-justify">
                        Welcome to Pets Health Management, where we prioritize the well-being of your furry friends. Vaccinations play a vital role in safeguarding your pet's health and preventing the spread of diseases. In this blog post, we'll discuss the top 10 essential vaccinations that every pet owner should be aware of.
                    </p>
                    <a class="font-weight-bold" href="blogs?blog_id=<?= md5("Top 10 Essential Vaccinations for Your Pet's Health") ?>">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top lazy" data-src="dist/img/blog-2.png" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Common Dietary Mistakes Pet Owners Make and How to Avoid Them</h4>
                    <div class="mb-3">
                        <small class="mr-2 d-block text-truncate"><i class="fa fa-user text-muted"></i> Sarah Johnson</small>
                        <small class="mr-2 d-block"><i class="fa fa-clock text-muted"></i> July 13, 2023 - 12:15 PM</small>
                        <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_2"></span></small>
                    </div>
                    <p class="truncate-lines text-justify">
                        We all want the best for our furry friends, and a vital aspect of their well-being is a balanced and nutritious diet. However, many pet owners unknowingly make dietary mistakes that can impact their pet's health in the long run. In this blog post, we'll highlight some common dietary mistakes pet owners make and provide tips on how to avoid them.
                    </p>
                    <a class="font-weight-bold" href="blogs?blog_id=<?= md5("Common Dietary Mistakes Pet Owners Make and How to Avoid Them") ?>">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card border-0 mb-2">
                <img class="card-img-top lazy" data-src="dist/img/blog-3.png" alt="">
                <div class="card-body bg-light p-4">
                    <h4 class="card-title text-truncate">Understanding Common Pet Illnesses and Their Treatments</h4>
                    <div class="mb-3">
                        <small class="mr-2 d-block text-truncate"><i class="fa fa-user text-muted"></i> Dr. Michael Anderson</small>
                        <small class="mr-2 d-block"><i class="fa fa-clock text-muted"></i> July 12, 2023 - 8:24 AM</small>
                        <small class="mr-2 d-block"><i class="fa fa-comments text-muted"></i> <span id="comment_blog_3"></span></small>
                    </div>
                    <p class="truncate-lines text-justify">
                        As pet owners, it's important to be aware of common illnesses that can affect our furry companions. By understanding these conditions and their treatments, we can take proactive measures to safeguard our pets' health. In this blog post, we'll explore some of the most common pet illnesses and discuss their treatments.
                    </p>
                    <a class="font-weight-bold" href="blogs?blog_id=<?= md5("Understanding Common Pet Illnesses and Their Treatments") ?>">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->