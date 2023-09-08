<div class="container-fluid">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Missing Pets</h4>
        <h1 class="display-4 m-0">Help us find these <span class="text-primary">Missing Pets</span></h1>
    </div>
    <div class="container">
        <?php $missing_pets_result = $this->model->MOD_GET_MISSING_PETS_DATA(); ?>
        <?php $page_counter = 0; ?>

        <div id="timeline_loader_2" class="text-center mb-3">
            <img src="dist/img/loading.gif">
        </div>
        <div class="timeline_2 d-none">
            <?php if ($missing_pets_result) : ?>
                <?php foreach ($missing_pets_result as $missing_pets) : ?>
                    <div class="card mb-3 display-item_2">
                        <div class="card-header text-center">
                            <?php if ($missing_pets->user_primary_key == $this->session->userdata("primary_key")) : ?>
                                <a href="javascript:void(0)" title="Edit Pet Information" id="btn_edit_missing_pet" data-toggle="modal" data-target="#edit_missing_pet_modal" primary_key="<?= $missing_pets->primary_key ?>" pet_name="<?= $missing_pets->pet_name ?>" species="<?= $missing_pets->species ?>" breed="<?= $missing_pets->breed ?>" age="<?= $missing_pets->age ?>" sex="<?= $missing_pets->sex ?>" spayed_neutered="<?= $missing_pets->spayed_neutered ?>" image="<?= $missing_pets->image ?>" last_seen_location="<?= $missing_pets->last_seen_location ?>" last_seen_location="<?= $missing_pets->last_seen_location ?>" last_seen_date="<?= $missing_pets->last_seen_date ?>" last_seen_time="<?= $missing_pets->last_seen_time ?>" additional_information="<?= $missing_pets->additional_information ?>" status="<?= $missing_pets->status ?>">
                                    <i class="float-right fas fa-edit"></i>
                                </a>
                            <?php endif ?>
                            <img title="Click to view image" data-src="<?= $missing_pets->image ?>" class="rounded-circle img-bordered-sm view_image more_info lazy" style="width: 150px; height: 150px; cursor: pointer;" data-toggle="modal" data-target="#view_profile_picture">
                            <h3 class="mt-1 mb-0"><?= $missing_pets->pet_name ?></h3>
                            <strong>Status: <span class="<?= $missing_pets->status == "missing" ? "text-danger" : "text-success" ?>"><?= strtoupper($missing_pets->status) ?></span></strong>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Pet's General Information</strong>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Owner's Name:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->user_name ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Owner's Email:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->user_email ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Pet Name:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->pet_name ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Species:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->species ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Breed:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->breed ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Age:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->age ?> Months Old</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Sex:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->sex ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Spayed/Neutered:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->spayed_neutered ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Last Seen Date:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= date('F d, Y', strtotime($missing_pets->last_seen_date)) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Last Seen Time:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= date('h:i A', strtotime($missing_pets->last_seen_time)) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Last Seen Location:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->last_seen_location ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-5">
                                                    <strong>Additional Information:</strong>
                                                </div>
                                                <div class="col-lg-8 col-7">
                                                    <p><?= $missing_pets->additional_information ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Comments -->
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Comments</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <?php $missing_pets_comments_result = $this->model->MOD_GET_PETS_COMMENTS_DATA($missing_pets->primary_key); ?>

                                        <?php if ($missing_pets_comments_result) : ?>
                                            <?php foreach ($missing_pets_comments_result as $comments) : ?>
                                                <div class="media mb-4">
                                                    <img data-src="<?= $comments->user_image ?>" alt="Image" class="img-fluid mr-3 mt-1 rounded-circle img-bordered-sm lazy" style="width: 45px; height: 45px;">
                                                    <div class="media-body">
                                                        <h6><?= $comments->user_name ?> <small><i><?= $comments->date ?> - <?= $comments->time ?></i></small></h6>
                                                        <p class="text-justify"><?= $comments->message ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        <?php else : ?>
                                            <h4 class="text-center text-muted">No Comments Available</h4>
                                        <?php endif ?>
                                    </div>
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">Leave a Comment</h5>
                                            <form action="server/submit_missing_pet_comment" method="post">
                                                <div class="form-group">
                                                    <textarea name="missing_pet_comment_message" id="missing_pet_comment_message" class="form-control" placeholder="Comment as <?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" required></textarea>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <input type="hidden" name="missing_pet_comment_user_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>">
                                                    <input type="hidden" name="missing_pet_comment_user_image" value="<?= $this->session->userdata("user_image") ? $this->session->userdata("user_image") : null ?>">
                                                    <input type="hidden" name="missing_pet_comment_missing_pet_primary_key" value="<?= $missing_pets->primary_key ?>">
                                                    <input type="hidden" name="missing_pet_comment_current_tab" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>">

                                                    <input type="submit" value="Submit" name="missing_pet_comment" class="btn btn-primary float-right px-3">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $page_counter++ ?>
                <?php endforeach ?>
                <div class="centered">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled" id="parent_btn_previous_page_2">
                                <a class="page-link" id="btn_previous_page_2" href="#">
                                    <span aria-hidden="true">&laquo; Previous</span>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $page_counter; $i++) : ?>
                                <li class="page-item" id="page_number_<?= $i ?>">
                                    <a class="page-link link_pages_2" href="#" page_number="<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endfor ?>
                            <li class="page-item" id="parent_btn_next_page_2">
                                <a class="page-link" id="btn_next_page_2" href="#" disabled_page="<?= $i - 1 ?>">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            <?php else : ?>
                <h1 class="text-muted text-center">No Missing Pets Available</h1>
            <?php endif ?>
        </div>
    </div>
</div>