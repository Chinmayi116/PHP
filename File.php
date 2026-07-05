<?php
$filename = "data.txt";
$file = fopen($filename, "w");
if (!$file) {
 die("Error: Unable to create the file.");
}
fwrite($file, "Welcome to PHP File Handling.\n");
fwrite($file, "This is the first line.\n");
fclose($file);
echo "<h3>File created successfully.</h3>";
$file = fopen($filename, "r");
if (!$file) {
 die("Error: Unable to open the file for reading.");
}
echo "<h3>Contents before appending:</h3>";
while (!feof($file)) {
 echo fgets($file) . "<br>";
}
fclose($file);
$file = fopen($filename, "a");
if (!$file) {
 die("Error: Unable to open the file for appending.");
}
fwrite($file, "This line is appended later.\n");
fwrite($file, "PHP makes file handling easy.\n");
fclose($file);
echo "<h3>Text appended successfully.</h3>";
$file = fopen($filename, "r");
if (!$file) {
 die("Error: Unable to open the file after appending.");
}
echo "<h3>Contents after appending:</h3>";
while (!feof($file)) {
 echo fgets($file) . "<br>";
}
fclose($file);
?>
