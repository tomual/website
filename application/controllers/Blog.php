<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->all();
    }

    public function all()
    {
        $this->load->helper('pagination');
        $this->load->helper('html');
        $this->load->helper('post');

        $latest =  $this->post_model->get_latest();
        $posts = $this->post_model->get_posts();
        $pagination = paginate($posts);
        set_title('Blog');
        $this->load->view('blog/list', compact('posts', 'pagination', 'latest'));
    }

    public function view($post_id, $title = null)
    {
        $post = $this->post_model->get_post($post_id);
        if ($post) {
            set_title($post->title);
        } else {
            set_title('Post Not Found');
        }
        $this->load->view('blog/show', array('post' => $post));
    }

    public function archive()
    {
        $archive = $this->post_model->get_archive();
        $this->load->view('blog/archive', compact('archive'));
    }
}
