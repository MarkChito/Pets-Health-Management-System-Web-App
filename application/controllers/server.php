<?php
defined('BASEPATH') or exit('No direct script access allowed');

class server extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function login()
    {
        $email = $this->input->post("login_email");
        $password = $this->input->post("login_password");
        $remember_me = $this->input->post("login_remember_me");
        $current_tab = $this->input->post("login_current_tab");

        $result = $this->model->MOD_CHECK_EMAIL($email);

        if ($result) {
            foreach ($result as $result_row) {
                $primary_key = $result_row->primary_key;
                $db_paswword = $result_row->password;
                $user_type = $result_row->user_type;
                $account_status = $result_row->account_status;
            }

            if (password_verify($password, $db_paswword)) {
                if ($account_status == "activated") {
                    if ($remember_me) {
                        $this->session->set_userdata("remember_me", "checked");
                        $this->session->set_userdata("email", $email);
                        $this->session->set_userdata("password", $password);
                    } else {
                        $this->session->unset_userdata("remember_me");
                        $this->session->unset_userdata("email");
                        $this->session->unset_userdata("password");
                    }

                    $this->session->set_userdata("primary_key", $primary_key);

                    $this->session->set_userdata("alert", array(
                        "title" => "Welcome!",
                        "message" => "You have successfully logged in!",
                        "alert_type" => "success"
                    ));

                    if ($current_tab == "forgot_password") {
                        $current_tab = null;
                    }

                    if ($user_type == "Administrator") {
                        header("Location: " . base_url() . "admin_dashboard");

                        exit();
                    }
                } else {
                    $this->session->set_userdata("alert", array(
                        "title" => "Oops...",
                        "message" => "This account has not been activated yet!",
                        "alert_type" => "error"
                    ));
                }
            } else {
                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "The email or password entered is invalid!",
                    "alert_type" => "error"
                ));
            }
        } else {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "The email or password entered is invalid!",
                "alert_type" => "error"
            ));
        }

        header("Location: " . base_url() . $current_tab);
    }

    public function sign_up()
    {
        $name = $this->input->post("sign_up_name");
        $rfid_number = $this->input->post("sign_up_rfid_number");
        $email = $this->input->post("sign_up_email");
        $password = $this->input->post("sign_up_password");
        $current_tab = $this->input->post("sign_up_current_tab");

        $image = $_FILES["sign_up_image"]["tmp_name"];

        if ($image) {
            $image = $this->convert_image_to_data_uri("sign_up_image");
        } else {
            $image = "";
        }

        $errors = 0;

        $rfid_number_exists = null;
        $email_exists = $this->model->MOD_CHECK_EMAIL($email);

        if ($rfid_number) {
            $rfid_number_exists = $this->model->MOD_CHECK_RFID_NUMBER($rfid_number);
        }

        if ($email_exists) {
            $this->session->set_userdata("error_sign_up_email", "The provided email address is already registered");
            $this->session->set_userdata("error_sign_up_email_is_invalid", "is-invalid");

            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => $email . " is already registered!",
                "alert_type" => "error"
            ));

            $errors++;
        }

        if ($rfid_number_exists) {
            $this->session->set_userdata("error_sign_up_rfid_number", "The RFID number has already been assigned to another entity");
            $this->session->set_userdata("error_sign_up_rfid_number_is_invalid", "is-invalid");

            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => $rfid_number . " has already been assigned to another entity!",
                "alert_type" => "error"
            ));

            $errors++;
        }

        if ($errors == 2) {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "Both the RFID number '{$rfid_number}' and email '{$email}' are already in use!",
                "alert_type" => "error"
            ));
        }

        if ($errors == 0) {
            $current_time = time();
            $added_time = $current_time + (600);
            $expiration_date = date('Y-m-d H:i:s', $added_time);

            $confirmation_code = md5($this->generate_unique_key());

            $subject = "Welcome to Pets Health Management System";
            $message =
                '
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#edf2f7;margin:0;padding:0;width:100%">
                    <tbody>
                        <tr>
                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">
                                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;margin:0;padding:0;width:100%">
                                    <tbody>
                                        <tr>
                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;padding:25px 0;text-align:center">
                                                <img src="https://lh3.googleusercontent.com/a-/AD_cMMQSGrbygIxaek5DDG2bipSB3ZIqRKVQjUQWxyXIqEFt3Q=s40-p" style="margin-right: 3px; width: 20px; height: 20px; display: inline-block; border-radius: 50%;" alt="logo">
                                                <h1 style="margin: 0; text-transform: capitalize; font-style: italic; display: inline-block;">
                                                    <span style="color: #ED6436;">PetsHealth</span>Management
                                                </h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" cellpadding="0" cellspacing="0" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#edf2f7;border-bottom:1px solid #edf2f7;border-top:1px solid #edf2f7;margin:0;padding:0;width:100%;border:hidden!important">
                                                <table class="m_-6454603622214203898inner-body" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#ffffff;border-color:#e8e5ef;border-radius:2px;border-width:1px;margin:0 auto;padding:0;width:570px">
                                                    <tbody>
                                                        <tr>
                                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;max-width:100vw;padding:32px">
                                                                <h2 style="box-sizing:border-box; margin: 0; text-transform: capitalize; font-style: italic; text-align:center">
                                                                ' . $subject . '
                                                                </h2>
                                                                <br>
                                                                <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;line-height:1.5em;margin-top:0;font-size:13px;text-align:justify">
                                                                    <br><br>
                                                                    Dear Mr./Ms. ' . $name . ',
                                                                    <br><br><br><br>
                                                                    Please confirm your email by clicking the button below:
                                                                    <br><br><br><br>
                                                                    <a href="' . base_url() . 'server/confirm_email?confirmation_code=' . $confirmation_code . '" style="box-sizing:border-box; display: inline-block;padding: 10px 20px;font-size: 14px;font-weight: bold;text-align: center;text-decoration: none;border: none;border-radius: 5px;cursor: pointer;transition: background-color 0.3s ease; background-color: #007bff; color: #fff; width:100%">Confirm Email</a>
                                                                    <br><br><br><br>
                                                                    Please be reminded that you have <b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">5 minutes</b> to confirm your email, or else your registration will be cancelled.
                                                                    <br><br><br>
                                                                    Thank you.
                                                                    <br><br><br><br><br>
                                                                    <b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">Pets Health Management System</b>
                                                                    <br><br><br>
                                                                    *** This is a system generated message.<b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">DO NOT REPLY TO THIS EMAIL</b>.***
                                                                    <br>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">
                                                <table class="m_-6454603622214203898footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;margin:0 auto;padding:0;text-align:center;width:570px">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;max-width:100vw;padding:32px">
                                                                <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;line-height:1.5em;margin-top:0;color:#b0adc5;font-size:12px;text-align:center">
                                                                    © 2023 Pets Health Management System. All rights reserved.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ';

            $send_success = send_email($name, $email, $subject, $message, "Pets Health Management System", "noreply.pethealthmanagement@ssystem.online", "09465287111@Mark");

            if ($send_success) {
                $this->model->MOD_INSERT_USER_ACCOUNT($name, $rfid_number, $email, password_hash($password, PASSWORD_ARGON2I), "User", $confirmation_code, $expiration_date, "pending", $image);

                $this->session->set_userdata("alert", array(
                    "title" => "Attention!",
                    "message" => "Kindly review your email before proceeding.",
                    "alert_type" => "info"
                ));
            } else {
                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "An error has occured while sending your request. Please try again.",
                    "alert_type" => "error"
                ));
            }
        }

        header("Location: " . base_url() . $current_tab);
    }

    public function update_account()
    {
        $name = $this->input->post("update_account_name");
        $rfid_number = $this->input->post("update_account_rfid_number");
        $password = $this->input->post("update_account_password");

        $image = $_FILES["update_account_image"]["tmp_name"];

        $primary_key = $this->input->post("update_account_primary_key");
        $old_image = $this->input->post("update_account_old_image");
        $old_password = $this->input->post("update_account_old_password");
        $old_rfid_number = $this->input->post("update_account_old_rfid_number");
        $current_tab = $this->input->post("update_account_current_tab");

        if ($image) {
            $image = $this->convert_image_to_data_uri("update_account_image");
        } else {
            $image = $old_image;
        }

        if ($password) {
            $password = password_hash($password, PASSWORD_ARGON2I);
        } else {
            $password = $old_password;
        }

        $errors = 0;

        $rfid_number_exists = null;

        if ($rfid_number) {
            $rfid_number_exists = $this->model->MOD_CHECK_RFID_NUMBER($rfid_number);
        }

        if ($rfid_number_exists && $old_rfid_number != $rfid_number) {
            $this->session->set_userdata("error_update_account_rfid_number", "The RFID number has already been assigned to another entity");
            $this->session->set_userdata("error_update_account_rfid_number_is_invalid", "is-invalid");

            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => $rfid_number . " has already been assigned to another entity!",
                "alert_type" => "error"
            ));

            $errors++;
        }

        if ($errors == 0) {
            $this->model->MOD_UPDATE_ACCOUNT($name, $rfid_number, $password, $image, $primary_key);

            $this->session->set_userdata("alert", array(
                "title" => "Congratulations!",
                "message" => "Your account has been successfully updated!",
                "alert_type" => "success"
            ));
        }

        header("Location: " . base_url() . $current_tab);
    }

    public function booking()
    {
        $plan = $this->input->post("booking_plan");
        $name = $this->input->post("booking_name");
        $email = $this->input->post("booking_email");
        $date = $this->input->post("booking_date");
        $time = $this->input->post("booking_time");

        $current_tab = $this->input->post("booking_current_tab");
        $user_primary_key = $this->input->post("booking_primary_key");

        $agenda = "We have a scheduled meeting at the Pets Health Management Clinic to discuss the resolution of the subscription plan (" . $plan . ").";

        $this->model->MOD_ADD_APPOINTMENT($user_primary_key, $name, $email, $date, $time, $agenda, "Pending");

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your appointment request has been sent, please check your appointments tab or email regularly.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function request_an_appointment()
    {
        $name = $this->input->post("request_appointment_name");
        $email = $this->input->post("request_appointment_email");
        $date = $this->input->post("request_appointment_date");
        $time = $this->input->post("request_appointment_time");
        $agenda = $this->input->post("request_appointment_agenda");

        $current_tab = $this->input->post("request_appointment_current_tab");
        $user_primary_key = $this->input->post("request_appointment_primary_key");

        $this->model->MOD_ADD_APPOINTMENT($user_primary_key, $name, $email, $date, $time, $agenda, "Pending");

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your appointment request has been sent, please check your appointments tab or email regularly.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function register_pet()
    {
        $pet_name = $this->input->post("register_pet_pet_name");
        $species = $this->input->post("register_pet_species");
        $breed = $this->input->post("register_pet_breed");
        $age = $this->input->post("register_pet_age");
        $weight = $this->input->post("register_pet_weight");
        $sex = $this->input->post("register_pet_sex");
        $spayed_neutered = $this->input->post("register_pet_spayed_neutered");
        $current_medications = $this->input->post("register_pet_current_medications");

        $image = $_FILES["register_pet_image"]["tmp_name"];

        if ($image) {
            $image = $this->convert_image_to_data_uri("register_pet_image");
        } else {
            $image = default_user_image();
        }

        $user_name = $this->input->post("register_pet_user_name");
        $user_image = $this->input->post("register_pet_user_image");
        $user_primary_key = $this->input->post("register_pet_user_primary_key");
        $current_tab = $this->input->post("register_pet_current_tab");

        $date_posted = date("F d, Y - h:i A");

        $this->model->MOD_ADD_PET($date_posted, $user_primary_key, $user_name, $user_image, $pet_name, $species, $breed, $age, $weight, $sex, $spayed_neutered, $current_medications, $image);

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your pet has been registered.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function edit_pet()
    {
        $pet_name = $this->input->post("edit_pet_pet_name");
        $species = $this->input->post("edit_pet_species");
        $breed = $this->input->post("edit_pet_breed");
        $age = $this->input->post("edit_pet_age");
        $weight = $this->input->post("edit_pet_weight");
        $sex = $this->input->post("edit_pet_sex");
        $spayed_neutered = $this->input->post("edit_pet_spayed_neutered");
        $current_medications = $this->input->post("edit_pet_current_medications");

        $image = $_FILES["edit_pet_image"]["tmp_name"];

        $old_image = $this->input->post("edit_pet_old_image");
        $primary_key = $this->input->post("edit_pet_primary_key");
        $current_tab = $this->input->post("edit_pet_current_tab");

        if ($image) {
            $image = $this->convert_image_to_data_uri("edit_pet_image");
        } else {
            $image = $old_image;
        }

        $this->model->MOD_EDIT_PET($pet_name, $species, $breed, $age, $weight, $sex, $spayed_neutered, $current_medications, $image, $primary_key);

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your pet details has been updated.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function submit_comment()
    {
        $blog_primary_key = $this->input->post("blog_primary_key");
        $name = $this->input->post("name");
        $image = $this->input->post("image");
        $message = $this->input->post("message");

        $date = date("F d, Y");
        $time = date("h:i A");

        $this->model->MOD_ADD_COMMENT($blog_primary_key, $name, $image, $date, $time, $message);
    }

    public function submit_missing_pet_comment()
    {
        $missing_pet_primary_key = $this->input->post("missing_pet_comment_missing_pet_primary_key");
        $user_name = $this->input->post("missing_pet_comment_user_name");
        $user_image = $this->input->post("missing_pet_comment_user_image");
        $current_tab = $this->input->post("missing_pet_comment_current_tab");
        $message = $this->input->post("missing_pet_comment_message");

        $date = date("F d, Y");
        $time = date("h:i A");

        $this->model->MOD_ADD_MISSING_PET_COMMENT($missing_pet_primary_key, $user_name, $user_image, $date, $time, $message);

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your comment has been posted.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function get_comments()
    {
        $blog_primary_key = $this->input->post("blog_primary_key");

        $result = $this->model->MOD_GET_COMMENTS($blog_primary_key);

        echo json_encode($result);
    }

    public function adopt_a_pet()
    {
        $user_primary_key = $this->input->post("adopt_user_primary_key");
        $name = $this->input->post("adopt_name");
        $email = $this->input->post("adopt_email");
        $mobile_number = $this->input->post("adopt_mobile_number");
        $address = $this->input->post("adopt_address");
        $type_of_pet = $this->input->post("adopt_type_of_pet");
        $breed_preferences = $this->input->post("adopt_breed_preferences");
        $age_preference = $this->input->post("adopt_age_preference");
        $size_preference = $this->input->post("adopt_size_preference");
        $gender_preference = $this->input->post("adopt_gender_preference");
        $type_of_residence = $this->input->post("adopt_type_of_residence");
        $ownership = $this->input->post("adopt_ownership");
        $availability_of_a_fenced_yard_or_outdoor_space = $this->input->post("adopt_availability_of_a_fenced_yard_or_outdoor_space");
        $activity_level = $this->input->post("adopt_activity_level");
        $experience_with_pets = $this->input->post("adopt_experience_with_pets");
        $compatibility_with_children_or_other_pets_in_the_household = $this->input->post("adopt_compatibility_with_children_or_other_pets_in_the_household");
        $any_specific_considerations_or_requirements = $this->input->post("adopt_any_specific_considerations_or_requirements");

        $current_tab = $this->input->post("adopt_current_tab");

        $this->model->MOD_ADOPT_A_PET($user_primary_key, $name, $email, $mobile_number, $address, $type_of_pet, $breed_preferences, $age_preference, $size_preference, $gender_preference, $type_of_residence, $ownership, $availability_of_a_fenced_yard_or_outdoor_space, $activity_level, $experience_with_pets, $compatibility_with_children_or_other_pets_in_the_household, $any_specific_considerations_or_requirements);

        $this->session->set_userdata("alert", array(
            "title" => "Application Submitted!",
            "message" => "Your adoption application has been sent, please check your email regularly.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function report_missing_pet()
    {
        $pet_name = $this->input->post("report_missing_pet_pet_name");
        $species = $this->input->post("report_missing_pet_species");
        $breed = $this->input->post("report_missing_pet_breed");
        $age = $this->input->post("report_missing_pet_age");
        $sex = $this->input->post("report_missing_pet_sex");
        $spayed_neutered = $this->input->post("report_missing_pet_spayed_neutered");
        $last_seen_location = $this->input->post("report_missing_pet_last_seen_location");
        $last_seen_date = $this->input->post("report_missing_pet_last_seen_date");
        $last_seen_time = $this->input->post("report_missing_pet_last_seen_time");
        $additional_information = $this->input->post("report_missing_pet_additional_information");

        $image = $_FILES["report_missing_pet_image"]["tmp_name"];

        if ($image) {
            $image = $this->convert_image_to_data_uri("report_missing_pet_image");
        } else {
            $image = default_user_image();
        }

        $user_name = $this->input->post("report_missing_pet_user_name");
        $user_email = $this->input->post("report_missing_pet_user_email");
        $user_image = $this->input->post("report_missing_pet_user_image");
        $user_primary_key = $this->input->post("report_missing_pet_user_primary_key");
        $current_tab = $this->input->post("report_missing_pet_current_tab");

        $date_posted = date("F d, Y - h:i A");

        $this->model->MOD_ADD_MISSING_PET($date_posted, $user_primary_key, $user_name, $user_email, $user_image, $pet_name, $species, $breed, $age, $sex, $spayed_neutered, $last_seen_location, $last_seen_date, $last_seen_time, $additional_information, $image, "missing");

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your missing pet has been posted.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function edit_missing_pet()
    {
        $pet_name = $this->input->post("edit_missing_pet_pet_name");
        $species = $this->input->post("edit_missing_pet_species");
        $breed = $this->input->post("edit_missing_pet_breed");
        $age = $this->input->post("edit_missing_pet_age");
        $sex = $this->input->post("edit_missing_pet_sex");
        $spayed_neutered = $this->input->post("edit_missing_pet_spayed_neutered");
        $last_seen_location = $this->input->post("edit_missing_pet_last_seen_location");
        $last_seen_date = $this->input->post("edit_missing_pet_last_seen_date");
        $last_seen_time = $this->input->post("edit_missing_pet_last_seen_time");
        $additional_information = $this->input->post("edit_missing_pet_additional_information");
        $status = $this->input->post("edit_missing_pet_status");

        $old_image = $this->input->post("edit_missing_pet_old_image");
        $primary_key = $this->input->post("edit_missing_pet_primary_key");
        $current_tab = $this->input->post("edit_missing_pet_current_tab");

        $image = $_FILES["edit_missing_pet_image"]["tmp_name"];

        if ($image) {
            $image = $this->convert_image_to_data_uri("edit_missing_pet_image");
        } else {
            $image = $old_image;
        }

        $this->model->MOD_EDIT_MISSING_PET($pet_name, $species, $breed, $age, $sex, $spayed_neutered, $last_seen_location, $last_seen_date, $last_seen_time, $additional_information, $image, $status, $primary_key);

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your missing pet details has been updated.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function online_pet_health_assessment()
    {
        $pet_name = $this->input->post("checkup_pet_name");
        $species = $this->input->post("checkup_species");
        $breed = $this->input->post("checkup_breed");
        $age = $this->input->post("checkup_age");
        $weight = $this->input->post("checkup_weight");
        $spayed_neutered = $this->input->post("checkup_spayed_neutered");
        $current_medications = $this->input->post("checkup_current_medications");
        $type_of_food = $this->input->post("checkup_type_of_food");
        $feeding_schedule = $this->input->post("checkup_feeding_schedule");
        $treats_and_snacks = $this->input->post("checkup_treats_and_snacks");
        $known_food_allergies_or_intolerances = $this->input->post("checkup_known_food_allergies_or_intolerances");
        $water_intake = $this->input->post("checkup_water_intake");
        $daily_exercise_routine = $this->input->post("checkup_daily_exercise_routine");
        $average_duration_of_exercise = $this->input->post("checkup_average_duration_of_exercise");
        $frequency_of_exercise = $this->input->post("checkup_frequency_of_exercise");
        $restrictions_on_physical_activity = $this->input->post("checkup_restrictions_on_physical_activity");

        $user_name = $this->input->post("checkup_name");
        $user_email = $this->input->post("checkup_email");
        $user_primary_key = $this->input->post("checkup_primary_key");
        $current_tab = $this->input->post("checkup_current_tab");

        $this->model->MOD_ADD_CHECKUP_RESULT($user_primary_key, $user_name, $user_email, $pet_name, $species, $breed, $age, $weight, $spayed_neutered, $current_medications, $type_of_food, $feeding_schedule, $treats_and_snacks, $known_food_allergies_or_intolerances, $water_intake, $daily_exercise_routine, $average_duration_of_exercise, $frequency_of_exercise, $restrictions_on_physical_activity);

        $this->session->set_userdata("alert", array(
            "title" => "Request Submitted!",
            "message" => "Kindly ensure to regularly monitor your email for any responses from the veterinarian.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url() . $current_tab);
    }

    public function subscribe_to_news_letter()
    {
        $name = $this->input->post("subscribe_name");
        $email = $this->input->post("subscribe_email");
        $current_tab = $this->input->post("subscribe_current_tab");

        $email_exists = $this->model->MOD_CHECK_NEWS_LETTER_EMAIL($email);

        if (!$email_exists) {
            $this->model->MOD_ADD_TO_NEWS_LETTER($name, $email);

            $this->session->set_userdata("alert", array(
                "title" => "Success!",
                "message" => "Thank You for subscribing to our Newsletter!",
                "alert_type" => "success"
            ));
        } else {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "This email has already subscribed!",
                "alert_type" => "error"
            ));
        }

        header("Location: " . base_url() . $current_tab);
    }

    public function confirm_email()
    {
        $confirmation_code = $this->input->get("confirmation_code");

        $result = $this->model->MOD_CHECK_CONFIRMATION_CODE($confirmation_code);

        if ($result) {
            foreach ($result as $row) {
                $account_status = $row->account_status;
                $primary_key = $row->primary_key;
                $expiration_date = $row->expiration_date;
            }

            if (date('Y-m-d H:i:s') < $expiration_date) {
                if ($account_status == "pending") {
                    $this->model->MOD_UPDATE_CONFIRMATION_STATUS($primary_key);

                    $this->session->set_userdata("alert", array(
                        "title" => "Success!",
                        "message" => "Your account is now activated! Please login your account.",
                        "alert_type" => "success"
                    ));
                } else {
                    $this->session->set_userdata("alert", array(
                        "title" => "Oops...",
                        "message" => "The link you're trying to access is no longer valid!",
                        "alert_type" => "error"
                    ));
                }
            } else {
                $this->model->MOD_DELETE_ACCOUNT($primary_key);

                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "The link you're trying to access is no longer valid!",
                    "alert_type" => "error"
                ));
            }
        } else {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "The link you're trying to access is no longer valid!",
                "alert_type" => "error"
            ));
        }

        header("Location: " . base_url());
    }

    public function send_reset_code()
    {
        $email = $this->input->post("forgot_password_email");
        $current_tab = $this->input->post("forgot_password_current_tab");

        $email_exists = $this->model->MOD_CHECK_EMAIL($email);

        if ($email_exists) {
            foreach ($email_exists as $result) {
                $primary_key = $result->primary_key;
                $name = $result->name;
            }

            $current_time = time();
            $added_time = $current_time + (600);
            $expiration_date = date('Y-m-d H:i:s', $added_time);

            $confirmation_code = md5($this->generate_unique_key());

            $subject = "Reset your Password";
            $message =
                '
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#edf2f7;margin:0;padding:0;width:100%">
                    <tbody>
                        <tr>
                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">
                                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;margin:0;padding:0;width:100%">
                                    <tbody>
                                        <tr>
                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;padding:25px 0;text-align:center">
                                                <img src="https://lh3.googleusercontent.com/a-/AD_cMMQSGrbygIxaek5DDG2bipSB3ZIqRKVQjUQWxyXIqEFt3Q=s40-p" style="margin-right: 3px; width: 20px; height: 20px; display: inline-block; border-radius: 50%;" alt="logo">
                                                <h1 style="margin: 0; text-transform: capitalize; font-style: italic; display: inline-block;">
                                                    <span style="color: #ED6436;">PetsHealth</span>Management
                                                </h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" cellpadding="0" cellspacing="0" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#edf2f7;border-bottom:1px solid #edf2f7;border-top:1px solid #edf2f7;margin:0;padding:0;width:100%;border:hidden!important">
                                                <table class="m_-6454603622214203898inner-body" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;background-color:#ffffff;border-color:#e8e5ef;border-radius:2px;border-width:1px;margin:0 auto;padding:0;width:570px">
                                                    <tbody>
                                                        <tr>
                                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;max-width:100vw;padding:32px">
                                                            <h2 style="box-sizing:border-box; margin: 0; text-transform: capitalize; font-style: italic; text-align:center">
                                                            ' . $subject . '
                                                            </h2>
                                                            <br>
                                                            <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;line-height:1.5em;margin-top:0;font-size:13px;text-align:justify">
                                                                <br><br>
                                                                Dear Mr./Ms. ' . $name . ',
                                                                <br><br><br><br>
                                                                Please reset your password by clicking the button below:
                                                                <br><br><br><br>
                                                                <a href="' . base_url() . 'server/confirm_reset_code?confirmation_code=' . $confirmation_code . '" style="box-sizing:border-box; display: inline-block;padding: 10px 20px;font-size: 14px;font-weight: bold;text-align: center;text-decoration: none;border: none;border-radius: 5px;cursor: pointer;transition: background-color 0.3s ease; background-color: #007bff; color: #fff; width:100%">Reset your Password</a>
                                                                <br><br><br><br>
                                                                Please be reminded that you have <b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">5 minutes</b> to reset your password, or else your link will be invalidated.
                                                                <br><br><br>
                                                                Thank you.
                                                                <br><br><br><br><br>
                                                                <b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">Pets Health Management System</b>
                                                                <br><br><br>
                                                                *** This is a system generated message.<b style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">DO NOT REPLY TO THIS EMAIL</b>.***
                                                                <br>
                                                            </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif">
                                                <table class="m_-6454603622214203898footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;margin:0 auto;padding:0;text-align:center;width:570px">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;max-width:100vw;padding:32px">
                                                                <p style="box-sizing:border-box;font-family:-apple-system,BlinkMacSystemFont,Roboto,Helvetica,Arial,sans-serif;line-height:1.5em;margin-top:0;color:#b0adc5;font-size:12px;text-align:center">
                                                                    © 2023 Pets Health Management System. All rights reserved.
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ';

            $send_success = send_email($name, $email, $subject, $message, "Pets Health Management System", "noreply.pethealthmanagement@ssystem.online", "09465287111@Mark");

            if ($send_success) {
                $reset_password_status = "pending";

                $this->model->MOD_UPDATE_RESET_CODE($confirmation_code, $expiration_date, $reset_password_status, $primary_key);

                $this->session->set_userdata("reset_password_status", "check_email");

                $this->session->set_userdata("alert", array(
                    "title" => "Attention!",
                    "message" => "Please check your email.",
                    "alert_type" => "info"
                ));
            } else {
                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "An error has occured while sending your request. Please try again.",
                    "alert_type" => "error"
                ));
            }
        } else {
            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "The email provided does not exist in our records. Please double-check and try again.",
                "alert_type" => "error"
            ));
        }

        header("Location: " . base_url() . $current_tab);
    }

    public function confirm_reset_code()
    {
        $confirmation_code = $this->input->get("confirmation_code");

        $result = $this->model->MOD_CHECK_CONFIRMATION_CODE($confirmation_code);

        if ($result) {
            foreach ($result as $row) {
                $reset_password_status = $row->reset_password_status;
                $expiration_date = $row->expiration_date;
            }

            if (date('Y-m-d H:i:s') < $expiration_date && $reset_password_status == "pending") {
                if ($reset_password_status == "pending") {
                    $this->session->set_userdata("alert", array(
                        "title" => "Success!",
                        "message" => "You can now reset your password!",
                        "alert_type" => "success"
                    ));

                    $this->session->set_userdata("reset_code", $confirmation_code);
                    $this->session->set_userdata("reset_password_status", "pending");
                } else {
                    $this->session->set_userdata("reset_password_status", "expired");

                    $this->session->set_userdata("alert", array(
                        "title" => "Oops...",
                        "message" => "The link you're trying to access is no longer valid!",
                        "alert_type" => "error"
                    ));
                }
            } else {
                $this->session->set_userdata("reset_password_status", "expired");

                $this->session->set_userdata("alert", array(
                    "title" => "Oops...",
                    "message" => "The link you're trying to access is no longer valid!",
                    "alert_type" => "error"
                ));
            }
        } else {
            $this->session->set_userdata("reset_password_status", "expired");

            $this->session->set_userdata("alert", array(
                "title" => "Oops...",
                "message" => "The link you're trying to access is no longer valid!",
                "alert_type" => "error"
            ));
        }

        header("Location: " . base_url() . "forgot_password");
    }

    public function update_new_password()
    {
        $password = $this->input->post("update_new_password_new_password");
        $confirmation_code = $this->input->post("update_new_password_reset_code");

        $password = password_hash($password, PASSWORD_ARGON2I);
        $reset_password_status = "";

        $this->model->MOD_UPDATE_NEW_PASSWORD($password, $reset_password_status, $confirmation_code);

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "Your password has been changed.",
            "alert_type" => "success"
        ));

        header("Location: " . base_url());
    }

    public function logout()
    {
        $this->session->unset_userdata("primary_key");
        $this->session->unset_userdata("user_name");
        $this->session->unset_userdata("user_rfid_number");
        $this->session->unset_userdata("user_email");
        $this->session->unset_userdata("user_password");
        $this->session->unset_userdata("user_type");
        $this->session->unset_userdata("user_image");

        $this->session->set_userdata("alert", array(
            "title" => "Success!",
            "message" => "You've been successfully signed out!",
            "alert_type" => "success"
        ));

        header("Location: " . base_url());
    }

    private function convert_image_to_data_uri($image_id)
    {
        if (isset($_FILES[$image_id])) {
            $imageFile = $_FILES[$image_id]['tmp_name'];

            $imageData = file_get_contents($imageFile);

            $imageMimeType = $_FILES[$image_id]['type'];

            $base64Data = base64_encode($imageData);

            $dataUri = 'data:' . $imageMimeType . ';base64,' . $base64Data;

            return $dataUri;
        }
    }

    private function generate_unique_key()
    {
        $unique_key = strval(md5(rand(PHP_INT_MIN, PHP_INT_MAX)));

        $key_exists = $this->model->MOD_CHECK_PRIMARY_KEY($unique_key);

        if ($key_exists) {
            $this->Generate_Unique_Key();
        } else {
            return $unique_key;
        }
    }
}
