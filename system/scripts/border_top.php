<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Border Top */
?>


	<!-- Box 1 -->
	<div class="WM_BrdMod"> 

<?php
        $WM_Path = WM_SYS_TPT. '/modules';

	// Layout
	if( $WM_Settings[WM_SYS_MOD_LAYOUT] == "01" ) { require ($WM_Path. '/mod_layout.php'); } 
	// Language
	if( $WM_Settings[WM_SYS_MOD_LANG] == "01" ) { require ($WM_Path. '/mod_language.php'); } 
	// Date Time
	if( $WM_Settings[WM_SYS_MOD_DATETIME] == "01" ) { require ($WM_Path. '/mod_datetime.php'); } 
?>
	</div>

	<!-- Box 2 -->
	<div class="WM_BrdMod"> 
<?php
	// Layout
	if( $WM_Settings[WM_SYS_MOD_LAYOUT] == "02" ) { require ($WM_Path. '/mod_layout.php'); }
	// Language
	if( $WM_Settings[WM_SYS_MOD_LANG] == "02" ) { require ($WM_Path. '/mod_language.php'); }
	// Date Time
	if( $WM_Settings[WM_SYS_MOD_DATETIME] == "02" ) { require ($WM_Path. '/mod_datetime.php'); }  
?>
	</div>

	<!-- Box 3 -->
	<div class="WM_BrdMod">
<?php
	// Layout
	if( $WM_Settings[WM_SYS_MOD_LAYOUT] == "03" ) { require ($WM_Path. '/mod_layout.php'); } 
	// Language
	if( $WM_Settings[WM_SYS_MOD_LANG] == "03" ) { require ($WM_Path. '/mod_language.php'); }
	// Date Time
	if( $WM_Settings[WM_SYS_MOD_DATETIME] == "03" ) { require ($WM_Path. '/mod_datetime.php'); } 
?> 
	</div> 
