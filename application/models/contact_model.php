<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sample Website
 *
 * @package		Website
 * @author		Andrew Kustes
 * @copyright	Copyright (c) 2013, Andrew Kustes
 * @since		Version 1.0
 * @category	Models
 * @description Contact Model
 * @Files		./system/application/controllers/contact.php
 * 				./system/application/views/contact.php
 */

// ------------------------------------------------------------------------

class Contact_model extends CI_Model {

	function create_message($fields)
	{
		$this->db->insert('messages', $fields);
		return $this->db->insert_id();
	}
}

/* End of file contact_model.php */
/* Location: ./application/models/contact_model.php */