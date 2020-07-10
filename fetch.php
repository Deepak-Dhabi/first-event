<?php
   $dbhost = 'localhost:';
   $dbuser = ' ';
   $dbpass = ' ';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM webinar';
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "WEB NAME  :{$row['WEB_NAME']}  <br> ".
         "WEB EMAIL : {$row['WEB_EMAIL']} <br> ".
         "WEB PHONE : {$row['WEB_PHONE']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
