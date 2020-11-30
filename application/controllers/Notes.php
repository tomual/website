<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {

    public function index()
    {
        set_meta('title', 'Notes');
        $this->load->view('notes');
    }
}
