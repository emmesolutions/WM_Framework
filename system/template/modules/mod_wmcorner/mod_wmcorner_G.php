<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Script Module Web eMMe Corner Menu - Red */


// Position
$WM_Pstn = $_GET[WM_URI_PSTN]. '&amp;';

	// Link
	$WM_WMenu_20 = "\t".'<a accesskey="2" href="index.php?'.$WM_Pstn.WM_SYS_VAL_BRDTOP.'=01"> ';
	$WM_WMenu_21 = "\t".'<a accesskey="2" href="index.php?'.$WM_Pstn.WM_SYS_VAL_BRDTOP.'=00"> ';

// Show/Hide Corner Menu
if( $WM_Settings[WM_SYS_VAL_WMCORNER] == "TRUE" ) { $Icons = 'src="./system/template/images/wmcorner/WM_Corner_G.png'; }
if( $WM_Settings[WM_SYS_VAL_WMCORNER] == "FALSE" ) { $Icons = 'src="./system/template/images/wmcorner/WM_Corner_00.png'; }

echo "\n\t".'<div class="WM_Menu">'."\n";

if( $WM_Settings[WM_SYS_VAL_BRDLCK] == "FALSE" ) {
	// Show/Hide Border Top
	if( $WM_SCookies[WM_SYS_VAL_BRDTOP] == "00" ) { echo $WM_WMenu_20; }
	if( $WM_SCookies[WM_SYS_VAL_BRDTOP] == "01" ) { echo $WM_WMenu_21; }
	echo '<img class="WM_MenuImg" ';
	echo "\n\t".$Icons. '" ';
	echo "\n\t".'title="' .WM_MOD_CORNER_BRDT. '" alt="' .WM_MOD_CORNER_BRDT. '" height="32" width="32" /></a>'."\n";
} else {
	echo "\n\t".'<img class="WM_MenuImg" ';
	echo "\n\t".$Icons. '" '; 
	echo "\n\t".'title="' .WM_MOD_CORNER_BRDB. '" alt="' .WM_MOD_CORNER_BRDB.' " height="32" width="32" />'."\n";
}

echo "\t".'</div>'."\n";

?>
