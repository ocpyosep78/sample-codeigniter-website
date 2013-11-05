<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sample Website
 *
 * @package		Website
 * @author		Andrew Kustes
 * @copyright	Copyright (c) 2013, Andrew Kustes
 * @since		Version 1.0
 * @category	Controllers
 * @description Contact Controller
 * @Files		./system/application/views/contact.php
 * 				./system/application/models/contact_model.php
 */

// ------------------------------------------------------------------------

class Contact extends CI_Controller {

	// Default View
	public function index()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	
	// Form Submission Action
	public function submit()
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
			$this->load->view('contact');
			$this->load->view('footer');

		}
		else
		{
			// Form validation success!!
			
			/* 
			Create an array for columns and values to insert
			Use set_value('varname') function to retrieve POST variables because 
			it was ran through the validation class 
			*/
			
			$fields['name'] = set_value('name'); 
			$fields['phone'] = set_value('phone');
			$fields['email'] = set_value('email');
			$fields['message'] = set_value('message');
			
			// Load the Contact Data Model
			$this->load->model('contact_model');
			
			// Insert form data into Contact messages table
			$this->contact_model->create_message($fields);
			
			// Send Email
			$this->load->library('email');

			$email_config['mailtype'] = 'html';
			$email_config['charset'] = 'iso-8859-1';
			$email_config['wordwrap'] = TRUE;
	
			$this->email->initialize($email_config);
	
			$this->email->from(set_value('email'), set_value('name'));
			$this->email->to('contact@andrewkustes.com'); 
			$this->email->subject('Contact Inquiry from ' . set_value('name'));
			$this->email->message(set_value('message'));
			$this->email->send();

			$this->load->view('header');
			$this->load->view('thankyou');
			$this->load->view('footer');
		}
	
	}
	
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */