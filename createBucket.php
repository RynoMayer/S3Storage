<?php
//connection string
include 'connectToAwsCustom.php';
echo "<h1 align=\"center\"> Hello Rhino! </h1>";
//create unique bucket name
//$bucket = uniqid("RhinoBucket",true);

//create our bucket using unique bucket name
//$result = $client->createBucket(array('bucket' => $bucket));

//Html to create our webpage
echo "<h1 align=\"center\"> Hello Rhino! </h1>";
echo "<div align=\"center\"><img src=\"http://themetapicture.com/pic/images/2015/03/15/funny-rhinoceros-unicorn-curves-standard.jpg&imgrefurl=http://themetapicture.com/screw-societys-standards/rhino.png\"><?img></div>";
echo "<h2 align=\"center\"> You have successfully created a bucket called ($bucket)</h2>";
echo "<div align=\"center\"> <a href=\"createFile.php?bucket=$bucket\">Click to continue</a></div>";
?>