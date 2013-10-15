<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Function Settings Script */


/* Read One Setting */
/* WM_DBSetOne_Read('Setting Name', 'Value Name') */
function WM_DBSetOne_Read($Set_Name, $Val) {

	$WM_DBSettings = WM_DBConnect();	

  	$WM_SQL = "SELECT " .$Val.  " FROM " .WM_TAB_SETTINGS. " WHERE " .WM_TS_NAME. " = " . "'" .$Set_Name. "'";  

	$WM_DBRead = mysql_query($WM_SQL) 
		or die("Errore nella query: " . $WM_SQL . "\n" . mysql_error());

        $WM_Row = mysql_fetch_row($WM_DBRead); 
        $WM_DBRead = $WM_Row [0] ;

 	mysql_close($WM_DBSettings); 

  	return $WM_DBRead;
}

/* Read All Settings */
/* WM_DBSetAll_Read('Setting Name') */
function WM_DBSetAll_Read($Set_Name) {

        global $WM_Settings;
        global $WM_SCookies;

        // Settings Array (Setting Value)
	$WM_Settings = array( );
	$WM_SCookies = array( );

	for ($Set = 1; $Set < 20; ++$Set) {	// Retrieve 19 Setting Value
	
	$Val = WM_TabSettings_ValName($Set);	// Retrieve Setting Value Name
	$WM_Settings [$Val] = WM_DBSetOne_Read($Set_Name, $Val);
	$WM_SCookies [$Val] = $WM_Settings [$Val];
	
	} 

  	return ;
} 

/* Table Settings Retrieve Settings Value Name */
/* WM_TabSettings_ValName('Setting Value Name') */
function WM_TabSettings_ValName($Set) {

	switch ($Set) {
 			case 0:  
				$Name = WM_TS_NAME;		// 'Settings Name'
				break;
 			case 1:  
				$Name = WM_SYS_VAL_WOFF;	// 'Offline'
				break;
 			case 2:  
				$Name = WM_SYS_VAL_LANG;	// 'Language'
				break;
  			case 3:  
				$Name = WM_LAY_VAL_WIDTH;	// 'Layout Width'
				break;
  			case 4:  	
				$Name = WM_LAY_VAL_STYLE;	// 'Layout Style Color'
				break;
  			case 5:  
				$Name = WM_LAY_VAL_FONTS;	// 'Layout Fonts Height'
				break;
  			case 6:  
				$Name = WM_SYS_VAL_BRDTOP;	// 'Border Top'
				break;
  			case 7:  
				$Name = WM_SYS_VAL_BRDBOT;	// 'Border Bottom'
				break;
  			case 8:  
				$Name = WM_SYS_VAL_BRDLCK;	// 'Border Lock'
				break;
  			case 9:  
				$Name = WM_SYS_VAL_WMCORNER;	// 'Show Corner Menu Module'
				break;
  			case 10:  
				$Name = WM_SYS_MOD_WMCORNER;	// 'Position Corner Menu Module'
				break;
  			case 11:  
				$Name = WM_SYS_MOD_WMENU;	// 'Position Admin Menu Module'
				break;
  			case 12: 
				$Name = WM_SYS_MOD_LAYOUT;	// 'Position Layout Module'
				break;
  			case 13: 
				$Name = WM_SYS_MOD_DATETIME;	// 'Position Date Time Module'
				break;
  			case 14: 
				$Name = WM_SYS_MOD_LANG;	// 'Position Language Module'
				break;
  			case 15: 
				$Name = WM_SYS_MOD_COPYRIGHT;	// 'Position Copyright Module'
				break;
  			case 16: 
				$Name = WM_SYS_MOD_VALIDATOR;	// 'Position Validator Module'
				break;
  			case 17: 
				$Name = WM_SYS_MOD_SYSINFO;	// 'Position SysInfo Module'
				break;
  			case 18: 
				$Name = WM_SYS_MOD_CONTACT;	// 'Position Contact Module'
				break;
  			case 19: 
				$Name = WM_SYS_MOD_STATS;	// 'Position Stats Module'
				break;
	}

	return $Name;
}

/* Write One Setting */
/* WM_DBSetOne_Write('Setting Name', 'Field Name', 'Value') */
function WM_DBSetOne_Write($Set_Name, $Field_Name, $Value) {

	$WM_DBSettings = WM_DBConnect();	

  	$WM_SQL = "UPDATE " .WM_TAB_SETTINGS.  " SET " .$Field_Name. '='. "'" .$Value. "'" ." 
						WHERE " .WM_TS_NAME. " = " . "'" .$Set_Name. "'";  
	// echo $WM_SQL;

	mysql_query($WM_SQL) ;

 	mysql_close($WM_DBSettings); 

  	return $WM_DBRead;
}

?>
