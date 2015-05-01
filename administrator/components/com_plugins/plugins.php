<?php
/**
* @version		$Id: plugins.php 9764 2007-12-30 07:48:11Z ircmaxell $
* @package		Joomla
* @subpackage	Plugins
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/*
 * Make sure the user is authorized to view this page
 */
$user = & JFactory::getUser();
if (!$user->authorize( 'com_plugins', 'manage' )) {
		$mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}

require_once( JPATH_COMPONENT.DS.'controller.php' );

// Create the controller
$controller	= new PluginsController( );

$controller->execute( JRequest::getCmd( 'task' ) );
$controller->redirect();