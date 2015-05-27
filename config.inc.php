<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

/*
* This is needed for cookie based authentication to encrypt password in
* cookie
* http://www.question-defense.com/tools/phpmyadmin-blowfish-secret-generator
*/
$cfg['blowfish_secret'] = 'f~rf[ZEfv_*vD-eee}]W8|_Bl[j83a%QED2~R4e*%';

/*
* Servers configuration
*/
$i = 0;

// Change this to use the project and instance that you've created.
//mysql:unix_socket=/cloudsql/hybrid-dominion-95721:test
$host = '/cloudsql/perfect-analog-95818:myadmin-test';
$type = 'socket';

/*
* First server
*/
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['socket'] = $host;
$cfg['Servers'][$i]['connect_type'] = $type;
$cfg['Servers'][$i]['compress'] = false;
/* Select mysql if your server does not have mysqli */
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['AllowNoPassword'] = true;
/*
* End of servers configuration
*/

/*
* Directories for saving/loading files from server
*/
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/*
* Other settings
*/
$cfg['PmaNoRelation_DisableWarning'] = true;
$cfg['ExecTimeLimit'] = 60;
$cfg['CheckConfigurationPermissions'] = false;
?>