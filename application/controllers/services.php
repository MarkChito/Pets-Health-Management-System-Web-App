<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class services extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Services |");
        define("SERVICES", "active");

        $this->session->set_userdata("current_tab", "services");

        $this->load->view('templates/header.php');
        $this->load->view('pages/services_view.php');
        $this->load->view('templates/footer.php');
    }
}
