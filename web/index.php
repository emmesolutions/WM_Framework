<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Web Container */

/*
	Web eMMe Framework
	Simply PHP Framework
    	Copyright (C) 2012 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

        /* Path Definitions */
        define('WM_WEB_SCT', WM_ADM.'/scripts');  		// Web Container Script Path
        define('WM_WEB_TPT', WM_ADM.'/template');    		// Web Container Template Path
        define('WM_WEB_PAG', WM_ADM.'/pages');    		// Web Container Pages Path

/* Breadcrumb */
echo '<div class="WM_Breadcrumb">';
echo WM_WEB_NAV.$_GET[WM_URI_PSTN];
echo '</div>';

?>


<div> 
	<?php
	require (dirname(__FILE__) . '/pages/LoremIpsum.html');
	?>
</div>
