<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('home');
    }

    public function login()
    {
        if($this->input->method(TRUE) == 'POST')
        {
            $key = $this->input->post('key');
            if($key == 'jungkookie')
            {
                $this->session->set_userdata('logged_in', TRUE);
                redirect('blog/gogo');
            }
            sleep(15);
        }
        $this->load->view('login');
    }
}
