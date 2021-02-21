<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ezine extends MY_Controller
{
    public function intro()
    {
        $this->load->view('ezine/index');
    }
}
