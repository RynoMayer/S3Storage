<?php
//include the SDK using the Composer autoloader
require '/var/www/html/vendor/autoloader.php';
use Aws\S3\S3Client;
$client = S3Client::factory();
	
?>