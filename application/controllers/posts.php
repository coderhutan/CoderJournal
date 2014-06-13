<?php

class Posts extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('post');
	}

	function index($start = 0) {
		$data['posts'] = $this->post->get_posts(5, $start);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/posts/index/';
		$config['total_rows'] = $this->post->get_posts_count();
		$config['per_page'] = 5;
		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();
		$this->load->view('header');
		$this->load->view('post_index', $data );
		$this->load->view('footer');
	} 

	function post($postID) {
		$data['post'] = $this->post->get_post($postID);
		$this->load->view('header');
		$this->load->view('post', $data);
		$this->load->view('footer');
	}

	function new_post() {
		if(!$this->session->userdata('userID')) {
			redirect(base_url().'index.php/users/login');
		}
		if($_POST) {
			$data=array(
				'title' => $_POST['title'],
				'post' => $_POST['post'],
				'textcolor' => $_POST['textcolor'],
				'bgcolor' => $_POST['bgcolor'],
				'active' => 1
				);

			$this->post->insert_post($data);
			redirect(base_url());
		} else {
			$this->load->view('header');
			$this->load->view('new_post');
			$this->load->view('footer');
		}
	}

	function editpost($postID) {
		if(!$this->session->userdata('userID')) {
			redirect(base_url().'index.php/users/login');
		}

		$data['success'] = 0;
		if($_POST) {
			$data_post = array(
				'title' => $_POST['title'],
				'post' => $_POST['post'],
				'textcolor' => $_POST['textcolor'],
				'bgcolor' => $_POST['bgcolor'],
				'active' => 1
				);
			unset($data['success']);
			$this->post->update_post($postID, $data_post);
			$data['success'] = 1;
		}

		$data['post'] = $this->post->get_post($postID);
		$this->load->view('header');
		$this->load->view('edit_post', $data);
		$this->load->view('footer');
	}

	function deletepost($postID) {
		if(!$this->session->userdata('userID')) {
			redirect(base_url().'index.php/users/login');
		}
		$this->post->delete_post($postID);
		redirect(base_url());
	}
}

