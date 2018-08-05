<?php

  global $host, $db, $pass, $key, $user;
  $host = "localhost";
  $db = "wefit";
  $pass = "";
  $user = "root";

  $con= mysqly_connect($host,$user,$pass,$db);
 ?>
