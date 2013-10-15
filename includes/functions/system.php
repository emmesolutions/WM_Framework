<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function System Script */


/* DB Connection */
function WM_DBConnect() {

  	$WM_DBConnect = mysql_connect("localhost", WM_DB_USER, WM_DB_PSWD) 
    		or die("DB Connection Error " . mysql_error());

  	mysql_selectdb(WM_DB_NAME)
    		or die("DB Select Error " . mysql_error());

  	return $WM_DBConnect;
}

/* Read GET Data */
/* WM_ReadGET() Array: $WM_ReadGET */
function WM_ReadGET() {

        global $WM_ReadGET;

        // Settings Array (Setting Value)
	$WM_ReadGET = array( );

	if(isset($_GET[WM_URI_DESK])) { $WM_ReadGET[WM_URI_DESK] = $_GET[WM_URI_DESK]; } 
	if(isset($_GET[WM_URI_PAGE])) { $WM_ReadGET[WM_URI_PAGE] = $_GET[WM_URI_PAGE]; } 
	if(isset($_GET[WM_URI_ITEM])) { $WM_ReadGET[WM_URI_ITEM] = $_GET[WM_URI_ITEM]; }
 
	// Actual Position PSTN
	if(isset($_GET[WM_URI_DESK])) {$WM_Desk = WM_URI_DESK.'='.$WM_ReadGET[WM_URI_DESK]; }
	if(isset($_GET[WM_URI_PAGE])) {$WM_Page = '&amp;'.WM_URI_PAGE.'='.$WM_ReadGET[WM_URI_PAGE]; }
	if(isset($_GET[WM_URI_ITEM])) {$WM_Item = '&amp;'.WM_URI_ITEM.'='.$WM_ReadGET[WM_URI_ITEM]; }
	$_GET[WM_URI_PSTN] = $WM_Desk.$WM_Page.$WM_Item ;

  	return ;
} 

/* Check POST Data */
/* WM_ReadPST() Array: $WM_ReadPST */
function WM_ReadPST() {

        global $WM_ReadPST;

        // Settings Array (Setting Value)
	$WM_ReadPST = array( );
	
	// Login
	if(isset($_POST[WM_PST_USER])) { $WM_ReadPST[WM_PST_USER] = $_POST[WM_PST_USER]; } 
	if(isset($_POST[WM_PST_PSWD])) { $WM_ReadPST[WM_PST_PSWD] = $_POST[WM_PST_PSWD]; } 

	// Settings
	for ($Set = 1; $Set < 19; ++$Set) {		// Retrieve Setting Value
	$Val = WM_TabSettings_ValName($Set);		// Retrieve Setting Value Name

		if(isset($_POST[$Val])) { 
			$WM_ReadPST[$Val] = $_POST[$Val];
			WM_DBSetOne_Write(WM_SET_NAME, $Val, $WM_ReadPST[$Val]);
		} 
	} 

  	return ;
}


/* Read System Info */
/* WM_SysInfo() Array: $WM_SysInfo */
function WM_SysInfo() {

	global $WM_SysInfo;

	// Set Timezone
	date_default_timezone_set( WM_TIME_ZONE );

	// Day
	$Day = date (D);
	switch ($Day) {
 		case Mon:  
			$WM_Day = WM_MOD_DATETIME_DAY01;
			break;
 		case Tue:  
			$WM_Day = WM_MOD_DATETIME_DAY02;
			break;
  		case Wed:  
			$WM_Day = WM_MOD_DATETIME_DAY03;
			break;
  		case Thu:  
			$WM_Day = WM_MOD_DATETIME_DAY04;
			break;
  		case Fri:  
			$WM_Day = WM_MOD_DATETIME_DAY05;
			break;
  		case Sat:  
			$WM_Day = WM_MOD_DATETIME_DAY06;
			break;
  		case Sun:  
			$WM_Day = WM_MOD_DATETIME_DAY07;
			break;
		}

	// Month
	$Mth = date (m);
	switch ($Mth) {
 		case 01:  
			$WM_Mth = WM_MOD_DATETIME_MTH01;
			break;
 		case 02:  
			$WM_Mth = WM_MOD_DATETIME_MTH02;
			break;
  		case 03:  
			$WM_Mth = WM_MOD_DATETIME_MTH03;
			break;
  		case 04:  
			$WM_Mth = WM_MOD_DATETIME_MTH04;
			break;
  		case 05:  
			$WM_Mth = WM_MOD_DATETIME_MTH05;
			break;
  		case 06:  
			$WM_Mth = WM_MOD_DATETIME_MTH06;
			break;
  		case 07:  
			$WM_Mth = WM_MOD_DATETIME_MTH07;
			break;
  		case 08:  
			$WM_Mth = WM_MOD_DATETIME_MTH08;
			break;
  		case 09:  
			$WM_Mth = WM_MOD_DATETIME_MTH09;
			break;
  		case 10:  
			$WM_Mth = WM_MOD_DATETIME_MTH10;
			break;
  		case 11:  
			$WM_Mth = WM_MOD_DATETIME_MTH11;
			break;
  		case 12:  
			$WM_Mth = WM_MOD_DATETIME_MTH12;
			break;
		}

	// Date Time
	$WM_Date = $WM_Day. " " .date('d'). " " .$WM_Mth. " " .date('Y');
	$WM_Time = date('H:i');

	// Browser 
	$Browser = 'none';
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') ) { $Browser = 'Safari'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') ) { $Browser = 'Firefox'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') ) { $Browser = 'Chrome'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Chromium') ) { $Browser = 'Chromium'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') ) { $Browser = 'Opera'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Midori') ) { $Browser = 'Midori'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Epiphany') ) { $Browser = 'Epiphany'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ) { $Browser = 'IE'; }

	// OS
	$OS = 'none';
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Ubuntu') ) { $OS = 'Ubuntu'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Android') ) { $OS = 'Android'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS') ) { $OS = 'Mac OS X'; }
	if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') ) { $OS = 'Windows'; }

	$IP      = $_SERVER['REMOTE_ADDR'];

	// Settings Array (System Info)
	$WM_SysInfo = array( 
				'Date' => $WM_Date,
				'Time' => $WM_Time,
				'Browser' => $Browser,
				'OS' => $OS,
				'IP' => $IP,	
				);

        return;

}

?>
