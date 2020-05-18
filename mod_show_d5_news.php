<?php
/**
* @package Author
* @author Joseph P. Gibson
* @website joesboat.org
* @email joe@joesboat.org
* @copyright Copyright (C) 2017 Joseph Gibson - All rights reserved.
* @license GNU General Public License version 2 or later; see LICENSE.txt
**/

// no direct access
defined('_JEXEC') or die('Restricted access');
jimport("usps.tableD5VHQAB");
require_once(dirname(__FILE__).'/helper.php');
$vhqab = JoeFactory::getLibrary("USPSd5tableVHQAB");

	$sqds = $vhqab->getSquadronObject();
	$squadron = $sqds->get_record('squad_no','6243');
	$mark5_edition = $squadron['newsletter_edition'];
	$mark5_file_name = $squadron['newsletter_file_name'];
	//$url = "download.php?mark5=squadrons/6243/".$mark5_file_name;
	$url = "/squadrons/6243/".$mark5_file_name;
	
require(JModuleHelper::getLayoutPath('mod_show_d5_news'));
$vhqab->close();

