<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Web eMMe Framework */
/* System Configuration File */

/* Cookie Expires */
$WM_CookieEx = 0;

/* Enable Debug */
$WM_Debug = false;

/* DB Connect Parameter */
define('WM_DB_NAME', "webemmen_framework");	// Database Name
define('WM_DB_USER', "webemmen_webemme");	// Database User
define('WM_DB_PSWD', "U69yFBbXJehk");		// Database Password

/* Time Zone */
       // Supported: 
       // http://www.php.net/manual/en/timezones.php
define('WM_TIME_ZONE', "Europe/Rome");		// Set Time Zone

/* GET Data */
	// GET Variables Name
	define('WM_URI', "URI"); 		// URI
	define('WM_URI_DESK', "WM_Desk");	// Desk
	define('WM_URI_PAGE', "WM_Page");	// Page
	define('WM_URI_ITEM', "WM_Item");	// Item
	// GET Desk Value
        // WM_URI_DESK = ...
	define('WM_DESK_OFF', "WM_Off");	// Offline
	define('WM_DESK_WEB', "WM_Web");	// Web Container
	define('WM_DESK_ADM', "WM_Adm");	// Administrator
	define('WM_DESK_LOG', "WM_Log");	// Login
	define('WM_DESK_ALT', "WM_Alt");	// Alerts
	// GET Login Value
        // WM_URI_DESK = WM_DESK_LOG
        // WM_URI_PAGE = ...
	define('WM_LOG_CHK', "WM_LogChk");	// Login Check
	define('WM_LOG_OUT', "WM_LogOut");	// Login Exit
	// GET Alerts Value
        // WM_URI_DESK = WM_DESK_ALT
        // WM_URI_PAGE = ...
	define('WM_ALT_01', "WM_Alt01");	// Alerts Login Success
	define('WM_ALT_02', "WM_Alt02");	// Alerts Login Error
	define('WM_ALT_03', "WM_Alt03");	// Alerts
	define('WM_ALT_04', "WM_Alt04");	// Alerts

/* POST Data */
	// Login
	define('WM_URI_PSTN', ""); 		// 
	define('WM_PST_USER', "User"); 		// Admin User
	define('WM_PST_PSWD', "Pswd"); 		// Admin Password

/* DB Table Name */
/* Table Settings */
define('WM_TAB_SETTINGS', "WM_Settings");	// Database Table Settings Name
define('WM_SET_NAME', "Default");	        // Table Settings Default Name
	// Table Settings Value Name
	define('WM_TS_NAME', "Val_Name"); 		// 'Settings Name'
	define('WM_SYS_VAL_WOFF', "Val_Offline");       // 'Offline'
	define('WM_SYS_VAL_LANG', "Val_Lang"); 	        // 'Language'
	define('WM_LAY_VAL_WIDTH', "Val_Width"); 	// 'Layout Width'
	define('WM_LAY_VAL_STYLE', "Val_Style"); 	// 'Layout Style Color'
	define('WM_LAY_VAL_FONTS', "Val_Fonts"); 	// 'Layout Fonts Height'
	define('WM_SYS_VAL_BRDTOP', "Val_BrdTop"); 	// 'Show Border Top'
	define('WM_SYS_VAL_BRDBOT', "Val_BrdBot"); 	// 'Show Border Bottom'
	define('WM_SYS_VAL_BRDLCK', "Val_BrdLck"); 	// 'Border Lock'
	define('WM_SYS_VAL_WMCORNER', "Val_WMenu"); 	// 'Show Corner Menu Module'
	define('WM_SYS_MOD_WMCORNER', "Mod_WMenu"); 	// 'Position Corner Menu Module'
	define('WM_SYS_MOD_WMENU', "Mod_AdMenu"); 	// 'Position Admin Menu Module'
	define('WM_SYS_MOD_LAYOUT', "Mod_Layout"); 	// 'Position Layout Module'
	define('WM_SYS_MOD_DATETIME', "Mod_DateTime"); 	// 'Position Date Time Module'
	define('WM_SYS_MOD_LANG', "Mod_Lang"); 		// 'Position Language Module'
	define('WM_SYS_MOD_COPYRIGHT', "Mod_Copyright");// 'Position Copyright Module'
	define('WM_SYS_MOD_VALIDATOR', "Mod_Validator");// 'Position Validator Module'
	define('WM_SYS_MOD_SYSINFO', "Mod_SysInfo"); 	// 'Position SysInfo Module'
	define('WM_SYS_MOD_CONTACT', "Mod_Contact"); 	// 'Position Contact Module'
	define('WM_SYS_MOD_STATS', "Mod_Stats"); 	// 'Position Stats Module'

/* Table Administration */
define('WM_TAB_ADMIN', "WM_Admin");		// Database Table Admin Name
	// Table Administration Value Name
	define('WM_ADM_USER', "User"); 			// 'Username'
	define('WM_ADM_PSWD', "Pswd"); 			// 'Password'
	define('WM_ADM_NAME', "Name"); 			// 'Name'
	define('WM_ADM_EMAIL', "EMail"); 		// 'EMail'
	define('WM_ADM_PHONE', "Phone"); 		// 'Telephone'
	define('WM_ADM_ADDRESS', "Address"); 		// 'Address'
	define('WM_ADM_CITY', "City"); 			// 'City'
	define('WM_ADM_CAP', "CAP"); 			// 'CAP'
	define('WM_ADM_COUNTRY', "Country"); 		// 'Country'

/* Admin Configuration */
require (WM_ADM . '/configuration.php');
/* Container Configuration */
require (WM_WEB . '/configuration.php');
