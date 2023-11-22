<?php
function  getDBInfo()
{
    $array[0] = 0;
    $count = 0;

    //Open file cf file
    $cfg = fopen("cf.txt","r");

    //Test for opening
    if (!$cfg)
    {
        exit("Cannot open cf.txt");
    }

    //Read the data
    while(true)
    {
        $line = fgets($cfg);

        //Check for eof
        if (!$line)
        {
            break;
        }

        //Otherwise store the results
        $array[$count] = rtrim($line);
        $count++;
    }

    //Return the array
    return($array);
    // sub 0 url
    // 1  usersname
    // 2 password
    //3 database student_space

}
//Function header for opening the database
function openDB()
{
    //Get the db info
    $array = getDBInfo();

    //Open database
    $database = mysqli_connect( $array[0], $array[1], $array[2] , $array[3]);

    //Test the database
    if (!$database)
    {
        exit('Cannot open database');
    }

    return($database);
}
function getAge($name)
{
    //Open the database
    $data = openDB();

    //Implement the query
    //Implement the query
    $query = "select age from worker where name = '" .$name."'";
    print("The query is $query</br>");

    //Invoke the query
    $res = mysqli_query($data, $query );

    //Check the result
    if ($res == false)
    {
        //print("No data found<BR/>");
        return(0);
    }

    //Invoke the row
    $age = mysqli_fetch_row($res);

    //Close
    mysqli_close($data);


    //Return the result
    return($age[0]);

}

function getname($id_no)
{
    //Open the database
    $data = openDB();

    //Implement the query
    //Implement the query
    $query = "select ebook_name from product where item_no = '" .$id_no."'";
   // print("The query is $query</br>");

    //Invoke the query
    $res = mysqli_query($data, $query );

    //Check the result
    if ($res == false)
    {
        //print("No data found<BR/>");
        return(0);
    }

    //Invoke the row
    $age = mysqli_fetch_row($res);

    //Close
    mysqli_close($data);


    //Return the result
    return($age[0]);

}
function getprice($id_no)
{
    //Open the database
    $data = openDB();

    //Implement the query
    //Implement the query
    $query = "select price from product where item_no = '" .$id_no."'";
   // print("The query is $query</br>");

    //Invoke the query
    $res = mysqli_query($data, $query );

    //Check the result
    if ($res == false)
    {
        //print("No data found<BR/>");
        return(0);
    }

    //Invoke the row
    $age = mysqli_fetch_row($res);

    //Close
    mysqli_close($data);


    //Return the result
    return($age[0]);

}
function getinv($id_no)
{
    //Open the database
    $data = openDB();

    //Implement the query
    //Implement the query
    $query = "select inventory from product where item_no = '" .$id_no."'";
   // print("The query is $query</br>");

    //Invoke the query
    $res = mysqli_query($data, $query );

    //Check the result
    if ($res == false)
    {
        //print("No data found<BR/>");
        return(0);
    }

    //Invoke the row
    $age = mysqli_fetch_row($res);

    //Close
    mysqli_close($data);


    //Return the result
    return($age[0]);

}
?>