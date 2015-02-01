<?
// define('DB_NAME', 'u369107_04784747');
// define('DB_USER', 'u369107');
// define('DB_PASSWORD', 'undotchil4phte');
// define('DB_HOST', 'u369107.mysql.masterhost.ru');
// define('DB_CHARSET', 'utf8');
// define('DB_COLLATE', '');

define('DB_NAME', 'gelena2009_tiand');
define('DB_USER', 'gelena2009_tiand');
define('DB_PASSWORD', 'P5o3NUZG');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$db1 = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
$db2 = mysql_select_db(DB_NAME, $db1);
mysql_query('SET NAMES utf8');
?>