/*  Database WM_DB */

/*  Table WM_Settings */
CREATE TABLE IF NOT EXISTS WM_Settings (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'ID',
	Val_Name VARCHAR(8) NOT NULL DEFAULT 'Default' COMMENT 'Settings Name',
	Val_Offline VARCHAR(5) NOT NULL DEFAULT 'FALSE' COMMENT 'Site Offline',
	Val_Lang VARCHAR(2) NOT NULL DEFAULT 'EN' COMMENT 'Language',
	Val_Width VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Layout Container Width',
	Val_Style VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Layout Border Color',
	Val_Fonts VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Layout Fonts Height',
	Val_BrdTop VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Show Border Top',
	Val_BrdBot VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Show Border Bottom',
	Val_BrdLck VARCHAR(5) NOT NULL DEFAULT 'FALSE' COMMENT 'Lock Border',
	Val_WMenu VARCHAR(5) NOT NULL DEFAULT 'TRUE' COMMENT 'Show Corner Menu',
	Mod_WMenu VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Position Corner Menu',
	Mod_AdMenu VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Position Admin Menu',
	Mod_Layout VARCHAR(2) NOT NULL DEFAULT '02' COMMENT 'Position Layout Menu',
	Mod_DateTime VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Date Time Info',
	Mod_Lang VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Language Menu',
	Mod_Copyright VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Position Copyright Info',
	Mod_Validator VARCHAR(2) NOT NULL DEFAULT '01' COMMENT 'Position Validator Menu',
	Mod_SysInfo VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position SysInfo',
	Mod_Contact VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Contact Info',
	Mod_Stats VARCHAR(2) NOT NULL DEFAULT '03' COMMENT 'Position Stats Info'
);

/*  Value WM_Settings */
INSERT INTO WM_Settings (
	id,
	Val_Name,
	Val_Offline,
	Val_Lang,
	Val_Width,
	Val_Style,
	Val_Fonts,
	Val_BrdTop,
	Val_BrdBot,
	Val_BrdLck,
	Val_WMenu,
	Mod_WMenu,
	Mod_AdMenu,
	Mod_Layout,
	Mod_DateTime,
	Mod_Lang,
	Mod_Copyright,
	Mod_Validator,
	Mod_SysInfo,
	Mod_Contact,
	Mod_Stats
) VALUES (
	NULL,
	'Default',
	'FALSE',
	'EN',
	'02',
	'01',
	'02',
	'01',
	'01',
	'FALSE',
	'TRUE',
	'01',
	'01',
	'02',
	'03',
	'03',
	'01',
	'01',
	'03',
	'03',
	'03'
);

/* Table WM_Admin */
CREATE TABLE IF NOT EXISTS WM_Admin (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'ID',
	User VARCHAR(16) NOT NULL DEFAULT 'Admin' COMMENT 'Username',
	Pswd VARCHAR(32) NOT NULL DEFAULT 'password' COMMENT 'Password',
	Name VARCHAR(16) NOT NULL DEFAULT 'Name' COMMENT 'Admin Name',
	EMail VARCHAR(16) NOT NULL DEFAULT 'info@webemme.net' COMMENT 'Admin eMail',
	Phone VARCHAR(16) DEFAULT '+39' COMMENT 'Admin Telephone',
	Address VARCHAR(32) DEFAULT '' COMMENT 'Admin Address', 
	City VARCHAR(16) DEFAULT 'Lucca' COMMENT 'Admin City',   
	CAP VARCHAR(16) DEFAULT '55100' COMMENT 'Admin CAP',
	Country VARCHAR(16) DEFAULT 'Italy' COMMENT 'Admin Country'
);

/*  Value WM_Admin */
INSERT INTO WM_Admin (
	id,
	User,
	Pswd,
	Name,
	EMail,
	Phone,
	Address,
	City,
	CAP,
	Country
) VALUES (
	NULL,
	'Admin',
	'5f4dcc3b5aa765d61d8327deb882cf99',
	'Admin Name',
	'info@webemme.net',
	'+390583',
	'Via',
	'Lucca',
	'55100',
	'Italy'
);

/* Table Contact */
CREATE TABLE IF NOT EXISTS WM_Contact (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'ID',
	Name VARCHAR(16) NOT NULL DEFAULT 'Name' COMMENT 'Contact Name',
	EMail VARCHAR(16) NOT NULL DEFAULT 'info@webemme.net' COMMENT 'Contact eMail',
	Telephone VARCHAR(16) DEFAULT '' COMMENT 'Contact Telephone',
	Address VARCHAR(32) DEFAULT '' COMMENT 'Contact Address', 
	City VARCHAR(16) DEFAULT '' COMMENT 'Contact City',   
	CAP VARCHAR(16) DEFAULT '' COMMENT 'Contact CAP',
	Country VARCHAR(16) DEFAULT '' COMMENT 'Contact Country'
);
