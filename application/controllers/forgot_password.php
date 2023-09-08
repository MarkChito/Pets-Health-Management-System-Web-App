<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_password extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Forgot Password |");
        define("FORGOT_PASSWORD", "active");

        $this->session->set_userdata("current_tab", "forgot_password");

        $this->load->view('templates/header.php');
        $this->load->view('pages/forgot_password_view.php');
        $this->load->view('templates/footer.php');
    }
}
