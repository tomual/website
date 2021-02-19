<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Material extends MY_Controller
{
    public function index()
    {
        set_title('Material');
        $this->load->view('material/index');
    }

    public function graphics()
    {
        set_title('Graphics');
        $this->load->view('material/graphics');
    }

    public function backgrounds()
    {
        set_title('Backgrounds');
        $this->load->view('material/backgrounds');
    }

    public function bullets()
    {
        set_title('Bullets');
        $this->load->view('material/bullets');
    }

    public function emoticons()
    {
        set_title('Emoticons');
        $this->load->view('material/emoticons');
    }

    public function layouts($layout = null)
    {
        if (!$layout) {
            set_title('Layouts');
            $this->load->view('material/layouts');
        } else {
            set_title(ucwords(str_replace('-', ' ', $layout)));
            $this->load->view('material/layouts/' . str_replace('-', '_', $layout));
        }
    }
}
