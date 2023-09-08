<div class="container-fluid">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Registerd Pets</h4>
        <h1 class="display-4 m-0">Registered by various <span class="text-primary">Pet Owners</span></h1>
    </div>
    <div class="container">
        <?php $regestred_pets_result = $this->model->MOD_GET_PETS_DATA(); ?>
        <?php $page_counter = 0; ?>
        <div id="timeline_loader" class="text-center mb-3">
            <img src="dist/img/loading.gif">
        </div>
        <div class="timeline d-none">
            <?php if ($regestred_pets_result) : ?>
                <?php foreach ($regestred_pets_result as $regestred_pets) : ?>
                    <div class="card mb-3 display-item">
                        <div class="card-header text-center">
                            <?php if ($regestred_pets->user_primary_key == $this->session->userdata("primary_key")) : ?>
                                <a href="javascript:void(0)" title="Edit Pet Information" class="btn_edit_pet" data-toggle="modal" data-target="#edit_pet_modal" primary_key="<?= $regestred_pets->primary_key ?>" pet_name="<?= $regestred_pets->pet_name ?>" species="<?= $regestred_pets->species ?>" breed="<?= $regestred_pets->breed ?>" age="<?= $regestred_pets->age ?>" weight="<?= $regestred_pets->weight ?>" sex="<?= $regestred_pets->sex ?>" spayed_neutered="<?= $regestred_pets->spayed_neutered ?>" current_medications="<?= $regestred_pets->current_medications ?>" image="<?= $regestred_pets->image ?>">
                                    <i class="float-right fas fa-edit"></i>
                                </a>
                            <?php endif ?>
                            <img title="Click to view image" data-src="<?= $regestred_pets->image ?>" class="rounded-circle img-bordered-sm view_image more_info lazy" style="width: 150px; height: 150px; cursor: pointer;" data-toggle="modal" data-target="#view_profile_picture">
                            <h3 class="mt-1"><?= $regestred_pets->pet_name ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Pet's Information</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Owner's Name:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->user_name ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Species:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->species ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Breed:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->breed ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Age:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->age ?> Months Old</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Weight:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->weight ?> KG</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Sex:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->sex ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Spayed/Neutered:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->spayed_neutered ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <strong>Current Medications:</strong>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <p><?= $regestred_pets->current_medications ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Pet's QR Code</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="centered">
                                                <img class="lazy" data-src="<?= generate_qrcode($regestred_pets->primary_key) ?>" style="width: 280px; height: 280px;" alt="">
                                            </div>
                                            <div class="centered">
                                                <a href="<?= generate_qrcode($regestred_pets->primary_key) ?>" class="btn btn-success py-2 px-5" download="<?= $regestred_pets->pet_name ?>_qrcode.png">Dowload QR Code</a>
                                            </div>
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
                            <li class="page-item disabled" id="parent_btn_previous_page">
                                <a class="page-link" id="btn_previous_page" href="#">
                                    <span aria-hidden="true">&laquo; Previous</span>
                                </a>
                            </li>
                            <?php $page_number_counter = 1 ?>
                            <?php for ($i = 1; $i <= $page_counter; $i = $i + 3) : ?>
                                <li class="page-item" id="page_number_<?= $page_number_counter ?>">
                                    <a class="page-link link_pages" href="#" page_number="<?= $page_number_counter ?>"><?= $page_number_counter ?></a>
                                </li>
                                <?php $page_number_counter++ ?>
                            <?php endfor ?>
                            <li class="page-item" id="parent_btn_next_page">
                                <a class="page-link" id="btn_next_page" href="#" disabled_page="<?= $page_number_counter - 1 ?>">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            <?php else : ?>
                <h1 class="text-muted text-center">No Registered Pets Available</h1>
            <?php endif ?>
        </div>
    </div>
</div>