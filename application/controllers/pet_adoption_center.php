<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pet_adoption_center extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Pet Adoption Center |");
        define("PET_ADOPTION_CENTER", "active");

        $this->session->set_userdata("current_tab", "pet_adoption_center");

        $pet_id = $this->input->get("pet_id");

        $pets_data = $this->model->MOD_GET_PET_DATA($pet_id);

        if ($pets_data)
        {
            foreach ($pets_data as $pet_data)
            {
                $data["pet_primary_key"] = $pet_data->primary_key;
                $data["pet_name"] = $pet_data->pet_name;
                $data["species"] = $pet_data->species;
                $data["breed"] = $pet_data->breed;
                $data["age"] = $pet_data->age;
                $data["weight"] = $pet_data->weight;
                $data["sex"] = $pet_data->sex;
            }
        }

        $this->load->view('templates/header.php');
        $this->load->view('pages/pet_adoption_center_view.php', $data);
        $this->load->view('templates/footer.php');  
    }
}
