<?php

//Get all post data
extract($_POST);

//Display message - if appropriate
if (count($_POST) > 0)
{
    print("<h1>Post Data Follows:</h1>");

    //Print out post data
    for ($i = 0; $i < count($_POST); $i++)
    {
        //Gett he current key
        $ind = key($_POST);

        //Get the current value
        $data = $_POST[$ind];
        print("<p>Index: $ind, Data: $data </p>");

        //Get the next one
        next($_POST);
    }
}



$name = $_POST['name'];
$title = $_POST['title'];
$blog = $_POST['blog'];


print("<h1>Server variables</h1>");

for ($i = 0; $i < count($_SERVER); $i++)
{
    $ind = key($_SERVER);
    $data = $_SERVER[$ind];
    print("<p>Index: $ind, Data: $data </p>");
    next($_SERVER);
}





if (count($_FILES))
{
    $target_dir = "images/blog/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    //Temporary file is moved to permanent file
    // source               // destination
    $res = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    if (!$res)
    {
        print("<h1>Problem uploading ".$target_file."<h1>");
    }
    else
    {
        print("<h1>.$target_file."."Uploaded Successfully</h1>");
    }
}

// Construct blog record
$date = date('d-m-y');
$record = "$name,$title,$target_file,$blog,$date";


// Write the record to the file.
$file = fopen('blog.txt', 'a');

if (!$file)
    exit("<h1>Error openng info </h1>");

fwrite($file, $record . "\r\n");
fclose($file);



?>