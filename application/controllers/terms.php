<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class terms extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Terms of Service |");
        define("TERMS", "active");

        $this->session->set_userdata("current_tab", "terms");

        $this->load->view('templates/header.php');
        $this->load->view('pages/terms_view.php');
        $this->load->view('templates/footer.php');
    }
}
