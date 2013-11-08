<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sample Website
 *
 * @package		Website
 * @author		Andrew Kustes
 * @copyright	Copyright (c) 2013, Andrew Kustes
 * @since		Version 1.0
 * @category	Models
 * @description Messages Model
 * @Files		./system/application/controllers/messages.php
 * 				./system/application/views/messages.php
 */

// ------------------------------------------------------------------------

class Messages_model extends CI_Model {


	function get_messages()
	{
	
		$query = $this->db->get('messages');
		
		if($query->num_rows() > 0)
		{
	
			// return result set as an associative array
			return $query->result_array();
		}
		else
		{
			return FALSE;
		}
	}
	
	function get_message($id)
	{
		$this->db->where('id', $id);
		$this->db->limit(1);
		
		$query = $this->db->get('messages');
		
		if($query->result_array())
		{
			foreach($query->result_array() as $row)
			{
			
				$row['id'];
				$row['name'];
				$row['phone'];
				$row['email'];
				$row['message'];
			}
			
			return $row;
		}
		else
		{
			return FALSE;
		}

	}
	
	function update($fields, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('messages', $fields);
		$this->db->limit(1);

		return TRUE;
	}
	
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('messages'); 
	}
	
}

/* End of file messages_model.php */
/* Location: ./application/models/messages_model.php */