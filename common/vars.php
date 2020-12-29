<?php
define('DS', DIRECTORY_SEPARATOR);
$GLOBALS['db'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'db.json');
$GLOBALS['stripe_key'] = "pk_test_51Hs4vICZjSyoKagriy62PgWm6qQLhrJtIYyy3Lq4GWCGNodf82TR4SFuLY4J4mcjNX45Kf7Yfjg80dv665AMmzK400rmoSi33N";
$GLOBALS['domain'] = "http://localhost/mobile";
