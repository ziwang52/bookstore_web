
<?php
require('function.php');

$id_no = $_GET['id_no'];
$desc = $_GET['desc'];
$image = $_GET['image'];

//$book_name = getname($id_no);
$book_price = getprice($id_no);
$inventory = getinv($id_no);


$name = getname($id_no);

 
$book_price = getprice($id_no);
$inventory = getinv($id_no);

if ($id_no == 0){$book_name = "DanielPlan"; }
if ($id_no == 1){$book_name = "SoulHealing";}
if ($id_no == 2){$book_name = "WheatBelly";}
if ($id_no == 3){$book_name = "ExerciseCure";}
if ($id_no == 4){$book_name = " WhatToExpect";}
if ($id_no == 5){$book_name = "TheFirstYear";}
if ($id_no == 6){$book_name = "HandsFreeMama";}
if ($id_no == 7){$book_name = "TalktoKids";}



?>

<html >
   <head>
      <title>A simple PHP document</title>

   </head>

<body bgcolor="#b9ffff" >
<?php

print("<center><h1>");

print( "$name<BR/>" );

print( "<img id='image'src='$image'  /><BR/>" );
print( "<i>$desc<i/><BR/>" );

print( "Price: $book_price<BR/>" );
 
print ( "Quanity: <input type='text' id='quanity' maxlength='2' name='quanity'  size='7' pattern='[0-5]+' align='middle' required='required' /><BR/>");
print("</h1> </form><BR/>");






if ($inventory > 0)
{
    print("<a href=checkout.html><img src='images\BuyNow.png'  onclick=additem(\"$book_name\",$book_price,$inventory) /></a><BR/>");
   // print("<a href=checkout.html onclick=additem(\"$book_name\",$book_price,$image,$inventory)><img src='images\BuyNow.png'   /></a><BR/>");
//print ("<input type=\"image\" src=\"images/BuyNow.png\"  onclick=additem('$book_name', $book_price, $inventory); window.location.href='checkout.html';">");
}
else
{
    print("<BR/><H1>Out of Stock</H1>");
    print("</center>");
    echo "<script language=javascript>alert('Out of Stock!');</script>";
}



?>
   </body>
</html>
<script type="text/javascript">



  function additem(item_name,price,inventory)
  {        

	  var quanity =  document.getElementById("quanity").value;
	          var total = price * quanity;
			  
            var image =document.getElementById("image").getAttribute("src");
    document.cookie = image+ "=" + item_name + "=" +quanity+ "=" + price + "=" + total + "=" +inventory;
       

    document.write("$value is " + item_name + "<br/>");
    document.write("new cookie->" + document.cookie)
  }



</script>
