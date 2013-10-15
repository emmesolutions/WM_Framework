<?php 
	// No Direct Access
	defined('_WMEX') or die("Access Denied!");


/* Includes Script */

	require (WM_INC . '/functions/system.php');
	require (WM_INC . '/functions/settings.php');
	require (WM_INC . '/functions/administration.php');

	/* Check POST Data */
	WM_ReadPST();

	/* Check GET Data */
        WM_ReadGET();

	/* Load Default Settings */
	WM_DBSetAll_Read(WM_SET_NAME);

	/* Check Session */
	require (WM_INC . '/scripts/session.php');

	/* Check Cookies */
	require (WM_INC . '/scripts/cookies.php');

        /* Load Language */
	require (WM_SYS . '/scripts/language.php');

	/* Read System Info */
	WM_SysInfo();
?>
