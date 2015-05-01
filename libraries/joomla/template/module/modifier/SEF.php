<?php
/**
* patTemplate modfifier for Search Engine Friendly URL's
* @version		$Id: SEF.php 9764 2007-12-30 07:48:11Z ircmaxell $
* @package		Joomla.Framework
* @subpackage	Template
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software and parts of it may contain or be derived from the
* GNU General Public License or other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * JTemplate Translate modifier
 *
 * @package 	Joomla.Framework
 * @subpackage		Template
 * @since		1.5
 */
class patTemplate_Modifier_SEF extends patTemplate_Modifier
{
	/**
	* modify the value
	*
	* @access	public
	* @param	string		value
	* @return	string		modified value
	*/
	function modify( $value, $params = array() )
	{
		return JRoute::_( $value );
	}
}