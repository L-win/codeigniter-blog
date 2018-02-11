<?php
	
	class Posts extends CI_Controller {
		
		public function index( ){
			
			$data['title'] = 'posts title';
			$data['posts'] = $this -> Post_model -> get_posts( );
			
			$this -> load -> view ( 'templates/header', $data );
			$this -> load -> view ( 'posts/index', $data );
			$this -> load -> view ( 'templates/footer' );
			
		}
		
		public function view( $slug ){
			
			$data['title'] = 'post title';
			$data['post'] = $this -> Post_model -> get_posts( $slug );
			
			$this -> load -> view ( 'templates/header', $data );
			$this -> load -> view ( 'posts/view', $data );
			$this -> load -> view ( 'templates/footer' );
			
		}
		
		public function create( ){
			
			if ( !$this->session->userdata('logged_in') ) redirect('users/login');
			
			$data['title'] = 'Create post';
			
			$this -> form_validation -> set_rules( 'title', 'Title', 'required' );
			$this -> form_validation -> set_rules( 'body', 'Body', 'required' );
			
			if( $this -> form_validation -> run() === FALSE ){ 
				$this -> load -> view ( 'templates/header', $data );
				$this -> load -> view ( 'posts/create', $data );
				$this -> load -> view ( 'templates/footer' );
			}else{
				$this -> Post_model -> create_post();
				$data['title'] = 'Success!';
				$this -> load -> view ( 'templates/header', $data );
				$this -> load -> view ('posts/success');
				$this -> load -> view ( 'templates/footer' );
			}
			
		}
		
		public function delete( $id ){
			if ( !$this->session->userdata('logged_in') ) redirect('users/login');
			$this->Post_model->delete_post($id);
			redirect('posts');
		}
		
		public function edit( $slug ){
			
			if ( !$this->session->userdata('logged_in') ) redirect('users/login');
			
			$data['post'] = $this -> Post_model -> get_posts( $slug );
			$data['title'] = 'Edit '.$data['post']['title'];
			
			$this -> load -> view ( 'templates/header', $data );
			$this -> load -> view ( 'posts/edit', $data );
			$this -> load -> view ( 'templates/footer' );
			
		}

		public function update( ){
			
			if ( !$this->session->userdata('logged_in') ) redirect('users/login');
			
			$this->Post_model->update_post();
			redirect('posts');
			
		}
		
	}