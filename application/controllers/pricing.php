<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pricing extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Pricing |");
        define("PRICING", "active");

        $this->session->set_userdata("current_tab", "pricing");

        $this->load->view('templates/header.php');
        $this->load->view('pages/pricing_view.php');
        $this->load->view('templates/footer.php');
    }
}
