<?php

/*
create table requests(first_name varchar(50), co_name varchar(100), email varchar(100), phone varchar(10), req_type varchar(50), description varchar(1000), datelastmaint timestamp);
 */


//Inserts a request into drulang.requests


function insert_req($f_name, $co_name, $email, $phone, $req_typ, $desc)
{
    
   $db = mysqli_connect("127.0.0.1", "webuser", "webcc22@", "drulang");
   
   if(! $db)
   {
       return mysqli_connect_error();
   }
   
   $f_name = filter_var(substr(trim($f_name), 0, 50), FILTER_SANITIZE_STRING);
   $co_name = filter_var(substr(trim($co_name), 0, 100), FILTER_SANITIZE_STRING);
   $email = filter_var(substr(trim($email), 0, 100), FILTER_SANITIZE_EMAIL);
   $phone = filter_var(substr(trim($phone), 0 , 10), FILTER_SANITIZE_NUMBER_INT);
   $req_typ = filter_var(substr(trim($req_typ), 0 , 100), FILTER_SANITIZE_STRING);
   $desc = filter_var(substr(trim($desc), 0 , 1000), FILTER_SANITIZE_STRING);
   
   $query = "insert into requests values ('".$f_name."','".$co_name."','".$email."','".$phone."','".$req_typ."','".$desc."', NOW())";
   
   return mysqli_query($db, $query);
}

?>
