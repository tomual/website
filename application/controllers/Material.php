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
        set_breadcrumbs([
            'material' => base_url('material'),
            'graphics' => null
        ]);
        $this->load->view('material/graphics');
    }

    public function backgrounds()
    {
        set_title('Backgrounds');
        set_breadcrumbs([
            'material' => base_url('material'),
            'backgrounds' => null
        ]);
        $this->load->view('material/backgrounds');
    }

    public function bullets()
    {
        set_title('Bullets');
        set_breadcrumbs([
            'material' => base_url('material'),
            'bullets' => null
        ]);
        $this->load->view('material/bullets');
    }

    public function emoticons()
    {
        set_title('Emoticons');
        set_breadcrumbs([
            'material' => base_url('material'),
            'emoticons' => null
        ]);
        $this->load->view('material/emoticons');
    }

    public function layouts($layout = null)
    {
        if (!$layout) {
            set_title('Layouts');
            set_breadcrumbs([
            'material' => base_url('material'),
            'layouts' => null
            ]);
            $this->load->view('material/layouts');
        } else {
            set_title(ucwords(str_replace('-', ' ', $layout)));
            set_breadcrumbs([
                'material' => base_url('material'),
                'layouts' => base_url('material/layouts'),
                $layout => null
            ]);
            $this->load->view('material/layouts/' . str_replace('-', '_', $layout));
        }
    }
}
