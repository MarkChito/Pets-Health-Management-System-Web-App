<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class online_pet_health_assessment extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Online Pet Health Assessment |");
        define("ONLINE_PET_HEALTH_ASSESSMENT", "active");

        $this->session->set_userdata("current_tab", "online_pet_health_assessment");

        $this->load->view('templates/header.php');
        $this->load->view('pages/online_pet_health_assessment_view.php');
        $this->load->view('templates/footer.php');
    }
}
