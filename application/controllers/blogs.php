<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogs extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('model');
    }

    public function index()
    {
        define("TITLE", "Blogs |");
        define("BLOGS", "active");

        $this->session->set_userdata("current_tab", "blogs");

        $this->load->view('templates/header.php');
        $this->load->view('pages/blogs_view.php');
        $this->load->view('templates/footer.php');
    }
}
