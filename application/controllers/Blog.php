<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('posts_model');
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

        $posts = $this->posts_model->get_posts();
        $pagination = paginate($posts);
        set_meta('title', 'Blog');
        $this->load->view('blog/all', array('posts' => $posts, 'pagination' => $pagination));
    }

    public function gogo() 
    {
        if(!$this->session->userdata('logged_in'))
        {
            redirect(base_url('home/login'));
        }

        if($this->input->method() == 'post')
        {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');

            // Get current date time
            $publish_date = date("Y-m-d H:i:s");

            // Put it all together
            $data = array(
                'title'     => $this->input->post('title'),
                'content'   => $this->input->post('content'),
                'publish_date' => $publish_date,
                'tags'      => $this->input->post('tags')
            );

            if($this->form_validation->run() !== FALSE)
            {
                // Create the post
                $this->posts_model->create($data);
            }
            else
            {
                $this->session->set_flashdata('error', 'There are errors in the post.');
            }
        }

        $this->load->view('blog/create');
    }

    public function gogogo($post_id)
    {
        if(!$this->session->userdata('logged_in'))
        {
            redirect(base_url('home/login'));
        }

        $post = $this->posts_model->get_post($post_id);

        if($this->input->method() == 'post')
        {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');

            if($this->form_validation->run() !== FALSE)
            {
                $data = array(
                    'title'     => $this->input->post('title'),
                    'content'   => $this->input->post('content'),
                    'tags'      => $this->input->post('tags')
                );

                // Update the post
                $this->posts_model->update($post_id, $data);
                redirect("blog/view/$post_id");
            }
            else
            {
                $this->session->set_flashdata('error', 'There are errors in the post.');
            }
        }

        $post->tags = str_replace('-', ' ', $post->tags);
        $post->tags = str_replace(',', ', ', $post->tags);
        $this->load->view('blog/edit', array('post' => $post));
    }

    public function view($post_id, $title = null)
    {
        $post = $this->posts_model->get_post($post_id);
        if($post)
        {
            set_meta('title', $post->title);
        }
        else
        {
            set_meta('title', 'Post Not Found');
        }
        $this->load->view('blog/view', array('post' => $post));
    }

}
