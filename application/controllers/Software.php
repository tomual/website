<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Software extends MY_Controller
{
    public function index()
    {
        set_title('Software');
        $this->load->view('software/index');
    }
}
