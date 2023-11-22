<?php
// Create an array for storing the blog posts.

$no_lines = 0;
$record = "Joe Smith,"."Spring Time is Here,"."image.png,"."Spring time is finally here at Toad Suck". date('m-d-y');
$str = "hello";

// Write the record to the file.
$file = fopen('blog.txt', 'a');

if (!$file)
  exit("<h1>Error openng info </h1>");

fwrite($file, $record . "\r\n");
fwrite($file, $record . "\r\n");
fwrite($file, $record . "\r\n");
fclose($file);

// Open the file containing the blog posts.
$file = fopen("blog.txt", "r");

// If we couldn't open the file, we need to stop.
if (!$file)
  exit("<h1>Error openng info </h1>");

// Read one line of the file at a time to get the info  data.
while (true)
{
  // Get the current line in the file.
  $line = fgets($file);

  // If this is the end of the file, stop.
  if (!$line)
    break;
  // use the trime function to remove leading/trailing ws
  $line = trim($line);
  // Save the information about this blog entry.
  $info[$no_lines++] = $line;
}

// Close the file now that we're finished reading from it.
fclose($file);




?>