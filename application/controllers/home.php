<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", null);
        define("HOME", "active");

        $this->session->set_userdata("current_tab", "home");

        $this->load->view('templates/header.php');
        $this->load->view('pages/home_view.php');
        $this->load->view('templates/footer.php');
    }
}
