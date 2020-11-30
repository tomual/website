<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stuff extends CI_Controller {

    public function index()
    {
        set_meta('title', 'Stuff');
        $this->load->view('stuff/stuff');
    }

    public function backgrounds()
    {
        set_meta('title', 'Backgrounds');
        $this->load->view('stuff/backgrounds');
    }

    public function bullets()
    {
        set_meta('title', 'Bullets');
        $this->load->view('stuff/bullets');
    }

    public function emoticons()
    {
        set_meta('title', 'Emoticons');
        $this->load->view('stuff/emoticons');
    }

    public function toybox($folder = null)
    {
        $images = array();
        if($folder) {
            $directory = "/home/tomualco/public_html/img/toybox/$folder/";
            // $directory = "C:/wamp/www/tomual/img/toybox/$folder/";
            $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);
            set_meta('title', 'Toybox');
        }
        $this->load->view('stuff/toybox', compact('images'));
    }

    public function unsupported_value_type_error()
    {
        set_meta('title', '"Unsupported Value Type" Error');
        $this->load->view('stuff/unsupported_value_type_error');
    }
    
    public function acpi_error_spam()
    {
        set_meta('title', 'ACPI Error Spam spam');
        $this->load->view('stuff/acpi_error_spam');
    }

    public function zero_disk_space_remaining_linux()
    {
        set_meta('title', '0 Disk Space Remaining on Linux');
        $this->load->view('stuff/zero_disk_space_remaining_linux');
    }

    public function blog_layouts($layout = null)
    {
        if(!$layout)
        {
            set_meta('title', 'Blog Layouts');
            $this->load->view('stuff/blog_layouts');
        }
        else
        {
            set_meta('title', ucwords(str_replace('-', ' ', $layout)));
            $this->load->view('stuff/blog_layouts/' . str_replace('-', '_', $layout));
        }
    }

    public function php_blog_walkthrough_with_codeigniter($chapter = 1)
    {
        if($chapter < 1 || $chapter > 3) {
            $chapter = 1;
        }
        set_meta('title', 'PHP Blog Walkthrough with CodeIgniter 3 - Chapter ' . $chapter);
        $this->load->view('stuff/php_blog_walkthrough_with_codeigniter_' . $chapter);
    }

    public function setting_up_a_website_walkthrough()
    {
        $this->load->view('stuff/setting_up_a_website_walkthrough');
    }
}