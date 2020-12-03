<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->helper('captcha');
        $this->load->model('guestbook_model');
        $this->load->library('email');
        $vals = array(
            'img_path'      => './img/captcha/',
            'img_url'       =>  base_url('img/captcha'),
            'word_length'   => 4,
            'font_size'     => 20
        );
        $captcha = create_captcha($vals);
        $data = array(
            'captcha_time'  => $captcha['time'],
            'ip_address'    => $this->input->ip_address(),
            'word'          => $captcha['word']
        );
        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);

        if($this->input->method() == 'post') {
            $this->form_validation->set_rules('name', 'Name', 'trim|min_length[1]|max_length[255]|required|strip_tags|trim');
            $this->form_validation->set_rules('URL', 'URL', 'trim|min_length[10]|max_length[255]|strip_tags|trim');
            $this->form_validation->set_rules('message', 'Message', 'trim|min_length[10]|max_length[255]|required|strip_tags|trim');
            $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_check');

            if($this->form_validation->run()) {
                $name = $this->input->post('name');
                $url = $this->input->post('url');
                $message = $this->input->post('message');
                $data = array(
                    'name' => $name,
                    'url' => $url,
                    'message' => $message,
                    'ip' => $this->input->ip_address()
                );
                $this->guestbook_model->create($data);
                $this->email->from('contact@tomual.com');
                $this->email->to('erikartoda@gmail.com');
                $this->email->subject('Tomual Guestbook Submission');
                $this->email->message("$name ($url) left a message on the guestbook.");
                $this->email->send();

                $this->load->view('guestbook/thankyou');
                return;
            }
        }
        $entries = $this->guestbook_model->get_all();
        $this->load->view('guestbook/guestbook', compact('captcha', 'entries'));
    }

    public function captcha_check($string)
    {
        // First, delete old captchas
        $expiration = time() - 7200; // Two hour limit
        $this->db->where('captcha_time < ', $expiration)->delete('captcha');

        // Then see if a captcha exists:
        $sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
        $binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();

        if ($row->count == 0)
        {
            $this->form_validation->set_message('captcha_check', 'You must submit the word that appears in the image');
            return FALSE;
        }
        return TRUE;
    }
}
