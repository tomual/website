<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        set_meta('title', 'About');
        $this->load->view('about/about');
    }

    public function bookmarks() {
    	set_meta('title', 'Bookmarks');
    	$this->load->view('about/bookmarks');
    }
}
