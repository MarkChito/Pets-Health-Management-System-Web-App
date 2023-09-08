<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class help extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Help |");
        define("HELP", "active");

        $this->session->set_userdata("current_tab", "faqs");

        $this->load->view('templates/header.php');
        $this->load->view('pages/help_view.php');
        $this->load->view('templates/footer.php');
    }
}
