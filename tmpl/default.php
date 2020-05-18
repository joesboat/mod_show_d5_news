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
?>
<style>
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: normal;
}
.style12b {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style14b {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style16b {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
</style>
<!--****************************  Newsletter and Events  *****************************-->
<div >
	<h3 class='text-center'>D5 News</h3>
  <!--<table width="320" height="170" border="0" cellpadding="0" cellspacing="0">-->
  	<table width='320'  border='1' cellpadding='0' >
    <!--DWLayoutTable-->
<!--    <tr >
		<th colspan='2' class="style14b heading_height" scope="col">
			Latest News 
		</th>
    </tr>
-->	<tr>
 
     <td colspan='2' height="30">
	  	<div align="center">
			<span class='style14b red'>
				Current Mark 5 Edition
			</span>
			<br>
			<span class='style16b'>
				<a 	href='<?php echo $url;?>' target='_blank'>
					<?php echo $mark5_edition;?>
				</a>
			</span>
			<br>
			<span class="style10">
					<a href="mark_5/Mark_5_Deadline_Schedule.pdf" target="_blank" class="red">
						Mark 5 Advertising Deadlines
					</a>
          	</span>
		</div>
	  </td>
    </tr>
    <tr>
		<td width="226" height="46" align="center" valign="middle" colspan='2'>
		  <div align="center" class="style14b">
		  	<a href="gallery.php">
		  		Event Pictures<br/> 
				Practice Nav. Contest<br/>
     		</a>
		  </div>
		</td>
    </tr>
    <tr>
		<td width="226" height="46" align="center" valign="middle">
		  <div align="center" class="style14b">
		  	<a href="http://www.facebook.com/pages/USPS-District-5/156920744368856?sk=events" target="_blank">
		  		Events and Pictures<br/> 
				on our Facebook Page<br/>
     		</a>
		  </div>
		</td>
		<td width="88" align="center" valign="middle" bgcolor="#FFFFFF">
			<a href="http://www.facebook.com/pages/USPS-District-5/156920744368856?sk=events" class="style12b" target="_blank">
				<img src="images/facebook.gif" alt="D5 Facebook Page" width="35" height="33" border="0" align="absmiddle">
			</a>
		</td>
    </tr>
    <tr>
      <th colspan='2' scope="col">
      	<div align='center'>
	  		<span class="style14b">
				<a href="http://www.usps.org/national/admin_dept/membenefits.htm" target="_blank">
					USPS Benefits
				</a> 
			</span>
		</div>
	  </th>
    </tr>  </table>
</div>


