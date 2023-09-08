<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appointments extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Appointments |");
        define("APPOINTMENTS", "active");

        $this->session->set_userdata("current_tab", "appointments");

        $this->load->view('templates/header.php');
        $this->load->view('pages/appointments_view.php');
        $this->load->view('templates/footer.php');
    }
}
