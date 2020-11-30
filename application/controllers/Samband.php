<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samband extends CI_Controller {

    public function index()
    {
    	$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('captcha');
		$this->load->library('email');

		$vals = array(
	        'img_path'      => './img/captcha/',
	        'img_url'       =>  base_url('img/captcha'),
	        'word_length'   => 3,
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
    		$this->form_validation->set_rules('name', 'Name', 'trim|required');
    		$this->form_validation->set_rules('message', 'Message', 'trim|required');
			$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_check');

    		if($this->form_validation->run()) {
    			$name = $this->input->post('name');
    			$email = $this->input->post('email');
    			$message = $this->input->post('message');
    			$data = array(
    				'name' => $name,
    				'email' => $email,
    				'message' => $message,
    				'ip' => $this->input->ip_address()
    			);
    			$this->db->insert('contact', $data);
				$this->email->from('contact@tomual.com');
				$this->email->to('erikartoda@gmail.com');
				$this->email->subject('Tomual Contact Form Submission');
				$this->email->message("$name ($email) says: $message");
				$this->email->send();

    			redirect('contact/thankyou');
    		}
    	}

        set_meta('title', 'Contact');
        $this->load->view('contact/contact', compact('captcha'));
    }

    public function thankyou() {
        $this->load->view('contact/thankyou');
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
