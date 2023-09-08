<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faqs extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Frequently Asked Questions |");
        define("FAQS", "active");

        $this->session->set_userdata("current_tab", "faqs");

        $this->load->view('templates/header.php');
        $this->load->view('pages/faqs_view.php');
        $this->load->view('templates/footer.php');
    }
}
