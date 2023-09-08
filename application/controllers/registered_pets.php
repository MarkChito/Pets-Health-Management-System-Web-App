<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registered_pets extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Registered Pets |");
        define("REGISTERED_PETS", "active");

        $this->session->set_userdata("current_tab", "registered_pets");

        $this->load->view('templates/header.php');
        $this->load->view('pages/registered_pets_view.php');
        $this->load->view('templates/footer.php');
    }
}
