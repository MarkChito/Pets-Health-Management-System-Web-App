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

        $this->load->view('templates/header.php');
        $this->load->view('pages/pet_adoption_center_view.php');
        $this->load->view('templates/footer.php');
    }
}
