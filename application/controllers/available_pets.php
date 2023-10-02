<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class available_pets extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Available Pets |");
        define("AVAILABLE_PETS", "active");

        $this->session->set_userdata("current_tab", "available_pets");

        $this->load->view('templates/header.php');
        $this->load->view('pages/available_pets_view.php');
        $this->load->view('templates/footer.php');
    }
}
