<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Desk */

	// Jump Link
	$WM_DeskTop = '<a accesskey="T" href="#WM_BrdBot">BOT</a>';
	$WM_DeskBot = '<a accesskey="B" href="#WM_Desk">TOP</a>';


	// Web (Default View)
	if( empty($WM_ReadGET[WM_URI_DESK]) or $WM_ReadGET[WM_URI_DESK] == WM_DESK_WEB ) { 

	// Offline
	if( $WM_Settings[WM_SYS_VAL_WOFF] == 'TRUE' ) { 
	 	echo '<div id="Container">';
		require (WM_SYS_SCT. '/offline.php');
		echo "</div>";
	} else {
		// echo $WM_DeskBot;
		echo '<div id="Container">';
		require (WM_WEB. '/index.php');
		echo "</div>";
		echo $WM_DeskBot;
	}

	}

	// Administration
	if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_ADM ) { 
		// echo $WM_DeskBot;
		echo '<div id="WM_Admin">';
		require (WM_ADM. '/admin.php');
		echo "</div>";
		echo $WM_DeskBot;
	}

	// Login
	if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_LOG ) { 
		echo '<div id="WM_Login">';
		require (WM_SYS_SCT. '/login.php');
		echo "</div>";
	}

	// Alerts
	if( $WM_ReadGET[WM_URI_DESK] == WM_DESK_ALT ) { 
		echo '<div id="WM_Alerts">';
		require (WM_SYS_SCT. '/alerts.php');
		echo "</div>";
	}

?>

