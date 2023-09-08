<div class="container-fluid">
    <div class="d-flex flex-column text-center mb-5 pt-5">
        <h4 class="text-secondary mb-3">Pet Adoption Center</h4>
        <h1 class="display-4 m-0">Find Your Forever <span class="text-primary">Pet and Friend</span></h1>
    </div>
    <form action="server/adopt_a_pet" method="post" id="adopt_form">
        <div class="container">
            <!-- Personal Information -->
            <div class="card mb-3">
                <div class="card-header">
                    <strong class="card-title">1. Personal Information</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="adopt_name" name="adopt_name" value="<?= $this->session->userdata("user_name") ? $this->session->userdata("user_name") : null ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_email" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="adopt_email" name="adopt_email" value="<?= $this->session->userdata("user_email") ? $this->session->userdata("user_email") : null ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_mobile_number" class="col-form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="adopt_mobile_number" name="adopt_mobile_number" required>
                                <small id="error_adopt_mobile_number" class="d-none"></small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_address" class="col-form-label">Address</label>
                                <input type="text" class="form-control" id="adopt_address" name="adopt_address" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Adoption Preferences -->
            <div class="card mb-3">
                <div class="card-header">
                    <strong class="card-title">2. Adoption Preferences</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_type_of_pet" class="col-form-label">Type of Pet (Dog, Cat, Bird, etc.)</label>
                                <input type="text" class="form-control" id="adopt_type_of_pet" name="adopt_type_of_pet" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_breed_preferences" class="col-form-label">Breed Preferences (if any)</label>
                                <input type="text" class="form-control" id="adopt_breed_preferences" name="adopt_breed_preferences" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label for="adopt_age_preference" class="col-form-label">Age Preference</label>
                                <select name="adopt_age_preference" id="adopt_age_preference" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Young">Young</option>
                                    <option value="Adult">Adult</option>
                                    <option value="Senior">Senior</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label for="adopt_size_preference" class="col-form-label">Size Preference</label>
                                <select name="adopt_size_preference" id="adopt_size_preference" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label for="adopt_gender_preference" class="col-form-label">Gender Preference</label>
                                <select name="adopt_gender_preference" id="adopt_gender_preference" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Living Situation -->
            <div class="card mb-3">
                <div class="card-header">
                    <strong class="card-title">3. Living Situation</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label for="adopt_type_of_residence" class="col-form-label">Type of Residence</label>
                                <select name="adopt_type_of_residence" id="adopt_type_of_residence" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="House">House</option>
                                    <option value="Rent">Rent</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label for="adopt_ownership" class="col-form-label">Ownership</label>
                                <select name="adopt_ownership" id="adopt_ownership" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Owning">Owning</option>
                                    <option value="Renting">Renting</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="form-group">
                                <label for="adopt_availability_of_a_fenced_yard_or_outdoor_space" class="col-form-label">Availability of a Fenced Yard or Outdoor Space</label>
                                <select name="adopt_availability_of_a_fenced_yard_or_outdoor_space" id="adopt_availability_of_a_fenced_yard_or_outdoor_space" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Living Situation -->
            <div class="card mb-3">
                <div class="card-header">
                    <strong class="card-title">4. Lifestyle and Compatibility</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_activity_level" class="col-form-label">Activity Level</label>
                                <select name="adopt_activity_level" id="adopt_activity_level" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Active">Active</option>
                                    <option value="Sedentary">Sedentary</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_time_commitment_available_for_pet_care" class="col-form-label">Time Commitment Available for Pet Care</label>
                                <select name="adopt_time_commitment_available_for_pet_care" id="adopt_time_commitment_available_for_pet_care" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Low">Low</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="High">High</option>
                                    <option value="Flexible">Flexible</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_experience_with_pets" class="col-form-label">Experience with Pets</label>
                                <select name="adopt_experience_with_pets" id="adopt_experience_with_pets" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="First-Time Owner">First-Time Owner</option>
                                    <option value="Experienced">Experienced</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <label for="adopt_compatibility_with_children_or_other_pets_in_the_household" class="col-form-label">Compatibility with Children or Other Pets in the Household</label>
                                <select name="adopt_compatibility_with_children_or_other_pets_in_the_household" id="adopt_compatibility_with_children_or_other_pets_in_the_household" class="custom-select" required>
                                    <option value="" disabled selected></option>
                                    <option value="Very Compatible">Very Compatible</option>
                                    <option value="Somewhat Compatible">Somewhat Compatible</option>
                                    <option value="Not Compatible">Not Compatible</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="adopt_any_specific_considerations_or_requirements" class="col-form-label">Any Specific Considerations or Requirements (Allergies, Special Needs, etc.)</label>
                                <input type="text" name="adopt_any_specific_considerations_or_requirements" id="adopt_any_specific_considerations_or_requirements" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="adopt_user_primary_key" value="<?= $this->session->userdata("primary_key") ? $this->session->userdata("primary_key") : null ?>">
            <input type="hidden" name="adopt_current_tab" value="<?= $this->session->userdata("current_tab") ? $this->session->userdata("current_tab") : null ?>">

            <button type="submit" class="btn btn-success w-100 py-2" name="adopt">Submit</button>
        </div>
    </form>
</div>