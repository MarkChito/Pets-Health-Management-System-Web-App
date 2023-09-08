<div class="container-fluid bg-light pt-5 pb-4">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Pricing Plan</h4>
            <h1 class="display-4 m-0">Choose the <span class="text-primary">Best Price</span></h1>
        </div>
        <div class="row">
            <!-- Basic -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top lazy" data-src="<?= Dist_Image("Orange Cat") ?>" alt="">
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
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#booking_modal" category="Basic Plan" plan_img="<?= Dist_Image("Orange Cat") ?>" plan_price="499" class="btn btn-primary btn-block p-3 booking" style="border-radius: 0;">Signup Now</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <!-- Standard -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top lazy" data-src="<?= Dist_Image("Happy Dogs") ?>" alt="">
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
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#booking_modal" category="Standard Plan" plan_img="<?= Dist_Image("Happy Dogs") ?>" plan_price="999" class="btn btn-secondary btn-block p-3 booking" style="border-radius: 0;">Signup Now</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <!-- Premium -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <div class="card-header position-relative border-0 p-0 mb-4">
                        <img class="card-img-top lazy" data-src="<?= Dist_Image("Cute Cat") ?>" alt="">
                        <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                            <h3 class="text-danger mb-3">Premium</h3>
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
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#booking_modal" category="Premium Plan" plan_img="<?= Dist_Image("Cute Cat") ?>" plan_price="1499" class="btn btn-danger btn-block p-3 booking" style="border-radius: 0;">Signup Now</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>