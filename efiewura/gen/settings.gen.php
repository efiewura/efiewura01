<?php

require __DIR__ . '/../lib/rb.lib.php';

 //require_once __DIR__.'/../src/Helpers.php';
\Cloudinary::config(array(
    'cloud_name' => 'demo',
    'api_key' => '481282185431345',
    'api_secret' => 'gW56f2V9zfv1-J2BfFAQGhDRRro'
));
R::setup("mysql:host=$host;dbname=$dbname", $uname, $pword);
