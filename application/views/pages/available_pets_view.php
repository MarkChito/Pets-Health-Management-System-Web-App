<!-- About Start -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">Pet Adoption Center</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">Adopt</span> a <span class="text-secondary">Pet</span></h1>
            <h5 class="text-muted mb-3">
                Our adoptable cats and dogs are mostly spayed/neutered (kapon) and vaccinated. Because they lived a difficult life before being rescued, we need to be sure that they get adopted by loving humans and won't be subjected to further cruelty or neglect. Here's how to apply:
            </h5>
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline">
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Submit the adoption application form</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Attend the Zoom interview</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Meet our shelter animals in person</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Visit your chosen pet to confirm your choice</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Wait for vet clearance and schedule pick up</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Pay the adoption fee of <b>P500 (cat) / P1000 (dog)</b></h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-check-double text-secondary mr-3"></i>Take your pet home!</b></h5>
                        </li>
                    </ul>
                </div>
            </div>
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

<!-- List of Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Our Pets</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Available</span> Pets</h1>
        </div>
        <div class="row pb-3">
            <?php $available_pets_data = $this->model->MOD_AVAILABLE_PETS_DATA() ?>

            <?php if ($available_pets_data) : ?>
                <?php foreach ($available_pets_data as $available_pets) : ?>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <a href="<?= base_url() ?>pet_adoption_center?pet_id=<?= $available_pets->primary_key ?>" class="link_pets">
                            <div class="zoom-container">
                                <img src="<?= $available_pets->image ?>" alt="" class="w-100 h-100">
                            </div>
                            <h3 class="text-center text-success mt-2"><?= $available_pets->pet_name ?></h3>
                        </a>
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <div class="text-center w-100">
                    <h1 class="text-muted">No Available Pets Yet</h1>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
<!-- List of End -->