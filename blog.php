 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title></title>
    <style>
	   .style
        {
            position: absolute;
           margin-left: 35%;
          
        }
		.style1
        { 
		 
		 border: 4.5px solid #000000;
            width: 898px;
            height: 250px;            
			   margin-left: -30%;
        }
	    </style>

</head>

<body bgcolor="#E2E2E2">
    <?php
// Open the file containing the blog posts.
$file = fopen("blog.txt", "r");

// If we couldn't open the file, we need to stop.
if (!$file)
  exit("<h1>Error openng info </h1>");
$records=array();
// Read one line of the file at a time to get the info  data.
while (true)
{
  // Get the current line in the file.
  $line = fgets($file);

  // use the trime function to remove leading/trailing ws
  $line = trim($line);
 


      //Check for eof - returns t/f
      if (!$line)
      {
        break;
      }
      // split out
      $fields = explode(",",$line);
      $record = array("name" => $fields[0], "title" => $fields[1],"img" => $fields[2],"comment"=>$fields[3],"date"=>$fields[4]);

      array_push($records, $record);

}
// Close the file now that we're finished reading from it.
fclose($file);
 echo '<div class="style">';
foreach ($records as $record)
{
	
    echo "<h1><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $record["title"] . "</h1><br/>";
    echo "<h4>by " . $record["name"] ." on " .$record["date"]."</h4><br/>";
    echo "<img src='" . $record["img"] . "' width='300' height='200'</><br/><br/>";
	echo '<div class="style1">';
    echo "<p>" . $record["comment"] . "</p><br/>";
		 echo '</div  >';
}

 echo '</div  >';



    ?>
 </body>
</html>