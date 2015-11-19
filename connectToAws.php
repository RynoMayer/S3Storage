<?php
//include the SDK using the Composer autoloader
require '/var/www/html/vendor/autoloader.php';
$client = new Aws\S3\S3Client([
	'version' => 'latest',
	'region' => 'eu-west-1'
	]);
	
?>
