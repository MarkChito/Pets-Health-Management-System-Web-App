<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class missing_pets extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Missing Pets |");
        define("MISSING_PETS", "active");

        $this->session->set_userdata("current_tab", "missing_pets");

        $this->load->view('templates/header.php');
        $this->load->view('pages/missing_pets_view.php');
        $this->load->view('templates/footer.php');
    }
}
