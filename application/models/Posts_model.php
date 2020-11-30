<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert('posts', $data);
    }

    public function update($post_id, $data)
    {
        $this->db->where('post_id', $post_id);
        $this->db->update('posts', $data);
    }

    public function get_post($post_id)
    {
        $this->db->where('posts.post_id', $post_id);
        $result = $this->db->get('posts')->first_row();
        return $result;
    }

    public function get_posts()
    {
        $this->db->order_by('publish_date', 'DESC');
        $this->db->order_by('post_id', 'DESC');
        $this->db->group_by('post_id');
        $results = $this->db->get('posts')->result();
        return $results;
    }
}