<?php

$zipname = date('Y/m/d');
$str = "stark-".$zipname.".zip";
$str = str_replace("/", "-", $str);

//10) Add all files from current folder in newly created zip file.

// open archive
if ($zip->open($str, ZIPARCHIVE::CREATE) !== TRUE) {
die ("Could not open archive");
}
// initialize an iterator
// pass it the directory to be processed
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("../$folder_name/"));
// iterate over the directory
// add each file found to the archive

foreach ($iterator as $key=>$value) {
if( strstr(realpath($key), "stark") == FALSE) {
$zip->addFile(realpath($key), $key) or die ("ERROR: Could not add file: $key");
}

}
// close and save archive
$zip->close();
echo "Archive created successfully."; true. $zip->addFromString(basename($source), file_get_contents($source));
return $zip->close();

?>