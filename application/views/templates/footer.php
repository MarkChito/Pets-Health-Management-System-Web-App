    <!-- Footer Start -->
    <div id="footer">
        <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
            <div class="row pt-5">
                <div class="col-lg-6 col-md-12 mb-5">
                    <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">PetsHealth</span>Management</h1>
                    <p class="m-0">
                        Welcome to Pets Health Management, your ultimate resource for ensuring the well-being and vitality of
                        your beloved furry companions. We understand the deep bond you share with your pets, and our mission is
                        to provide you with comprehensive information and guidance to help you navigate the world of pet health.
                        <br><br>
                        At Pets Health Management, we believe that a healthy pet is a happy pet, and we're dedicated to promoting
                        the highest standards of pet care. Whether you're a new pet owner seeking guidance or an experienced
                        caregiver looking for advanced tips, our website is designed to cater to all your pet health needs.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h5 class="text-primary mb-4">Popular Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="<?= base_url(); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                <a class="text-white mb-2" href="about_us"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                                <a class="text-white mb-2" href="services"><i class="fa fa-angle-right mr-2"></i>Services</a>
                                <a class="text-white mb-2" href="pricing"><i class="fa fa-angle-right mr-2"></i>Pricing</a>
                                <a class="text-white mb-2" href="blogs"><i class="fa fa-angle-right mr-2"></i>Blogs</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h5 class="text-primary mb-4">Subscribe to our Newsletter</h5>
                            <form action="server/subscribe_to_news_letter" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0" name="subscribe_name" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0" name="subscribe_email" placeholder="Your Email" required="required" />
                                </div>
                                <div>
                                    <input type="hidden" name="subscribe_current_tab" value="<?= $this->session->userdata("current_tab") ?>">

                                    <button class="btn btn-lg btn-primary btn-block border-0" type="submit" name="subscribe">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">
                        &copy; <a class="text-white font-weight-bold" href="<?= base_url() ?>">Pets Health Management System</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <ul class="nav d-inline-flex">
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="privacy_policy">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="terms">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="faqs">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="help">Help</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- View Profile Picture Modal-->
    <div class="modal fade" id="view_profile_picture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: transparent !important;">
                <img data-src="" class="lazy" id="proof_img_container" alt="" style="text-align: center; width: 100%">
            </div>
        </div>
    </div>

    <!-- About the Developers Modal-->
    <div class="modal fade" id="about_the_developers_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Pet's Health Management System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title text-muted text-bold"><i class="fas fa-bookmark"></i>&nbsp; System Developers</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p><b> Nicolas, Kathline </b> - Group Leader & Documentation</p>
                                    <p><b> Capistrano, Dan Marshall </b> - Programmer & Design</p>
                                    <p><b> Perillo, Reynaldo Tebia </b> - Documentation & Designer</p>
                                    <p><b> Guarin, Jomar </b> - Designer</p>
                                    <p><b> Ybanez Nilito, Jay-Ar </b> - Programmer</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-sm">
                            <strong>Copyright &copy; <span class="getFullYear"></span> <a href="<?= base_url() ?>">Pet's Health Management System</a>.</strong>
                            All rights reserved.
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Login your Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/login" method="post" id="login_form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="login_email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Enter Email" value="<?= $this->session->userdata("email") ? $this->session->userdata("email") : null ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="login_password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Enter Password" value="<?= $this->session->userdata("password") ? $this->session->userdata("password") : null ?>" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="login_remember_me" name="login_remember_me" style="cursor: pointer;" <?= $this->session->userdata("remember_me") ? $this->session->userdata("remember_me") : null ?>>
                                    <label for="login_remember_me" style="cursor: pointer;">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <a href="forgot_password" class="float-right text-danger">Forgot your Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="<?= $this->session->userdata("current_tab") ?>" name="login_current_tab">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="login">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal-->
    <div class="modal fade" id="sign_up_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Create an Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/sign_up" method="post" id="sign_up_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="sign_up_image_display" class="rounded-circle img-bordered-sm lazy" width="150" height="150" data-src="<?= default_user_image(); ?>">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input fileficker" id="sign_up_image" name="sign_up_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="sign_up_image" id="sign_up_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="sign_up_name" class="col-form-label">Name</label>
                                    <input type="text" id="sign_up_name" name="sign_up_name" class="form-control" placeholder="Enter Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="sign_up_rfid_number" class="col-form-label">RFID Number (Optional)</label>
                                    <input type="number" id="sign_up_rfid_number" name="sign_up_rfid_number" class="form-control <?= $this->session->userdata("error_sign_up_rfid_number_is_invalid") ? $this->session->userdata("error_sign_up_rfid_number_is_invalid") : null ?>" placeholder="Enter RFID Number">
                                    <?php if ($this->session->userdata("error_sign_up_rfid_number")) : ?>
                                        <small class="text-danger" id="error_sign_up_rfid_number"><?= $this->session->userdata("error_sign_up_rfid_number") ?></small>

                                        <?php $this->session->unset_userdata("error_sign_up_rfid_number"); ?>
                                        <?php $this->session->unset_userdata("error_sign_up_rfid_number_is_invalid"); ?>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="sign_up_email" class="col-form-label">Email</label>
                                    <input type="email" id="sign_up_email" name="sign_up_email" class="form-control <?= $this->session->userdata("error_sign_up_email_is_invalid") ? $this->session->userdata("error_sign_up_email_is_invalid") : null ?>" placeholder="Enter Email" required>
                                    <?php if ($this->session->userdata("error_sign_up_email")) : ?>
                                        <small class="text-danger" id="error_sign_up_email"><?= $this->session->userdata("error_sign_up_email") ?></small>

                                        <?php $this->session->unset_userdata("error_sign_up_email") ?>
                                        <?php $this->session->unset_userdata("error_sign_up_email_is_invalid") ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="sign_up_password" class="col-form-label">Password</label>
                                    <input type="password" id="sign_up_password" name="sign_up_password" class="form-control" placeholder="Enter Password" required>
                                    <small id="error_sign_up_password" class="d-none"></small>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="sign_up_confirm_password" class="col-form-label">Confirm Password</label>
                                    <input type="password" id="sign_up_confirm_password" name="sign_up_confirm_password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="<?= $this->session->userdata("current_tab") ?>" name="sign_up_current_tab">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="sign_up">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Account Modal -->
    <div class="modal fade" id="update_account_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Update your Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/update_account" method="post" id="update_account_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="update_account_image_display" class="rounded-circle img-bordered-sm lazy" width="150" height="150" data-src="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : default_user_image() ?>">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input fileficker" id="update_account_image" name="update_account_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="update_account_image" id="update_account_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="update_account_name" class="col-form-label">Name</label>
                                    <input type="text" id="update_account_name" name="update_account_name" class="form-control" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" placeholder="Enter Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="update_account_rfid_number" class="col-form-label">RFID Number (Optional)</label>
                                    <input type="number" id="update_account_rfid_number" name="update_account_rfid_number" class="form-control <?= $this->session->userdata("error_update_account_rfid_number_is_invalid") ? $this->session->userdata("error_update_account_rfid_number_is_invalid") : null ?>" placeholder="Enter RFID Number" value="<?= $this->session->userdata("user_rfid_number") ? $this->session->userdata("user_rfid_number") : null ?>">
                                    <?php if ($this->session->userdata("error_update_account_rfid_number")) : ?>
                                        <small class="text-danger" id="error_update_account_rfid_number"><?= $this->session->userdata("error_update_account_rfid_number") ?></small>

                                        <?php $this->session->unset_userdata("error_update_account_rfid_number"); ?>
                                        <?php $this->session->unset_userdata("error_update_account_rfid_number_is_invalid"); ?>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="update_account_email" class="col-form-label">Email</label>
                                    <input type="email" id="update_account_email" name="update_account_email" class="form-control" placeholder="Enter Email" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="update_account_password" class="col-form-label">Password</label>
                                    <input type="password" id="update_account_password" name="update_account_password" class="form-control" placeholder="Enter Password">
                                    <small id="error_update_account_password" class="d-none"></small>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="update_account_confirm_password" class="col-form-label">Confirm Password</label>
                                    <input type="password" id="update_account_confirm_password" name="update_account_confirm_password" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="<?= $this->session->userdata("primary_key") ? $this->session->userdata("primary_key") : null ?>" name="update_account_primary_key">
                        <input type="hidden" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>" name="update_account_current_tab">
                        <input type="hidden" value="<?= $this->session->userdata("user_rfid_number") ? $this->session->userdata("user_rfid_number") : null ?>" name="update_account_old_rfid_number">
                        <input type="hidden" value="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : null ?>" name="update_account_old_image">
                        <input type="hidden" value="<?= $this->session->userdata("user_password") ? $this->session->userdata("user_password") : null ?>" name="update_account_old_password">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="update_account">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Read More Modal -->
    <div class="modal fade" id="read_more_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="read_more_modal_title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-justify px-2" id="read_more_services">
                        <div id="pet_boarding">
                            <p><b>Safe and Comfortable Environment:</b> Your pet will have a safe, comfortable, and fun stay at our boarding facilities. We have spacious rooms with plenty of room for your pet to run and play. We also offer a variety of activities to keep your pet entertained, such as playtime, walks, and training sessions.</p>
                            <p><b>Experienced and Caring Staff:</b> Our staff is experienced and caring, and they are dedicated to providing your pet with the best possible care. They will take the time to get to know your pet and their individual needs.</p>
                            <p><b>Variety of Boarding Packages:</b> We offer a variety of boarding packages to fit your needs, including overnight boarding, extended boarding, and drop-in daycare. We also offer a variety of grooming services, so your pet can look their best when you pick them up.</p>
                        </div>
                        <div id="pet_feeding">
                            <p><b>Appropriate Diet:</b> We will help you choose the right diet for your pet, based on their age, breed, and activity level. We offer a variety of high-quality pet foods, so you can find one that your pet will love.</p>
                            <p><b>Fresh Water:</b> We will make sure that your pet always has access to fresh water. We know that water is essential for your pet's health, so we will never let them go thirsty.</p>
                            <p><b>Nutritional Counseling:</b> We offer nutritional counseling to help you make sure that your pet is getting the nutrients they need to stay healthy. We can help you create a meal plan that is tailored to your pet's individual needs.</p>
                        </div>
                        <div id="pet_grooming">
                            <p><b>Clean and Healthy Coat:</b> We will keep your pet's coat clean and healthy. We will bathe them, brush them, and trim their nails. We will also remove any mats from their fur.</p>
                            <p><b>Free of Parasites:</b> We will remove any parasites from your pet's fur. We know that parasites can be a health hazard for pets, so we take great care to remove them.</p>
                            <p><b>Variety of Grooming Services:</b> We offer a variety of grooming services, so you can find one that fits your needs and budget. We offer everything from a basic bath and brush to a full-service grooming.</p>
                        </div>
                        <div id="pet_training">
                            <p><b>Basic Obedience Commands:</b> We will teach your pet basic obedience commands, such as sit, stay, and come. We will also teach them good manners, such as not jumping up on people or begging for food.</p>
                            <p><b>Custom Training Programs:</b> We offer custom training programs that are tailored to your pet's individual needs. We will work with you to create a program that will help your pet reach their full potential.</p>
                            <p><b>Positive Reinforcement Training:</b> We use positive reinforcement training methods, which means that we reward your pet for good behavior. This is a gentle and effective way to train your pet.</p>
                        </div>
                        <div id="pet_exercise">
                            <p><b>Helps Keep Your Pet Healthy and Fit:</b> Exercise is an important part of keeping your pet healthy and fit. It helps to keep their weight under control, improves their cardiovascular health, and can help to reduce stress.</b>
                            <p><b>Variety of Ways to Exercise Your Pet:</b> There are many different ways to exercise your pet, so you can find an activity that you both enjoy. You can take your pet for walks, play fetch, or go for hikes.</b>
                            <p><b>Helps Reduce Stress:</b> Exercise can help to reduce stress in pets. If your pet is feeling stressed, try taking them for a walk or playing with them. This can help to calm them down and reduce their anxiety.</b>
                        </div>
                        <div id="pet_treatment">
                            <p><b>Vaccinations:</b> We will keep your pet up-to-date on their vaccinations to protect them from preventable diseases.</b>
                            <p><b>Checkups:</b> We will bring your pet in for regular checkups, even if they seem healthy. This will help to catch any potential problems early on and get them treated before they become serious.</b>
                            <p><b>Treatment for Illness or Injury:</b> If your pet becomes ill or injured, we will provide them with the best possible care. We have a team of experienced veterinarians who are dedicated to providing your pet with the highest quality care.</b>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Modal -->
    <div class="modal fade" id="booking_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="read_more_modal_title">Set an Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/booking" method="post">
                    <div class="modal-body">
                        <div class="card border-0">
                            <div class="card-header position-relative border-0 p-0 mb-4">
                                <img class="card-img-top lazy" id="plan_img" alt="" data-src="">
                                <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                    <h3 class="text-danger mb-3" id="selected_plan">Selected Plan</h3>
                                    <h1 class="display-4 text-white mb-0">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">₱</small><span id="plan_price">0</span><small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                                    </h1>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="booking_name" class="col-form-label">Name</label>
                                            <input type="text" id="booking_name" class="form-control" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="booking_email" class="col-form-label">Email</label>
                                            <input type="text" id="booking_email" class="form-control" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="booking_date" class="col-form-label">Appointment Date</label>
                                            <input type="date" name="booking_date" id="booking_date" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="booking_time" class="col-form-label">Appointment Time</label>
                                            <input type="time" name="booking_time" id="booking_time" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="booking_plan" id="booking_plan">
                        <input type="hidden" name="booking_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>">
                        <input type="hidden" name="booking_email" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>">
                        <input type="hidden" name="booking_current_tab" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>">
                        <input type="hidden" name="booking_primary_key" value="<?= $this->session->userdata("primary_key") ? $this->session->userdata("primary_key") : null ?>">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="booking">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register Pet Modal -->
    <div class="modal fade" id="register_pet_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="read_more_modal_title">Register your Pet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/register_pet" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="register_pet_image_display" class="rounded-circle img-bordered-sm lazy" width="150" height="150" data-src="<?= default_user_image() ?>">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input fileficker" id="register_pet_image" name="register_pet_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="register_pet_image" id="register_pet_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_pet_name" class="col-form-label">Pet's Name</label>
                                    <input type="text" class="form-control" id="register_pet_pet_name" name="register_pet_pet_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_species" class="col-form-label">Species (Dog, Cat, etc.)</label>
                                    <input type="text" class="form-control" id="register_pet_species" name="register_pet_species" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_breed" class="col-form-label">Breed</label>
                                    <input type="text" class="form-control" id="register_pet_breed" name="register_pet_breed" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_age" class="col-form-label">Age (Months)</label>
                                    <input type="number" class="form-control" id="register_pet_age" name="register_pet_age" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_weight" class="col-form-label">Weight (KG)</label>
                                    <input type="number" class="form-control" id="register_pet_weight" name="register_pet_weight" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_sex" class="col-form-label">Sex</label>
                                    <select class="custom-select" name="register_pet_sex" id="register_pet_sex" required>
                                        <option value="" disabled selected></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_spayed_neutered" class="col-form-label">Spayed/Neutered</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="In a female animal, “spaying” consists of removing the ovaries or uterus and ovaries. The technical term is ovariectomy or ovariohysterectomy. For a male animal, “neutering” involves the removal of the testicles, and this is known as castration."></i>
                                    <select class="custom-select" name="register_pet_spayed_neutered" id="register_pet_spayed_neutered" required>
                                        <option value="" disabled selected></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="register_pet_current_medications" class="col-form-label">Current Medications (if any)</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="Examples in dogs and cats include penicillin, trimethoprim-sulfa, cephalexin and enrofloxacin. Non-steroidal anti-inflammatories: these common drugs reduce swelling, inflammation, pain and lameness. Examples include carprofen, deracoxib, firocoxib, and meloxicam."></i>
                                    <input type="text" class="form-control" id="register_pet_current_medications" name="register_pet_current_medications" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="register_pet_user_primary_key" value="<?= $this->session->userdata("primary_key") ? $this->session->userdata("primary_key") : null ?>">
                        <input type="hidden" name="register_pet_user_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>">
                        <input type="hidden" name="register_pet_user_image" value="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : null ?>">
                        <input type="hidden" name="register_pet_user_current_tab" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="register_pet">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Pet Modal -->
    <div class="modal fade" id="edit_pet_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="read_more_modal_title">Register your Pet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/edit_pet" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="edit_pet_image_display" class="rounded-circle img-bordered-sm lazy" width="150" height="150" data-src="<?= default_user_image() ?>">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input fileficker" id="edit_pet_image" name="edit_pet_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="edit_pet_image" id="edit_pet_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_pet_name" class="col-form-label">Pet's Name</label>
                                    <input type="text" class="form-control" id="edit_pet_pet_name" name="edit_pet_pet_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_species" class="col-form-label">Species (Dog, Cat, etc.)</label>
                                    <input type="text" class="form-control" id="edit_pet_species" name="edit_pet_species" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_breed" class="col-form-label">Breed</label>
                                    <input type="text" class="form-control" id="edit_pet_breed" name="edit_pet_breed" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_age" class="col-form-label">Age (Months)</label>
                                    <input type="number" class="form-control" id="edit_pet_age" name="edit_pet_age" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_weight" class="col-form-label">Weight (KG)</label>
                                    <input type="number" class="form-control" id="edit_pet_weight" name="edit_pet_weight" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_sex" class="col-form-label">Sex</label>
                                    <select class="custom-select" name="edit_pet_sex" id="edit_pet_sex" required>
                                        <option value="" disabled selected></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_spayed_neutered" class="col-form-label">Spayed/Neutered</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="In a female animal, “spaying” consists of removing the ovaries or uterus and ovaries. The technical term is ovariectomy or ovariohysterectomy. For a male animal, “neutering” involves the removal of the testicles, and this is known as castration."></i>
                                    <select class="custom-select" name="edit_pet_spayed_neutered" id="edit_pet_spayed_neutered" required>
                                        <option value="" disabled selected></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_pet_current_medications" class="col-form-label">Current Medications (if any)</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="Examples in dogs and cats include penicillin, trimethoprim-sulfa, cephalexin and enrofloxacin. Non-steroidal anti-inflammatories: these common drugs reduce swelling, inflammation, pain and lameness. Examples include carprofen, deracoxib, firocoxib, and meloxicam."></i>
                                    <input type="text" class="form-control" id="edit_pet_current_medications" name="edit_pet_current_medications" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="edit_pet_primary_key" id="edit_pet_primary_key">
                        <input type="hidden" name="edit_pet_old_image" id="edit_pet_old_image">
                        <input type="hidden" name="edit_pet_current_tab" value="<?= $this->session->userdata("current_tab") ?>">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="edit_pet">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Report Missing Pet Modal -->
    <div class="modal fade" id="report_missing_pet_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="read_more_modal_title">Report a Missing Pet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/report_missing_pet" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="report_missing_pet_image_display" class="rounded-circle img-bordered-sm lazy" width="150" height="150" data-src="<?= default_user_image() ?>">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input fileficker" id="report_missing_pet_image" name="report_missing_pet_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="report_missing_pet_image" id="report_missing_pet_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="report_missing_pet_pet_name" class="col-form-label">Pet's Name</label>
                                    <input type="text" class="form-control" id="report_missing_pet_pet_name" name="report_missing_pet_pet_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="report_missing_pet_species" class="col-form-label">Species (Dog, Cat, etc.)</label>
                                    <input type="text" class="form-control" id="report_missing_pet_species" name="report_missing_pet_species" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="report_missing_pet_breed" class="col-form-label">Breed</label>
                                    <input type="text" class="form-control" id="report_missing_pet_breed" name="report_missing_pet_breed" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="report_missing_pet_age" class="col-form-label">Age (Months)</label>
                                    <input type="number" class="form-control" id="report_missing_pet_age" name="report_missing_pet_age" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="report_missing_pet_sex" class="col-form-label">Sex</label>
                                    <select class="custom-select" name="report_missing_pet_sex" id="report_missing_pet_sex" required>
                                        <option value="" disabled selected></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="report_missing_pet_spayed_neutered" class="col-form-label">Spayed/Neutered</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="In a female animal, “spaying” consists of removing the ovaries or uterus and ovaries. The technical term is ovariectomy or ovariohysterectomy. For a male animal, “neutering” involves the removal of the testicles, and this is known as castration."></i>
                                    <select class="custom-select" name="report_missing_pet_spayed_neutered" id="report_missing_pet_spayed_neutered" required>
                                        <option value="" disabled selected></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="report_missing_pet_last_seen_location" class="col-form-label">Last Seen Location</label>
                                    <input type="text" class="form-control" name="report_missing_pet_last_seen_location" id="report_missing_pet_last_seen_location" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="report_missing_pet_last_seen_date" class="col-form-label">Last Seen Date</label>
                                            <input type="date" class="form-control" name="report_missing_pet_last_seen_date" id="report_missing_pet_last_seen_date" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="report_missing_pet_last_seen_time" class="col-form-label">Last Seen Time</label>
                                            <input type="time" class="form-control" name="report_missing_pet_last_seen_time" id="report_missing_pet_last_seen_time" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="report_missing_pet_additional_information" class="col-form-label">Additional Information (Optional)</label>
                                <textarea name="report_missing_pet_additional_information" id="report_missing_pet_additional_information" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="report_missing_pet_user_primary_key" value="<?= $this->session->userdata("primary_key") ? $this->session->userdata("primary_key") : null ?>">
                        <input type="hidden" name="report_missing_pet_user_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>">
                        <input type="hidden" name="report_missing_pet_user_email" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>">
                        <input type="hidden" name="report_missing_pet_user_image" value="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : null ?>">
                        <input type="hidden" name="report_missing_pet_user_current_tab" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="report_missing_pet">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Missing Pet Modal -->
    <div class="modal fade" id="edit_missing_pet_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="read_more_modal_title">Report a Missing Pet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/edit_missing_pet" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="text-center">
                            <img id="edit_missing_pet_image_display" class="rounded-circle img-bordered-sm lazy" width="150" height="150" data-src="<?= default_user_image() ?>">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="custom-file" style="width: 400px;">
                                    <input type="file" class="custom-file-input fileficker" id="edit_missing_pet_image" name="edit_missing_pet_image" accept=".jpg, .jpeg, .png">
                                    <label class="custom-file-label" for="edit_missing_pet_image" id="edit_missing_pet_image_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_status" class="col-form-label">Pet Status</label>
                                    <select class="custom-select" name="edit_missing_pet_status" id="edit_missing_pet_status" required>
                                        <option value="found">Found</option>
                                        <option value="missing">Missing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_pet_name" class="col-form-label">Pet's Name</label>
                                    <input type="text" class="form-control" id="edit_missing_pet_pet_name" name="edit_missing_pet_pet_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_species" class="col-form-label">Species (Dog, Cat, etc.)</label>
                                    <input type="text" class="form-control" id="edit_missing_pet_species" name="edit_missing_pet_species" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_breed" class="col-form-label">Breed</label>
                                    <input type="text" class="form-control" id="edit_missing_pet_breed" name="edit_missing_pet_breed" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_age" class="col-form-label">Age (Months)</label>
                                    <input type="number" class="form-control" id="edit_missing_pet_age" name="edit_missing_pet_age" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_sex" class="col-form-label">Sex</label>
                                    <select class="custom-select" name="edit_missing_pet_sex" id="edit_missing_pet_sex" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_spayed_neutered" class="col-form-label">Spayed/Neutered</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="In a female animal, “spaying” consists of removing the ovaries or uterus and ovaries. The technical term is ovariectomy or ovariohysterectomy. For a male animal, “neutering” involves the removal of the testicles, and this is known as castration."></i>
                                    <select class="custom-select" name="edit_missing_pet_spayed_neutered" id="edit_missing_pet_spayed_neutered" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="edit_missing_pet_last_seen_location" class="col-form-label">Last Seen Location</label>
                                    <input type="text" class="form-control" name="edit_missing_pet_last_seen_location" id="edit_missing_pet_last_seen_location" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="edit_missing_pet_last_seen_date" class="col-form-label">Last Seen Date</label>
                                            <input type="date" class="form-control" name="edit_missing_pet_last_seen_date" id="edit_missing_pet_last_seen_date" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="edit_missing_pet_last_seen_time" class="col-form-label">Last Seen Time</label>
                                            <input type="time" class="form-control" name="edit_missing_pet_last_seen_time" id="edit_missing_pet_last_seen_time" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="edit_missing_pet_additional_information" class="col-form-label">Additional Information (Optional)</label>
                                <textarea name="edit_missing_pet_additional_information" id="edit_missing_pet_additional_information" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="edit_missing_pet_primary_key" id="edit_missing_pet_primary_key">
                        <input type="hidden" name="edit_missing_pet_old_image" id="edit_missing_pet_old_image">
                        <input type="hidden" name="edit_missing_pet_current_tab" value="<?= $this->session->userdata("current_tab") ?>">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="edit_missing_pet">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Request Appointment Modal -->
    <div class="modal fade" id="request_appointment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="read_more_modal_title">Request an Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="server/request_an_appointment" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="request_appointment_name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="request_appointment_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="request_appointment_email" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="request_appointment_email" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="request_appointment_date" class="col-form-label">Appointment Date</label>
                            <input type="date" class="form-control" id="request_appointment_date" name="request_appointment_date" required>
                        </div>
                        <div class="form-group">
                            <label for="request_appointment_time" class="col-form-label">Appointment Time</label>
                            <input type="time" class="form-control" id="request_appointment_time" name="request_appointment_time" required>
                        </div>
                        <div class="form-group">
                            <label for="request_appointment_agenda" class="col-form-label">Agenda</label>
                            <textarea name="request_appointment_agenda" id="request_appointment_agenda" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="request_appointment_primary_key" value="<?= $this->session->userdata("primary_key") ? $this->session->userdata("primary_key") : null ?>">
                        <input type="hidden" name="request_appointment_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>">
                        <input type="hidden" name="request_appointment_email" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>">
                        <input type="hidden" name="request_appointment_current_tab" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" name="request_appointment">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/easing/easing.min.js"></script>
    <script src="plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="plugins/tempusdominus/js/moment.min.js"></script>
    <script src="plugins/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="plugins/sweeralert2/js/sweetalert2@11.js"></script>
    <!-- DataTables & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <!-- Template Javascript -->
    <script src="dist/js/main.js"></script>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            var alert_message = <?= $this->session->userdata("alert") ? json_encode($this->session->userdata("alert")) : json_encode(array()) ?>;
            var user_name = "<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>";
            var current_tab = "<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>";
            var blog_id = "<?= $this->input->get("blog_id") ? $this->input->get("blog_id") : null ?>";
            var default_user_image = "<?= default_user_image() ?>";
            var currentStep = 1;
            var totalSteps = 3;
            var current_page = 1;
            var current_page_2 = 1;
            var comments_limit = 5;

            var url = "";

            lazyLoadImages();
            notification_message(alert_message);

            if (current_tab == "blogs") {
                load_comments(blog_id);

                load_comment_count();
            }

            if (current_tab == "online_pet_health_assessment") {
                showStep(currentStep);
            }

            if (current_tab == "registered_pets") {
                showPage(current_page);
            }

            if (current_tab == "missing_pets") {
                showPage_2(current_page_2);
            }

            $(document).on('scroll resize', lazyLoadImages);

            $(".getFullYear").html(new Date().getFullYear());

            $(".more_info").tooltip();

            $(".btn_edit_pet").click(function() {
                var primary_key = $(this).attr("primary_key");
                var pet_name = $(this).attr("pet_name");
                var species = $(this).attr("species");
                var breed = $(this).attr("breed");
                var age = $(this).attr("age");
                var weight = $(this).attr("weight");
                var sex = $(this).attr("sex");
                var spayed_neutered = $(this).attr("spayed_neutered");
                var current_medications = $(this).attr("current_medications");
                var image = $(this).attr("image");

                $("#edit_pet_primary_key").val(primary_key);
                $("#edit_pet_old_image").val(image);

                $("#edit_pet_pet_name").val(pet_name);
                $("#edit_pet_species").val(species);
                $("#edit_pet_breed").val(breed);
                $("#edit_pet_age").val(age);
                $("#edit_pet_weight").val(weight);
                $("#edit_pet_sex").val(sex);
                $("#edit_pet_spayed_neutered").val(spayed_neutered);
                $("#edit_pet_current_medications").val(current_medications);
                $("#edit_pet_image_display").attr("src", image);

            })

            $("#btn_edit_missing_pet").click(function() {
                var primary_key = $(this).attr("primary_key");
                var pet_name = $(this).attr("pet_name");
                var species = $(this).attr("species");
                var breed = $(this).attr("breed");
                var age = $(this).attr("age");
                var sex = $(this).attr("sex");
                var spayed_neutered = $(this).attr("spayed_neutered");
                var image = $(this).attr("image");
                var last_seen_date = $(this).attr("last_seen_date");
                var last_seen_time = $(this).attr("last_seen_time");
                var last_seen_location = $(this).attr("last_seen_location");
                var additional_information = $(this).attr("additional_information");
                var status = $(this).attr("status");

                $("#edit_missing_pet_primary_key").val(primary_key);
                $("#edit_missing_pet_old_image").val(image);
                $("#edit_missing_pet_status").val(status);

                $("#edit_missing_pet_pet_name").val(pet_name);
                $("#edit_missing_pet_species").val(species);
                $("#edit_missing_pet_breed").val(breed);
                $("#edit_missing_pet_age").val(age);
                $("#edit_missing_pet_sex").val(sex);
                $("#edit_missing_pet_spayed_neutered").val(spayed_neutered);
                $("#edit_missing_pet_last_seen_location").val(last_seen_location);
                $("#edit_missing_pet_last_seen_date").val(last_seen_date);
                $("#edit_missing_pet_last_seen_time").val(last_seen_time);
                $("#edit_missing_pet_additional_information").val(additional_information);
                $("#edit_missing_pet_image_display").attr("src", image);
            })

            $(".link_pages_2").click(function() {
                current_page_2 = $(this).attr("page_number");

                showPage_2(current_page_2);
            })

            $("#btn_next_page_2").click(function() {
                current_page_2++;

                showPage_2(current_page_2);
            })

            $("#btn_previous_page_2").click(function() {
                current_page_2--;

                showPage_2(current_page_2);
            })

            $(".link_pages").click(function() {
                current_page = $(this).attr("page_number");

                showPage(current_page);
            })

            $("#btn_next_page").click(function() {
                current_page++;

                showPage(current_page);
            })

            $("#btn_previous_page").click(function() {
                current_page--;

                showPage(current_page);
            })

            $(".view_image").click(function() {
                var image = $(this).attr("src");

                $("#proof_img_container").attr("src", image);
            })

            $("#prevBtn").click(function() {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            $("#nextBtn").click(function() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            $("#my_table").DataTable({
                "responsive": true,
                "lengthChange": true,
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "targets": 'no-sort',
                "bSort": false,
                "order": []
            })

            $('.truncate-lines').each(function() {
                var lineHeight = parseFloat($(this).css('line-height'));
                var maxHeight = lineHeight * 5; // Adjust this value to match the max-height in CSS

                while ($(this).outerHeight() > maxHeight) {
                    $(this).text(function(index, text) {
                        return text.replace(/\W*\s(\S)*$/, '...');
                    });
                }
            })

            $(".read_more").click(function() {
                var title = $(this).attr("modal_title");
                var read_more_services = $(this).attr("read_more_services");

                $("#read_more_modal_title").html(title);

                $("#read_more_services > *").addClass("d-none");

                $("#" + read_more_services).removeClass("d-none");
            })

            $("#sign_up_form").submit(function(e) {
                var password = $("#sign_up_password").val();
                var confirm_password = $("#sign_up_confirm_password").val();

                var passwords_ok = sign_up_verify_password(password, confirm_password);

                if (passwords_ok) {
                    return true;
                }

                e.preventDefault();
            })

            $("#update_account_form").submit(function(e) {
                var password = $("#update_account_password").val();
                var confirm_password = $("#update_account_confirm_password").val();

                var passwords_ok = update_account_verify_password(password, confirm_password);

                if (passwords_ok) {
                    return true;
                }

                e.preventDefault();
            })

            $("#update_new_password_form").submit(function(e) {
                var password = $("#update_new_password_new_password").val();
                var confirm_password = $("#update_new_password_confirm_password").val();

                var passwords_ok = update_new_password_verify_password(password, confirm_password);

                if (passwords_ok) {
                    return true;
                }

                e.preventDefault();
            })

            $("#sign_up_password").on("keydown", function() {
                $("#sign_up_password").attr("class", "form-control");
                $("#sign_up_confirm_password").attr("class", "form-control");
                $("#error_sign_up_password").attr("class", "d-none");
            })

            $("#sign_up_confirm_password").on("keydown", function() {
                $("#sign_up_password").attr("class", "form-control");
                $("#sign_up_confirm_password").attr("class", "form-control");
                $("#error_sign_up_password").attr("class", "d-none");
            })

            $("#update_account_password").on("keydown", function() {
                $("#update_account_password").attr("class", "form-control");
                $("#update_account_confirm_password").attr("class", "form-control");
                $("#error_update_account_password").attr("class", "d-none");
            })

            $("#update_account_confirm_password").on("keydown", function() {
                $("#update_account_password").attr("class", "form-control");
                $("#update_account_confirm_password").attr("class", "form-control");
                $("#error_update_account_password").attr("class", "d-none");
            })

            $("#update_new_password_new_password").on("keydown", function() {
                $("#update_new_password_new_password").attr("class", "form-control");
                $("#update_new_password_confirm_password").attr("class", "form-control");
                $("#error_update_new_password_new_password").attr("class", "d-none");
            })

            $("#update_new_password_confirm_password").on("keydown", function() {
                $("#update_new_password_new_password").attr("class", "form-control");
                $("#update_new_password_confirm_password").attr("class", "form-control");
                $("#error_update_new_password_new_password").attr("class", "d-none");
            })

            $(".btn_logout").click(function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will be logged out soon.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Logout!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = "server/logout";
                    }
                })
            })

            $("#sign_up_image").change(function() {
                display_image_info(this);
            })

            $("#update_account_image").change(function() {
                display_image_info_2(this);
            })

            $("#register_pet_image").change(function() {
                display_image_info_3(this);
            })

            $("#report_missing_pet_image").change(function() {
                display_image_info_4(this);
            })

            $("#edit_pet_image").change(function() {
                display_image_info_5(this);
            })

            $("#edit_missing_pet_image").change(function() {
                display_image_info_6(this);
            })

            $("#sign_up_rfid_number").on("keydown", function(e) {
                $("#sign_up_rfid_number").attr("class", "form-control");
                $("#error_sign_up_rfid_number").attr("class", "d-none");

                if (e.which === 13) {
                    e.preventDefault();
                }
            })

            $("#update_account_rfid_number").on("keydown", function(e) {
                $("#update_account_rfid_number").attr("class", "form-control");
                $("#error_update_account_rfid_number").attr("class", "d-none");

                if (e.which === 13) {
                    e.preventDefault();
                }
            })

            $("#sign_up_email").on("keydown", function(e) {
                $("#sign_up_email").attr("class", "form-control");
                $("#error_sign_up_email").attr("class", "d-none");
            })

            $(".login_alert").click(function() {
                Swal.fire(
                    'Oops...',
                    "You must login first!",
                    'error'
                )
            })

            $(".booking").click(function() {
                var category = $(this).attr("category");
                var plan_price = $(this).attr("plan_price");
                var plan_img = $(this).attr("plan_img");

                $("#selected_plan").html(category);
                $("#plan_price").html(plan_price);
                $("#plan_img").attr("src", plan_img);
                $("#booking_plan").val(category);
            })

            $("#comment_form").submit(function(e) {
                var blog_primary_key = $("#comment_blog_primary_key").val();
                var name = $("#comment_name").val();
                var message = $("#comment_message").val();
                var image = $("#comment_image").val();

                submit_comment("server/submit_comment", blog_primary_key, name, message, image);

                load_comments(blog_primary_key);

                $("#comment_name").val(user_name);
                $("#comment_message").val(null);

                e.preventDefault();
            })

            $("#btn_load_more_comments").click(function() {
                var blog_primary_key = $(this).attr("blog_id");

                comments_limit = 9223372036854775807;

                load_comments(blog_primary_key);

                $(this).addClass("d-none");
            })

            $("#adopt_form").submit(function(e) {
                var mobile_number = $("#adopt_mobile_number").val();

                if (adopt_verify_mobile_number(mobile_number)) {
                    return true;
                }

                e.preventDefault();
            })

            $("#adopt_mobile_number").on("keydown", function() {
                $("#adopt_mobile_number").attr("class", "form-control");
                $("#error_adopt_mobile_number").attr("class", "d-none");
            })

            function lazyLoadImages() {
                $('.lazy').each(function() {
                    if ($(this).offset().top < window.innerHeight + $(window).scrollTop()) {
                        $(this).attr('src', $(this).attr('data-src'));
                        $(this).removeClass('lazy');
                    }
                });
            }

            function showPage(current_page) {
                $("#timeline_loader").removeClass("d-none");
                $(".timeline").addClass("d-none");

                setTimeout(function() {
                    $("#timeline_loader").addClass("d-none");
                    $(".timeline").removeClass("d-none");

                    var displays = $('.display-item');
                    var startIndex = (current_page - 1) * 3;
                    var endIndex = startIndex + 3;
                    var disabled_page = $("#btn_next_page").attr("disabled_page");

                    displays.hide();
                    displays.slice(startIndex, endIndex).show();

                    if (current_page > 1) {
                        $("#parent_btn_previous_page").removeClass("disabled");
                    } else {
                        $("#parent_btn_previous_page").addClass("disabled");
                    }

                    if (current_page == parseInt(disabled_page)) {
                        $("#parent_btn_next_page").addClass("disabled");
                    } else {
                        $("#parent_btn_next_page").removeClass("disabled");
                    }

                    $(".page-item").removeClass("active");

                    $("#page_number_" + current_page).addClass("active");
                }, 500);
            }

            function showPage_2(current_page_2) {
                $("#timeline_loader_2").removeClass("d-none");
                $(".timeline_2").addClass("d-none");

                setTimeout(function() {
                    $("#timeline_loader_2").addClass("d-none");
                    $(".timeline_2").removeClass("d-none");

                    var displays = $('.display-item_2');
                    var startIndex = current_page_2 - 1;
                    var endIndex = startIndex + 1;
                    var disabled_page = $("#btn_next_page_2").attr("disabled_page");

                    displays.hide();
                    displays.slice(startIndex, endIndex).show();

                    if (current_page_2 > 1) {
                        $("#parent_btn_previous_page_2").removeClass("disabled");
                    } else {
                        $("#parent_btn_previous_page_2").addClass("disabled");
                    }

                    if (current_page_2 == parseInt(disabled_page)) {
                        $("#parent_btn_next_page_2").addClass("disabled");
                    } else {
                        $("#parent_btn_next_page_2").removeClass("disabled");
                    }

                    $(".page-item").removeClass("active");

                    $("#page_number_" + current_page_2).addClass("active");
                }, 500);
            }

            function showStep(step) {
                $(".steps").hide();

                $("#step" + step).closest(".steps").show();

                if (step === 1) {
                    $("#prevBtn").hide();
                } else {
                    $("#prevBtn").show();
                }

                if (step === totalSteps) {
                    $("#nextBtn").hide();
                    $("#submitBtn").show();
                } else {
                    $("#nextBtn").show();
                    $("#submitBtn").hide();
                }
            }

            function load_comment_count() {
                get_comments("server/get_comments", "038ca8db1a595d42a16a4d5e23c304fe").then(function(comment) {
                    var counter = 0;

                    if (comment) {
                        Array.from(comment).forEach(function(comment_row) {
                            counter++;
                        })
                    }

                    if (counter != 1) {
                        $("#comment_blog_1").html(counter + " Comments");
                    } else {
                        $("#comment_blog_1").html(counter + " Comment");
                    }
                })

                get_comments("server/get_comments", "37d7a43b38d33119673c3cd731ceca9a").then(function(comment) {
                    var counter = 0;

                    if (comment) {
                        Array.from(comment).forEach(function(comment_row) {
                            counter++;
                        })
                    }

                    if (counter != 1) {
                        $("#comment_blog_2").html(counter + " Comments");
                    } else {
                        $("#comment_blog_2").html(counter + " Comment");
                    }
                })

                get_comments("server/get_comments", "27d14955cdac47a087df0d06a9be6a6e").then(function(comment) {
                    var counter = 0;

                    if (comment) {
                        Array.from(comment).forEach(function(comment_row) {
                            counter++;
                        })
                    }

                    if (counter != 1) {
                        $("#comment_blog_3").html(counter + " Comments");
                    } else {
                        $("#comment_blog_3").html(counter + " Comment");
                    }
                })
            }

            function load_comments(blog_primary_key) {
                $("#comment_section").empty();

                $("#comment_section").append(
                    `
                    <div id="loader" class="text-center">
                        <img src="dist/img/loading.gif">
                    </div>
                    `
                );

                setTimeout(function() {
                    get_comments("server/get_comments", blog_primary_key).then(function(comment) {
                        var counter = 0;

                        $("#loader").addClass("d-none");
                        $("#btn_load_more_comments").addClass("d-none");

                        if (comment.length > 0) {
                            Array.from(comment).forEach(function(comment_row) {
                                var user_image = default_user_image;

                                if (comment_row["image"]) {
                                    user_image = comment_row["image"];
                                }

                                if (counter <= comments_limit - 1) {
                                    $("#comment_section").append(
                                        `
                                    <div class="media mb-4">
                                        <img src="` + user_image + `" alt="Image" class="img-fluid mr-3 mt-1 rounded-circle img-bordered-sm" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>` + comment_row["name"] + ` <small><i>` + comment_row["date"] + ` - ` + comment_row["time"] + `</i></small></h6>
                                            <p class="text-justify">` + comment_row["message"] + `</p>
                                        </div>
                                    </div>
                                    `
                                    );
                                }

                                if (comments_limit == 5 && counter == comments_limit) {
                                    $("#btn_load_more_comments").removeClass("d-none");
                                }

                                counter++;
                            })
                        } else {
                            $("#comment_section").append(
                                `<h4 class="text-center text-muted">No Comments Available</h4>`
                            );
                        }

                        if (counter != 1) {
                            $(".comment_count").html(counter + " Comments");
                        } else {
                            $(".comment_count").html(counter + " Comment");
                        }
                    })
                }, 500);
            }

            function display_image_info(uploader) {
                if (uploader.files && uploader.files[0]) {
                    $('#sign_up_image_label').text(uploader.files[0].name);
                    $('#sign_up_image_display').attr('src', window.URL.createObjectURL(uploader.files[0]));
                }
            }

            function display_image_info_2(uploader) {
                if (uploader.files && uploader.files[0]) {
                    $('#update_account_image_label').text(uploader.files[0].name);
                    $('#update_account_image_display').attr('src', window.URL.createObjectURL(uploader.files[0]));
                }
            }

            function display_image_info_3(uploader) {
                if (uploader.files && uploader.files[0]) {
                    $('#register_pet_image_label').text(uploader.files[0].name);
                    $('#register_pet_image_display').attr('src', window.URL.createObjectURL(uploader.files[0]));
                }
            }

            function display_image_info_4(uploader) {
                if (uploader.files && uploader.files[0]) {
                    $('#report_missing_pet_image_label').text(uploader.files[0].name);
                    $('#report_missing_pet_image_display').attr('src', window.URL.createObjectURL(uploader.files[0]));
                }
            }

            function display_image_info_5(uploader) {
                if (uploader.files && uploader.files[0]) {
                    $('#edit_pet_image_label').text(uploader.files[0].name);
                    $('#edit_pet_image_display').attr('src', window.URL.createObjectURL(uploader.files[0]));
                }
            }

            function display_image_info_6(uploader) {
                if (uploader.files && uploader.files[0]) {
                    $('#edit_missing_pet_image_label').text(uploader.files[0].name);
                    $('#edit_missing_pet_image_display').attr('src', window.URL.createObjectURL(uploader.files[0]));
                }
            }

            function sign_up_verify_password(password, confirm_password) {
                var error = 0;

                if (!/[A-Z]/.test(password)) {
                    $("#sign_up_password").attr("class", "form-control is-invalid");
                    $("#sign_up_confirm_password").attr("class", "form-control is-invalid");

                    $("#error_sign_up_password").html("Password must have at least one uppercase letter (A-Z)");
                    $("#error_sign_up_password").attr("class", "text-danger");

                    error++;
                }

                if (!/[a-z]/.test(password)) {
                    $("#sign_up_password").attr("class", "form-control is-invalid");
                    $("#sign_up_confirm_password").attr("class", "form-control is-invalid");

                    $("#error_sign_up_password").html("Password must have at least one lowercase letter (a-z)");
                    $("#error_sign_up_password").attr("class", "text-danger");

                    error++;
                }

                if (!/[0-9]/.test(password)) {
                    $("#sign_up_password").attr("class", "form-control is-invalid");
                    $("#sign_up_confirm_password").attr("class", "form-control is-invalid");

                    $("#error_sign_up_password").html("Password must have at least one digit (0-9)");
                    $("#error_sign_up_password").attr("class", "text-danger");

                    error++;
                }

                if (!/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)) {
                    $("#sign_up_password").attr("class", "form-control is-invalid");
                    $("#sign_up_confirm_password").attr("class", "form-control is-invalid");

                    $("#error_sign_up_password").html("Password must have at least one special character (e.g., !@#$%^&*()_+-=[]{};':\"\\|,.<>/?)");
                    $("#error_sign_up_password").attr("class", "text-danger");

                    error++;
                }

                if (password.length < 8) {
                    $("#sign_up_password").attr("class", "form-control is-invalid");
                    $("#sign_up_confirm_password").attr("class", "form-control is-invalid");

                    $("#error_sign_up_password").html("Password must be at least 8 characters long");
                    $("#error_sign_up_password").attr("class", "text-danger");

                    error++;
                }

                if (password != confirm_password) {
                    $("#sign_up_password").attr("class", "form-control is-invalid");
                    $("#sign_up_confirm_password").attr("class", "form-control is-invalid");

                    $("#error_sign_up_password").html("Passwords do not match");
                    $("#error_sign_up_password").attr("class", "text-danger");

                    error++;
                }

                if (error > 0) {
                    return false;
                } else {
                    return true;
                }
            }

            function update_account_verify_password(password, confirm_password) {
                var error = 0;

                if (password || confirm_password) {
                    if (!/[A-Z]/.test(password)) {
                        $("#update_account_password").attr("class", "form-control is-invalid");
                        $("#update_account_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_account_password").html("Password must have at least one uppercase letter (A-Z)");
                        $("#error_update_account_password").attr("class", "text-danger");

                        error++;
                    }

                    if (!/[a-z]/.test(password)) {
                        $("#update_account_password").attr("class", "form-control is-invalid");
                        $("#update_account_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_account_password").html("Password must have at least one lowercase letter (a-z)");
                        $("#error_update_account_password").attr("class", "text-danger");

                        error++;
                    }

                    if (!/[0-9]/.test(password)) {
                        $("#update_account_password").attr("class", "form-control is-invalid");
                        $("#update_account_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_account_password").html("Password must have at least one digit (0-9)");
                        $("#error_update_account_password").attr("class", "text-danger");

                        error++;
                    }

                    if (!/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)) {
                        $("#update_account_password").attr("class", "form-control is-invalid");
                        $("#update_account_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_account_password").html("Password must have at least one special character (e.g., !@#$%^&*()_+-=[]{};':\"\\|,.<>/?)");
                        $("#error_update_account_password").attr("class", "text-danger");

                        error++;
                    }

                    if (password.length < 8) {
                        $("#update_account_password").attr("class", "form-control is-invalid");
                        $("#update_account_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_account_password").html("Password must be at least 8 characters long");
                        $("#error_update_account_password").attr("class", "text-danger");

                        error++;
                    }

                    if (password != confirm_password) {
                        $("#update_account_password").attr("class", "form-control is-invalid");
                        $("#update_account_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_account_password").html("Passwords do not match");
                        $("#error_update_account_password").attr("class", "text-danger");

                        error++;
                    }
                }

                if (error > 0) {
                    return false;
                } else {
                    return true;
                }
            }

            function update_new_password_verify_password(password, confirm_password) {
                var error = 0;

                if (password || confirm_password) {
                    if (!/[A-Z]/.test(password)) {
                        $("#update_new_password_new_password").attr("class", "form-control is-invalid");
                        $("#update_new_password_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_new_password_new_password").html("Password must have at least one uppercase letter (A-Z)");
                        $("#error_update_new_password_new_password").attr("class", "text-danger");

                        error++;
                    }

                    if (!/[a-z]/.test(password)) {
                        $("#update_new_password_new_password").attr("class", "form-control is-invalid");
                        $("#update_new_password_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_new_password_new_password").html("Password must have at least one lowercase letter (a-z)");
                        $("#error_update_new_password_new_password").attr("class", "text-danger");

                        error++;
                    }

                    if (!/[0-9]/.test(password)) {
                        $("#update_new_password_new_password").attr("class", "form-control is-invalid");
                        $("#update_new_password_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_new_password_new_password").html("Password must have at least one digit (0-9)");
                        $("#error_update_new_password_new_password").attr("class", "text-danger");

                        error++;
                    }

                    if (!/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)) {
                        $("#update_new_password_new_password").attr("class", "form-control is-invalid");
                        $("#update_new_password_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_new_password_new_password").html("Password must have at least one special character (e.g., !@#$%^&*()_+-=[]{};':\"\\|,.<>/?)");
                        $("#error_update_new_password_new_password").attr("class", "text-danger");

                        error++;
                    }

                    if (password.length < 8) {
                        $("#update_new_password_new_password").attr("class", "form-control is-invalid");
                        $("#update_new_password_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_new_password_new_password").html("Password must be at least 8 characters long");
                        $("#error_update_new_password_new_password").attr("class", "text-danger");

                        error++;
                    }

                    if (password != confirm_password) {
                        $("#update_new_password_new_password").attr("class", "form-control is-invalid");
                        $("#update_new_password_confirm_password").attr("class", "form-control is-invalid");

                        $("#error_update_new_password_new_password").html("Passwords do not match");
                        $("#error_update_new_password_new_password").attr("class", "text-danger");

                        error++;
                    }
                }

                if (error > 0) {
                    return false;
                } else {
                    return true;
                }
            }

            function notification_message(alert_message) {
                if (alert_message.length != 0) {
                    Swal.fire(
                        alert_message["title"],
                        alert_message["message"],
                        alert_message["alert_type"]
                    )
                }
            }

            function adopt_verify_mobile_number(mobile_number) {
                error = 0;

                mobile_number = mobile_number.replace(/[^\d]/g, '');

                var validPrefix = ['09'];
                var prefix = mobile_number.substr(0, 2);

                if (mobile_number.length !== 11) {
                    $("#adopt_mobile_number").attr("class", "form-control is-invalid");

                    $("#error_adopt_mobile_number").html("Mobile Number must be 11 digits long");
                    $("#error_adopt_mobile_number").attr("class", "text-danger");

                    error++;
                }

                if (!validPrefix.includes(prefix)) {
                    $("#adopt_mobile_number").attr("class", "form-control is-invalid");

                    $("#error_adopt_mobile_number").html("Mobile Number must start with '09'");
                    $("#error_adopt_mobile_number").attr("class", "text-danger");

                    error++;
                }

                if (error == 0) {
                    return true;
                } else {
                    return false;
                }
            }

            async function submit_comment(url, blog_primary_key, name, message, image) {
                var formData = new FormData();

                formData.append('blog_primary_key', blog_primary_key);
                formData.append('name', name);
                formData.append('message', message);
                formData.append('image', image);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData
                });
            }

            async function get_comments(url, blog_primary_key) {
                var formData = new FormData();

                formData.append('blog_primary_key', blog_primary_key);

                const response = await fetch(url, {
                    method: 'POST',
                    body: formData
                });

                return response.json();
            }
        })
    </script>

    <?php $this->session->unset_userdata("alert"); ?>
    <?php $this->session->unset_userdata("reset_password_status"); ?>
    <?php $this->session->unset_userdata("user_image"); ?>

    </body>

    </html>