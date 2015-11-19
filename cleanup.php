<?php

//connection string
include 'connectToAwsCustom.php';

//code to get our bucket and file names
$bucket  =$GET["bucket"];
$key = $GET["key"];

//buckets cannot be deleted unless they are empty
//code to delete objects from bucket
$result = $client->deleteObject(array(
	'Bucket' => $bucket,
	'Key' => $key
	));
	
//code to tell user that the object has been deleted
echo "<h2 align=\"center\">Object $key has been deleted<\h2>";

//code to delete our bucket
$result = $client->deleteBucket(array(
	'Bucket' => $bucket
	));

//code to create webpage
echo "<h2 align=\"center\"> Bucket $bucket has been deleted<\h2>";
echo "<h2 align=\"center\"> Good Bye! <\h2>";
?>	