<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about_us extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "About Us |");
        define("ABOUT_US", "active");

        $this->session->set_userdata("current_tab", "about_us");

        $this->load->view('templates/header.php');
        $this->load->view('pages/about_us_view.php');
        $this->load->view('templates/footer.php');
    }
}
