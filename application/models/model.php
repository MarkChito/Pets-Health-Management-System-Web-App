<?php

class model extends CI_Model
{
    /*============================== SELECT QUERIES ==============================*/
    public function MOD_GET_USER_DATA($primary_key)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_useraccounts` WHERE `primary_key`=?";
        $query = $this->db->query($sql, array($primary_key));

        return $query->result();
    }

    public function MOD_CHECK_NEWS_LETTER_EMAIL($email)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_newsletter` WHERE `email`=?";
        $query = $this->db->query($sql, array($email));

        return $query->result();
    }

    public function MOD_CHECK_EMAIL($email)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_useraccounts` WHERE `email`=?";
        $query = $this->db->query($sql, array($email));

        return $query->result();
    }

    public function MOD_CHECK_RFID_NUMBER($rfid_number)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_useraccounts` WHERE `rfid_number`=?";
        $query = $this->db->query($sql, array($rfid_number));

        return $query->result();
    }

    public function MOD_CHECK_PRIMARY_KEY($unique_key)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_useraccounts` WHERE `confirmation_code`=?";
        $query = $this->db->query($sql, array($unique_key));

        return $query->result();
    }

    public function MOD_GET_PETS_DATA()
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_pets` ORDER BY `primary_key` DESC";
        $query = $this->db->query($sql, array());

        return $query->result();
    }
    
    public function MOD_GET_MISSING_PETS_DATA()
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_missingpets` ORDER BY `primary_key` DESC";
        $query = $this->db->query($sql, array());

        return $query->result();
    }

    public function MOD_GET_COMMENTS($blog_primary_key)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_blogcomments` WHERE `blog_primary_key`=? ORDER BY `primary_key` DESC";
        $query = $this->db->query($sql, array($blog_primary_key));

        return $query->result();
    }
    
    public function MOD_GET_PETS_COMMENTS_DATA($missing_pet_primary_key)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_missingpetscomments` WHERE `missing_pet_primary_key`=? ORDER BY `primary_key` DESC";
        $query = $this->db->query($sql, array($missing_pet_primary_key));

        return $query->result();
    }
    
    public function MOD_GET_APPOINTMENTS_DATA($primary_key)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_appointments` WHERE `user_primary_key`=? ORDER BY `primary_key` DESC";
        $query = $this->db->query($sql, array($primary_key));

        return $query->result();
    }
    
    public function MOD_CHECK_CONFIRMATION_CODE($confirmation_code)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_useraccounts` WHERE `confirmation_code`=?";
        $query = $this->db->query($sql, array($confirmation_code));

        return $query->result();
    }
    
    public function MOD_AVAILABLE_PETS_DATA()
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_pets` ORDER BY `primary_key` DESC";
        $query = $this->db->query($sql);

        return $query->result();
    }
    
    public function MOD_GET_PET_DATA($pet_id)
    {
        $sql = "SELECT * FROM `tbl_pethealthmanagement_pets` WHERE `primary_key`=?";
        $query = $this->db->query($sql, array($pet_id));

        return $query->result();
    }

    /*============================== INSERT QUERIES ==============================*/
    public function MOD_ADD_TO_NEWS_LETTER($name, $email)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_newsletter` (`name`, `email`) VALUES (?,?)";

        $this->db->query($sql, array($name, $email));
    }

    public function MOD_INSERT_USER_ACCOUNT($name, $rfid_number, $email, $password, $user_type, $confirmation_code, $expiration_date, $account_status, $image)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_useraccounts` (`name`, `rfid_number`, `email`, `password`, `user_type`, `confirmation_code`, `expiration_date`, `account_status`, `image`) VALUES (?,?,?,?,?,?,?,?,?)";

        $this->db->query($sql, array($name, $rfid_number, $email, $password, $user_type, $confirmation_code, $expiration_date, $account_status, $image));
    }

    public function MOD_ADD_APPOINTMENT($user_primary_key, $name, $email, $date, $time, $agenda, $status)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_appointments` (`user_primary_key`, `name`, `email`, `date`, `time`, `agenda`, `status`) VALUES (?,?,?,?,?,?,?)";

        $this->db->query($sql, array($user_primary_key, $name, $email, $date, $time, $agenda, $status));
    }

    public function MOD_ADD_PET($date_posted, $user_primary_key, $user_name, $user_image, $pet_name, $species, $breed, $age, $weight, $sex, $spayed_neutered, $current_medications, $image)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_pets` (`date_posted`, `user_primary_key`, `user_name`, `user_image`, `pet_name`, `species`, `breed`, `age`, `weight`, `sex`, `spayed_neutered`, `current_medications`, `image`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->query($sql, array($date_posted, $user_primary_key, $user_name, $user_image, $pet_name, $species, $breed, $age, $weight, $sex, $spayed_neutered, $current_medications, $image));
    }

    public function MOD_ADD_COMMENT($blog_primary_key, $name, $image, $date, $time, $message)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_blogcomments` (`blog_primary_key`, `name`, `image`, `date`, `time`, `message`) VALUES (?,?,?,?,?,?)";

        $this->db->query($sql, array($blog_primary_key, $name, $image, $date, $time, $message));
    }
    
    public function MOD_ADD_MISSING_PET_COMMENT($missing_pet_primary_key, $user_name, $user_image, $date, $time, $message)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_missingpetscomments` (`missing_pet_primary_key`, `user_name`, `user_image`, `date`, `time`, `message`) VALUES (?,?,?,?,?,?)";

        $this->db->query($sql, array($missing_pet_primary_key, $user_name, $user_image, $date, $time, $message));
    }
    
    public function MOD_ADOPT_A_PET($user_primary_key, $name, $email, $mobile_number, $address, $pet_primary_key, $pet_name, $type_of_pet, $breed, $gender, $age, $weight, $type_of_residence, $ownership, $availability_of_a_fenced_yard_or_outdoor_space, $activity_level, $experience_with_pets, $compatibility_with_children_or_other_pets_in_the_household, $any_specific_considerations_or_requirements)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_petadopters` (`user_primary_key`, `name`, `email`, `mobile_number`, `address`, `pet_primary_key`, `pet_name`, `type_of_pet`, `breed`, `gender`, `age`, `weight`, `type_of_residence`, `ownership`, `availability_of_a_fenced_yard_or_outdoor_space`, `activity_level`, `experience_with_pets`, `compatibility_with_children_or_other_pets_in_the_household`, `any_specific_considerations_or_requirements`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->query($sql, array($user_primary_key, $name, $email, $mobile_number, $address, $pet_primary_key, $pet_name, $type_of_pet, $breed, $gender, $age, $weight, $type_of_residence, $ownership, $availability_of_a_fenced_yard_or_outdoor_space, $activity_level, $experience_with_pets, $compatibility_with_children_or_other_pets_in_the_household, $any_specific_considerations_or_requirements));
    }
    
    public function MOD_ADD_MISSING_PET($date_posted, $user_primary_key, $user_name, $user_email, $user_image, $pet_name, $species, $breed, $age, $sex, $spayed_neutered, $last_seen_location, $last_seen_date, $last_seen_time, $additional_information, $image, $status)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_missingpets` (`date_posted`, `user_primary_key`, `user_name`, `user_email`, `user_image`, `pet_name`, `species`, `breed`, `age`, `sex`, `spayed_neutered`, `last_seen_location`, `last_seen_date`, `last_seen_time`, `additional_information`, `image`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->query($sql, array($date_posted, $user_primary_key, $user_name, $user_email, $user_image, $pet_name, $species, $breed, $age, $sex, $spayed_neutered, $last_seen_location, $last_seen_date, $last_seen_time, $additional_information, $image, $status));
    }
    
    public function MOD_ADD_CHECKUP_RESULT($user_primary_key, $user_name, $user_email, $pet_name, $species, $breed, $age, $weight, $spayed_neutered, $current_medications, $type_of_food, $feeding_schedule, $treats_and_snacks, $known_food_allergies_or_intolerances, $water_intake, $daily_exercise_routine, $average_duration_of_exercise, $frequency_of_exercise, $restrictions_on_physical_activity)
    {
        $sql = "INSERT INTO `tbl_pethealthmanagement_healthassessment` (`user_primary_key`, `user_name`, `user_email`, `pet_name`, `species`, `breed`, `age`, `weight`, `spayed_neutered`, `current_medications`, `type_of_food`, `feeding_schedule`, `treats_and_snacks`, `known_food_allergies_or_intolerances`, `water_intake`, `daily_exercise_routine`, `average_duration_of_exercise`, `frequency_of_exercise`, `restrictions_on_physical_activity`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->query($sql, array($user_primary_key, $user_name, $user_email, $pet_name, $species, $breed, $age, $weight, $spayed_neutered, $current_medications, $type_of_food, $feeding_schedule, $treats_and_snacks, $known_food_allergies_or_intolerances, $water_intake, $daily_exercise_routine, $average_duration_of_exercise, $frequency_of_exercise, $restrictions_on_physical_activity));
    }

    /*============================== UPDATE QUERIES ==============================*/
    public function MOD_UPDATE_ACCOUNT($name, $rfid_number, $password, $image, $primary_key)
    {
        $sql = "UPDATE `tbl_pethealthmanagement_useraccounts` SET `name`=?, `rfid_number`=?, `password`=?, `image`=? WHERE `primary_key`=?";

        $this->db->query($sql, array($name, $rfid_number, $password, $image, $primary_key));
    }

    public function MOD_EDIT_PET($pet_name, $species, $breed, $age, $weight, $sex, $spayed_neutered, $current_medications, $image, $primary_key)
    {
        $sql = "UPDATE `tbl_pethealthmanagement_pets` SET `pet_name`=?, `species`=?, `breed`=?, `age`=?, `weight`=?, `sex`=?, `spayed_neutered`=?, `current_medications`=?, `image`=? WHERE `primary_key`=?";

        $this->db->query($sql, array($pet_name, $species, $breed, $age, $weight, $sex, $spayed_neutered, $current_medications, $image, $primary_key));
    }
    
    public function MOD_EDIT_MISSING_PET($pet_name, $species, $breed, $age, $sex, $spayed_neutered, $last_seen_location, $last_seen_date, $last_seen_time, $additional_information, $image, $status, $primary_key)
    {
        $sql = "UPDATE `tbl_pethealthmanagement_missingpets` SET `pet_name`=?, `species`=?, `breed`=?, `age`=?, `sex`=?, `spayed_neutered`=?, `last_seen_location`=?, `last_seen_date`=?, `last_seen_time`=?, `additional_information`=?, `image`=?, `status`=? WHERE `primary_key`=?";

        $this->db->query($sql, array($pet_name, $species, $breed, $age, $sex, $spayed_neutered, $last_seen_location, $last_seen_date, $last_seen_time, $additional_information, $image, $status, $primary_key));
    }
    
    public function MOD_UPDATE_CONFIRMATION_STATUS($primary_key)
    {
        $sql = "UPDATE `tbl_pethealthmanagement_useraccounts` SET `account_status`='activated' WHERE `primary_key`=?";

        $this->db->query($sql, array($primary_key));
    }
    
    public function MOD_UPDATE_RESET_CODE($confirmation_code, $expiration_date, $reset_password_status, $primary_key)
    {
        $sql = "UPDATE `tbl_pethealthmanagement_useraccounts` SET `confirmation_code`=?, `expiration_date`=?, `reset_password_status`=? WHERE `primary_key`=?";

        $this->db->query($sql, array($confirmation_code, $expiration_date, $reset_password_status, $primary_key));
    }
    
    public function MOD_UPDATE_NEW_PASSWORD($password, $reset_password_status, $confirmation_code)
    {
        $sql = "UPDATE `tbl_pethealthmanagement_useraccounts` SET `password`=?, `reset_password_status`=? WHERE `confirmation_code`=?";

        $this->db->query($sql, array($password, $reset_password_status, $confirmation_code));
    }

    /*============================== DELETE QUERIES ==============================*/
    public function MOD_DELETE_ACCOUNT($primary_key)
    {
        $sql = "DELETE FROM `tbl_pethealthmanagement_useraccounts` WHERE `primary_key`=?";

        $this->db->query($sql, array($primary_key));
    }
}
