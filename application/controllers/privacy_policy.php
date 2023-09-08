<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class privacy_policy extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Privacy Policy |");
        define("PRIVACY_POLICY", "active");

        $this->session->set_userdata("current_tab", "privacy_policy");

        $this->load->view('templates/header.php');
        $this->load->view('pages/privacy_policy_view.php');
        $this->load->view('templates/footer.php');
    }
}
