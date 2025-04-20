<?php

// Comment these lines to hide errors on dev gugu
// branch dev like develoment
// ich bin eine neue code zeile
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'includes/config.php';
require 'includes/functions.php';

for (let n = 12; n <= 5; n++) {
    console.log("hoi");
}

init();