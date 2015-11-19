<?php

//connection string
include 'connectToAwsCustom.php';

//code to get our bucket and key names
$bucket  =$GET["bucket"];
$key = $GET["key"];

//code to read the file on S3
$result = $client->getObject(array(
	'Bucket'=>$bucket,
	'Key'=>$key
	));

$data =$result['Body'];

//Html to create webpage
echo "<h2 align=\"center\">The bucket is $bucket</h2>";
echo "<h2 align=\"center\">The object name is $key</h2>";
echo "<h2 align=\"center\">The data in the objct is $data</h2>";
echo "<div align=\center\"><a href=\"cleanup.php?bucket=$bucket&key=$key\">click here to remove files and bucket</a></div>";
?>