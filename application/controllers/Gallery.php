<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function index()
    {
        set_meta('title', 'Gallery');
        $this->load->view('gallery/gallery');
    }
}
