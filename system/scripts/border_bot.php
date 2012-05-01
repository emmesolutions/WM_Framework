<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Border Bottom */
?>


	<!-- Box 1 -->
	<div class="WM_BrdMod">	

<?php

        $WM_Path = WM_SYS_TPT. '/modules';

	// Validator 
	if( $WM_Settings[WM_SYS_MOD_VALIDATOR] == "01" ) { require ($WM_Path. '/mod_validator.php'); } 
	// Copiright
	if( $WM_Settings[WM_SYS_MOD_COPYRIGHT] == "01" ) { require ($WM_Path. '/mod_copyright.php'); } 
	// System Info
	if( $WM_Settings[WM_SYS_MOD_SYSINFO] == "01" ) { require ($WM_Path. '/mod_sysinfo.php'); } 
	// Contact
	if( $WM_Settings[WM_SYS_MOD_CONTACT] == "01" ) { require ($WM_Path. '/mod_contact.php'); } 
?>
	</div>

	<!-- Box 2 -->
	<div class="WM_BrdMod">	
<?php
	// Validator
	if( $WM_Settings[WM_SYS_MOD_VALIDATOR] == "02" ) { require ($WM_Path. '/mod_validator.php'); } 
	// Copiright
	if( $WM_Settings[WM_SYS_MOD_COPYRIGHT] == "02" ) { require ($WM_Path. '/mod_copyright.php'); } 
	// System Info
	if( $WM_Settings[WM_SYS_MOD_SYSINFO] == "02" ) { require ($WM_Path. '/mod_sysinfo.php'); } 
	// Contact
	if( $WM_Settings[WM_SYS_MOD_CONTACT] == "02" ) { require ($WM_Path. '/mod_contact.php'); } 
?>
	</div>

	<!-- Box 3 -->
	<div class="WM_BrdMod">	
<?php
	// Validator
	if( $WM_Settings[WM_SYS_MOD_VALIDATOR] == "03" ) { require ($WM_Path. '/mod_validator.php'); } 
	// Copiright
	if( $WM_Settings[WM_SYS_MOD_COPYRIGHT] == "03" ) { require ($WM_Path. '/mod_copyright.php'); } 
	// System Info
	if( $WM_Settings[WM_SYS_MOD_SYSINFO] == "03" ) { require ($WM_Path. '/mod_sysinfo.php'); } 
	// Contact
	if( $WM_Settings[WM_SYS_MOD_CONTACT] == "03" ) { require ($WM_Path. '/mod_contact.php'); } 
?>
	</div>

