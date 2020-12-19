<?php
define('DS', DIRECTORY_SEPARATOR);
$GLOBALS['db'] = file_get_contents('..' . DS . '..' . DS . 'common' . DS . 'db.json');
