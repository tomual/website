<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert('posts', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('posts', $data);
    }

    public function get_post($id)
    {
        $this->db->where('posts.id', $id);
        $result = $this->db->get('posts')->first_row();
        return $result;
    }

    public function get_posts()
    {
        $this->db->order_by('created', 'DESC');
        $this->db->order_by('id', 'DESC');
        $results = $this->db->get('posts')->result();
        return $results;
    }

    public function get_latest()
    {
        $this->db->order_by('created', 'DESC');
        $this->db->order_by('id', 'DESC');
        $this->db->group_by('id');
        $this->db->limit('5');
        $results = $this->db->get('posts')->result();
        return $results;
    }

    public function get_archive()
    {
        $this->db->select('id, title, created');
        $this->db->order_by('created', 'DESC');
        $results = $this->db->get('posts')->result();

        $archive = array();
        foreach ($results as $post) {
            $year = date('Y', strtotime($post->created));
            $month = date('M', strtotime($post->created));
            $archive[$year][$month][] = $post;
        }

        return $archive;
    }
}
