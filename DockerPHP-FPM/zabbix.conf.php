<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = 'mariadb-master';
$DB['PORT']     = '0';
$DB['DATABASE'] = 'zabbix';
$DB['USER']     = 'zabbix';
$DB['PASSWORD'] = 'LTV6aCAgvGUV6Udp';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = 'zabbix-server';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = 'Silvana-Server';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
