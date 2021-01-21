<?php
define('DS', DIRECTORY_SEPARATOR);
$GLOBALS['db'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'db.json');
$GLOBALS['sodb'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'sodb.json');
$GLOBALS['stripe_key'] = "pk_test_51Hs4vICZjSyoKagriy62PgWm6qQLhrJtIYyy3Lq4GWCGNodf82TR4SFuLY4J4mcjNX45Kf7Yfjg80dv665AMmzK400rmoSi33N";
$GLOBALS['domain'] = "http://localhost/Made-in-Srilanka/";
if (!isset($_COOKIE['diamondCount'])) {
    setcookie('diamondCount', 10, time() + (86400 * 30), "/");
}
if (!isset($_COOKIE['userName'])) {
    setcookie('userName', 'Snoopy', time() + (86400 * 30), "/");
}
setcookie('sortDb', 'db', time() + (86400 * 30), "/");