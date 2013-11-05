<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sample Website
 *
 * @package		Website
 * @author		Andrew Kustes
 * @copyright	Copyright (c) 2013, Andrew Kustes
 * @since		Version 1.0
 * @category	Controllers
 * @description Default Controller
 * @Files		./system/application/views/home.php
 */

// ------------------------------------------------------------------------

class Home extends CI_Controller {

	 	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */