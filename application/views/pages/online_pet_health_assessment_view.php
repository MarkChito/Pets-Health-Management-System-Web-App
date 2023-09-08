<div class="container-fluid">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Online Pet Health Assesment</h4>
        <h1 class="display-4 m-0">Your Pet's Health is <span class="text-primary">Our Concern</span></h1>
    </div>
    <div class="container justify-content-center">
        <form action="server/online_pet_health_assessment" method="post">
            <!-- Step 1 -->
            <div class="steps">
                <div class="card" id="step1">
                    <div class="card-header">
                        <strong class="card-title">General Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_pet_name" class="col-form-label">Pet's Name</label>
                                    <input type="text" class="form-control" id="checkup_pet_name" name="checkup_pet_name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_species" class="col-form-label">Species (Dog, Cat, etc.)</label>
                                    <input type="text" class="form-control" id="checkup_species" name="checkup_species">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_breed" class="col-form-label">Breed</label>
                                    <input type="text" class="form-control" id="checkup_breed" name="checkup_breed">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_age" class="col-form-label">Age (Months)</label>
                                    <input type="number" class="form-control" id="checkup_age" name="checkup_age">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_weight" class="col-form-label">Weight (KG)</label>
                                    <input type="number" class="form-control" id="checkup_weight" name="checkup_weight">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_sex" class="col-form-label">Sex</label>
                                    <select class="custom-select" name="checkup_sex" id="checkup_sex">
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
                                    <label for="checkup_spayed_neutered" class="col-form-label">Spayed/Neutered</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="In a female animal, “spaying” consists of removing the ovaries or uterus and ovaries. The technical term is ovariectomy or ovariohysterectomy. For a male animal, “neutering” involves the removal of the testicles, and this is known as castration."></i>
                                    <select class="custom-select" name="checkup_spayed_neutered" id="checkup_spayed_neutered">
                                        <option value="" disabled selected></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_current_medications" class="col-form-label">Current Medications (if any)</label><i class="fas fa-info-circle text-info ml-1 more_info" style="cursor: pointer;" title="Examples in dogs and cats include penicillin, trimethoprim-sulfa, cephalexin and enrofloxacin. Non-steroidal anti-inflammatories: these common drugs reduce swelling, inflammation, pain and lameness. Examples include carprofen, deracoxib, firocoxib, and meloxicam."></i>
                                    <input type="text" class="form-control" id="checkup_current_medications" name="checkup_current_medications">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="steps">
                <div class="card" id="step2">
                    <div class="card-header">
                        <strong class="card-title">Diet and Nutrition</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_type_of_food" class="col-form-label">Type of Food (Dry kibble, Wet food, Homemade, etc.)</label>
                                    <input type="text" class="form-control" id="checkup_type_of_food" name="checkup_type_of_food">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_brand_of_food" class="col-form-label">Brand of Food</label>
                                    <input type="text" class="form-control" id="checkup_brand_of_food" name="checkup_brand_of_food">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_feeding_schedule" class="col-form-label">Feeding Schedule</label>
                                    <input type="text" class="form-control" id="checkup_feeding_schedule" name="checkup_feeding_schedule">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_treats_and_snacks" class="col-form-label">Treats and Snacks (Frequency and Types)</label>
                                    <input type="text" class="form-control" id="checkup_treats_and_snacks" name="checkup_treats_and_snacks">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_known_food_allergies_or_intolerances" class="col-form-label">Any Known Food Allergies or Intolerances</label>
                                    <input type="text" class="form-control" id="checkup_known_food_allergies_or_intolerances" name="checkup_known_food_allergies_or_intolerances">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_water_intake" class="col-form-label">Water Intake</label>
                                    <select class="custom-select" name="checkup_water_intake" id="checkup_water_intake">
                                        <option value="" disabled selected></option>
                                        <option value="Normal">Normal</option>
                                        <option value="Increased">Increased</option>
                                        <option value="Decreased">Decreased</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="steps">
                <div class="card" id="step3">
                    <div class="card-header">
                        <strong class="card-title">Exercise and Activity Level</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_daily_exercise_routine" class="col-form-label">Daily Exercise Routine (e.g., Walks, Playtime, Specific Activities)</label>
                                    <input type="text" class="form-control" id="checkup_daily_exercise_routine" name="checkup_daily_exercise_routine">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_average_duration_of_exercise" class="col-form-label">Average Duration of Exercise</label>
                                    <input type="text" class="form-control" id="checkup_average_duration_of_exercise" name="checkup_average_duration_of_exercise">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_frequency_of_exercise" class="col-form-label">Frequency of Exercise</label>
                                    <input type="text" class="form-control" id="checkup_frequency_of_exercise" name="checkup_frequency_of_exercise">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="checkup_restrictions_on_physical_activity" class="col-form-label">Any Restrictions on Physical Activity (if Applicable)</label>
                                    <input type="text" class="form-control" id="checkup_restrictions_on_physical_activity" name="checkup_restrictions_on_physical_activity">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Buttons -->
            <div class="float-right mt-2">
                <input type="hidden" name="checkup_primary_key" value="<?= $this->session->userdata("primary_key") ? $this->session->userdata("primary_key") : null ?>">
                <input type="hidden" name="checkup_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>">
                <input type="hidden" name="checkup_email" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>">
                <input type="hidden" name="checkup_current_tab" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>">

                <button type="button" class="btn btn-primary btn-sm" id="prevBtn"><i class="fas fa-arrow-left"></i> Previous</button>
                <button type="button" class="btn btn-primary btn-sm" id="nextBtn">Next <i class="fas fa-arrow-right"></i></button>
                <button type="submit" class="btn btn-success btn-sm" id="submitBtn" name="checkup"><i class="fas fa-check"></i> Submit</button>
            </div>
        </form>
    </div>
</div>