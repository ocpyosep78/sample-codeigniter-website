<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sample Website
 *
 * @package		Website
 * @author		Andrew Kustes
 * @copyright	Copyright (c) 2013, Andrew Kustes
 * @since		Version 1.0
 * @category	Controllers
 * @description Messages Controller
 * @Files		./system/application/views/messages.php
 * 				./system/application/models/messages_model.php
 */

// ------------------------------------------------------------------------

class Messages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		// Load the Messages Model 
		$this->load->model('messages_model');
	}

/*
|---------------------------------------------------------------
| VIEWS
|---------------------------------------------------------------
*/ 
	public function index()
	{
		
		$data['messages'] = $this->messages_model->get_messages();
		
		$this->load->view('header');
		$this->load->view('messages/index', $data);
		$this->load->view('footer');
	}
	
	
	public function edit()
	{
		$message = $this->messages_model->get_message($this->uri->segment(3, 0));
		
		$data['id'] = $message['id'];
		$data['name'] = $message['name'];
		$data['phone'] = $message['phone'];
		$data['email'] = $message['email'];
		$data['message'] = $message['message'];
		
		$this->load->view('header');
		$this->load->view('messages/edit', $data);
		$this->load->view('footer');

	}
	
	public function delete_confirm()
	{
		$data['id'] = $this->uri->segment(3, 0);
		
		$this->load->view('header');
		$this->load->view('messages/delete', $data);
		$this->load->view('footer');
	}
	
/*
|---------------------------------------------------------------
| ACTIONS
|---------------------------------------------------------------
*/ 

	
	public function update()
	{
		
		// Set Form Validation Rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		
		// Checks to see if Form data passes the validation
		if( ! $this->form_validation->run())
		{
			// Failed Re Display the View, Errors will display
			$this->load->view('header');
			$this->load->view('messages/edit');
			$this->load->view('footer');

		}
		else
		{
			// Form validation success!!
			$id = $this->input->post('id');
			$fields['name'] = set_value('name'); 
			$fields['phone'] = set_value('phone');
			$fields['email'] = set_value('email');
			$fields['message'] = set_value('message');
			
			$this->messages_model->update($fields, $id);
		
			redirect('messages/index', 'refresh');
		
		}
		
	}
	
	public function delete()
	{
	
		$this->messages_model->delete($this->uri->segment(3, 0));
		
		redirect('messages/index', 'refresh');
	
	}
	
}

/* End of file messages.php */
/* Location: ./application/controllers/messages.php */