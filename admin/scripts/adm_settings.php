<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Admin Settings */


echo "\n\t".'<div class="WM_AdmTitle">';
echo "\n\t".WM_MOD_WMENU_SET; 
echo "\n\t".'</div>';

$WM_Action = 'index.php' . '?' .WM_URI_DESK. '=' .WM_DESK_ADM. '&amp;' .WM_URI_PAGE. '=' .WM_ADM_SET ;

echo "\n\t".'<div class="WM_Outline">';

/* Offline */
$Val = WM_TabSettings_ValName(1);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_WOFF; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == 'TRUE' ) { 
		echo "\n\t".'<option value="TRUE"> ' .WM_SETTINGS_WOFF1. '</option>';
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_WOFF2. '</option>';
		} 
		if ($WM_Settings[$Val] == 'FALSE' ) { 
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_WOFF2. '</option>';
		echo "\n\t".'<option value="TRUE"> ' .WM_SETTINGS_WOFF1. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Language */
$Val = WM_TabSettings_ValName(2);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_LANG; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == 'EN' ) { 
		echo "\n\t".'<option value="EN">' .WM_SETTINGS_LANG1. '</option>';
		echo "\n\t".'<option value="IT">' .WM_SETTINGS_LANG2. '</option>';
		} 
		if ($WM_Settings[$Val] == 'IT' ) { 
		echo "\n\t".'<option value="IT">' .WM_SETTINGS_LANG2. '</option>';
		echo "\n\t".'<option value="EN">' .WM_SETTINGS_LANG1. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Layout Width */
$Val = WM_TabSettings_ValName(3);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_WIDTH; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_WIDTH1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_WIDTH2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_WIDTH3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_WIDTH2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_WIDTH3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_WIDTH1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_WIDTH3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_WIDTH1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_WIDTH2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Layout Style */
$Val = WM_TabSettings_ValName(4);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_STYLE; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_STYLE1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_STYLE2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_STYLE3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_STYLE2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_STYLE3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_STYLE1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_STYLE3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_STYLE1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_STYLE2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Layout Fonts */
$Val = WM_TabSettings_ValName(5);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_FONTS; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_FONTS1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_FONTS2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_FONTS3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_FONTS2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_FONTS3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_FONTS1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_FONTS3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_FONTS1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_FONTS2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Border Top */
$Val = WM_TabSettings_ValName(6);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_BRDTOP; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '00' ) { 
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		} 
		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Border Bottom */
$Val = WM_TabSettings_ValName(7);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_BRDBOT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '00' ) { 
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		} 
		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_SHOW. '</option>';
		echo "\n\t".'<option value="00">' .WM_SETTINGS_HIDE. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Border Lock */
$Val = WM_TabSettings_ValName(8);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_BRDLCK; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == 'TRUE' ) { 
		echo "\n\t".'<option value="TRUE"> ' .WM_SETTINGS_LOCK. '</option>';
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_UNLOCK. '</option>';
		} 
		if ($WM_Settings[$Val] == 'FALSE' ) { 
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_UNLOCK. '</option>';
		echo "\n\t".'<option value="TRUE"> ' .WM_SETTINGS_LOCK. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Show Web eMMe Module */
$Val = WM_TabSettings_ValName(9);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_VAL_WMCORNER; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == 'TRUE' ) { 
		echo "\n\t".'<option value="TRUE">' .WM_SETTINGS_SHOW. '</option>';
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_HIDE. '</option>';
		} 
		if ($WM_Settings[$Val] == 'FALSE' ) { 
		echo "\n\t".'<option value="FALSE">' .WM_SETTINGS_HIDE. '</option>';
		echo "\n\t".'<option value="TRUE">' .WM_SETTINGS_SHOW. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Web eMMe Module */
$Val = WM_TabSettings_ValName(10);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_WMCORNER; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Admin Menu Module */
$Val = WM_TabSettings_ValName(11);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_WMENU; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_RIGHT. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_LEFT. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Position Layout Module */
$Val = WM_TabSettings_ValName(12);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_LAYOUT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Date Time Module */
$Val = WM_TabSettings_ValName(13);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_DATETIME; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Language Module */
$Val = WM_TabSettings_ValName(14);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_LANGUAGE; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

echo "\n\t".'<div class="WM_Outline">';

/* Position Copyright Module */
$Val = WM_TabSettings_ValName(15);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_COPYRIGHT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Validator Module */
$Val = WM_TabSettings_ValName(16);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_VALIDATOR; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position SysInfo Module */
$Val = WM_TabSettings_ValName(17);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_SYSINFO; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position SysInfo Module */
$Val = WM_TabSettings_ValName(18);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_CONTACT; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

/* Position Stats Module */
$Val = WM_TabSettings_ValName(19);	// Retrieve Setting Value Name
echo "\n\t".'<form action="' .$WM_Action. '" method="post">';

	echo "\n\t".'<div class="WM_AdmSetMod01">';
	echo "\n\t".WM_SETTINGS_MOD_STATS; 
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<select name="' .$Val. '" >';

		if ($WM_Settings[$Val] == '01' ) { 
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		} 
		if ($WM_Settings[$Val] == '02' ) { 
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		} 
		if ($WM_Settings[$Val] == '03' ) { 
		echo "\n\t".'<option value="03">' .WM_SETTINGS_BOX3. '</option>';
		echo "\n\t".'<option value="01">' .WM_SETTINGS_BOX1. '</option>';
		echo "\n\t".'<option value="02">' .WM_SETTINGS_BOX2. '</option>';
		} 

  	echo "\n\t".'</select>';
	echo "\n\t".'</div>';

	echo "\n\t".'<div class="WM_AdmSetMod02">';
	echo "\n\t".'<input accesskey="U" type="submit" value="' .WM_SETTINGS_UPDATE. '" />';
	echo "\n\t".'</div>';

echo "\n\t".'</form>';

echo "\n\t".'</div>';

?>

