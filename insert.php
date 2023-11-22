<?php
require('function.php');

 //Open the database
    $data = openDB();

    $query1 = "select * from customer;";
  

   // print("The query is $query</br>");

    //Invoke the query
    $res = mysqli_query($data, $query1 );

    //Check the result
    if ($res == false)
    {
        //print("No data found<BR/>");
        return(0);
    }

    while(true)
    {
        //Invoke the row
        $row = mysqli_fetch_row($res);

        if (!$row)
        {
            break;
        }

        print($row[0]);


    }
    $name_first = $_POST['name_first'];
    $name_last = $_POST['name_last'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];
    $cc_no = $_POST['cc_no'];
    $expYear = $_POST['expYear'];
    $check1 = $_POST['check1'];
    $expMonth = $_POST['expMonth'];
    $item_no = $_POST['item_no'];
    $qantity = $_POST['qantity'];



   $query2 = "insert into customer values('$cc_no','$expMonth','$expYear','$name_first','$name_last','$email','$address1','$address2','$city','$state','$zip','$country','$phone','$fax','$check1')";
   
$query3 = "insert into orders1 values(NOW(),'$cc_no','$item_no','$qantity')";
$query4 = "UPDATE product SET inventory = inventory - $qantity WHERE item_no = '$item_no'";


  // print("The query is $query</br>");

   //Invoke the query
    try
    {
         mysqli_query($data, $query2);
    mysqli_query($data, $query3);
    mysqli_query($data, $query4);
    }
    catch (mysqli_sql_exception $e)
    {
        print($e->getMessage().$e->getCode());
    }

    mysqli_close($data);



 print("</BR>sucessfully upload!</br>");


?>