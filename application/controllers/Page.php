<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends MY_Controller
{
    public function index()
    {
        set_title('Welcome');
        $this->load->view('home');
    }
    public function about()
    {
        set_title('About');
        $this->load->view('about');
    }
}
