<?php
  //Extact the Post data



   $name_first = $_POST['name_first'];  
   $pattern_first = '/^[A-Z][a-zA-Z ]*$/';
   if (!preg_match($pattern_first, $name_first)) {   print('Invalid first Name');}
   
   
   
    $name_last = $_POST['name_last'];
	$pattern_last='/[A-z ]+/';
	   if (!preg_match($pattern_last, $name_last)) {   print('Invalid last Name');}
 
	
    $email = $_POST['email'];
		$pattern_email='/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/'; 
	   if (!preg_match($pattern_email, $email)) {   print('Invalid  Emial');}
	
	
    $address1 = $_POST['address1'];
	$pattern_address1='/^\d+\s*[a-zA-Z0-9\s]+$/';
	   if (!preg_match($pattern_address1, $address1)) {   print('Invalid Address');}
	
    $city = $_POST['city'];
		$pattern_city='/[A-z ]+/';
	   if (!preg_match($pattern_city, $city)) {   print('Invalid city');}
	
	
	
	
    $state = $_POST['state'];
		$pattern_state='/[A-Z]{2}/';
	   if (!preg_match($pattern_state, $state)) {   print('Invalid state');}
	
    $zip = $_POST['zip'];
			$pattern_zip='/[0-9]{5}/';
	   if (!preg_match($pattern_zip, $zip)) {   print('Invalid zip');}
	
	
	
	

    $phone = $_POST['phone'];
	$pattern_phone='/^[\(]?\d{3}[\)]?-?\d{3}-?\d{4}$/';
	   if (!preg_match($pattern_phone, $phone)) {   print('Invalid phone number');}
	

  //Database Connectivity goes here
  //Retireve the Username goes here

  //Print out error message if $username not found in the database - this is what is returned to the user

?>


