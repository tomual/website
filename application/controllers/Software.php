<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Software extends CI_Controller {

    public function index()
    {
        set_meta('title', 'Software');
        $this->load->view('software/software');
    }
}
