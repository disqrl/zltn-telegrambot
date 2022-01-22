<?php

// Database config
define('HOST', 'localhost');
define('PORT', '3306');
define('DBNAME', 'botz');
define('CHARSET', 'UTF8');
define('USERNAME', '');
define('PASSWORD', '');

// TelegramApi configs
define('TOKEN', '');
define('WEBHOOK', '');

// Parser
define('SOURCE', '');

// Require all project files
require_once('core.php');
require_once('Db.php');
require_once('Parser.php');