<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function index()
    {
        set_meta('title', 'Gallery');
        $this->load->view('gallery/gallery');
    }

    public function illustration($item = null)
    {
        $this->load->helper('form');
        set_meta('title', 'Illustration');

        if ($this->input->method() == 'post') {
            redirect('gallery/illustration/' . $this->input->post('item'));
        } elseif($item) {
            $directory = "/home/tomualco/public_html/img/illustration/$item/";
            $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);
            $index = $this->input->get('page') ?? 0;
            $this->load->view('gallery/illustration/viewer', compact('images', 'index'));
            return;
        }

        $this->load->view('gallery/illustration/picker');
    }

    public function photo($album = null)
    {
        set_meta('title', 'Photo');
        if(!$album) {
            $this->load->view('gallery/photo');
            return;
        } else {
            $directory = "C:/wamp/www/tomual/img/photos/$album/";
            // $directory = "/home/tomualco/public_html/img/photos/$album/";
            $images = glob($directory . "*.{jpg,JPG,png,gif}", GLOB_BRACE);
            $index = $this->input->get('page') ?? 0;
            if($images) {
                $this->load->view('gallery/album', compact('images', 'index'));
                return;
            }
        }

        redirect('gallery/photo');
    }

    public function sites()
    {
        set_meta('title', 'Sites');
        $this->load->view('gallery/sites');
    }
}
