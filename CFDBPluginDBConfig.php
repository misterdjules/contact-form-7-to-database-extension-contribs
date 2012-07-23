<?php

  global $cf7dbplugin_usewpdb;
  $cf7dbplugin_usewpdb = false;

  global $cf7dbplugin_dbhost;
  global $cf7dbplugin_dbname;
  global $cf7dbplugin_dblogin;
  global $cf7dbplugin_dbpassword;

  if (!$cf7dbplugin_usewpdb)
  {
      // CHANGE THESE FOLLOWING FOUR VARIABLES 
      // IF YOU SET $cf7dbplugin_usewpdb to false
      // ABOVE
      $cf7dbplugin_dbhost = "yourhost";
      $cf7dbplugin_dbname = "yourdbname";
      $cf7dbplugin_dblogin = "yourdbuserlogin";
      $cf7dbplugin_dbpassword = "yourdbuserpassword";
  }
  else
  {
      $cf7dbplugin_dbhost = DB_HOST;
      $cf7dbplugin_dbname = DB_NAME;
      $cf7dbplugin_dblogin = DB_USER;
      $cf7dbplugin_dbpassword = DB_PASSWORD;
  }
  
?>
