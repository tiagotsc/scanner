<?php
require 'vendor/autoload.php';
#$loader = require 'vendor/autoload.php';
#$loader->addPsr4('Oreilly\\ModernPHP\\', 'src/');

$urls = [
    'http://www.apple.com',
    'http://php.net',
    'http://sdfssdwerw.org'
];
$scanner = new \Tiago\LivroModernPHP\Url\Scanner($urls);
print_r($scanner->getInvalidUrls());
