<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert('guestbook', $data);
    }

    public function get_all()
    {
        $this->db->where('removed', 0);
        $this->db->order_by('created', 'DESC');
        $results = $this->db->get('guestbook')->result();
        return $results;
    }

}