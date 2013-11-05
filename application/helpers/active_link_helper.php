<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Active Link
 *
 * Highlights Current Link User is Viewing
 *
 * @access	public
 * @param	string
 * @return	string
 */	
 
if ( ! function_exists('active_link'))
{
	function active_link($Link, $CurrentLink)
	{
	
		if($Link == $CurrentLink)
		{
			$active_link = 'active';
		}
		else
		{
			$active_link = '';
		}
		
		return $active_link;
	
	}

}
	
// ------------------------------------------------------------------------

/* End of file active_link_helper.php */
/* Location: ./system/application/helpers/active_link_helper.php */