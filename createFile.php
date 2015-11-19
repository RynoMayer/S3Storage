<?php

//connection string
include 'connectToAwsCustom.php';

/*
Files in S3 are called objects and stored in buckets. 
specific objects is referred to by its key (or name) and holds data.
in this file an object, called cloudStuff.txt, is created that contains data
'Hello lazy Rhino Developer'
and upload it to the newly created bucket.
*/

//get the bucket name
$bucket = $_GET{bucket};

//create file name
$key = 'cloudStuff.txt';

//put the file and data in bucket
$result = $client->putObject(array(
	'Bucket' => $bucket,
	'Key' => $key,
	'Body' => "Hello lazy Rhino Developer"
	));
	
//Html to create webpage
echo "<h2 align=\"center\"> File - $Key has been successfully uploaded to $bucket</h2>";
echo "<div align=\"center\"> <a href=\"readFile.php?bucket=$bucket&key=$key\"> Click here to read your file</a></div>";
?>	