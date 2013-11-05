<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sample Website
 *
 * @package		Website
 * @author		Andrew Kustes
 * @copyright	Copyright (c) 2013, Andrew Kustes
 * @since		Version 1.0
 * @category	Controllers
 * @description About Controller
 * @Files		./system/application/views/about.php
 */

// ------------------------------------------------------------------------

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */