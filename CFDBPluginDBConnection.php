<?php
    require_once(ABSPATH . WPINC . '/wp-db.php');

    include('CFDBPluginDBConfig.php');
    
    global $cf7dbplugin_usewpdb;
    global $cf7dbplugin_db;
    global $wpdb;

    if (isset($cf7dbplugin_db))
    {
        global $cf7dbplugin_db;
        if (($cf7dbplugin_db == $wpdb) == $cf7dbplugin_usewpdb)
        {
            return;
        }
    }


    if ($cf7dbplugin_usewpdb)
    {
         $cf7dbplugin_db = $wpdb;
    }
    else
    {
        global $cf7dbplugin_db;
        $cf7dbplugin_db = new wpdb( $cf7dbplugin_dblogin, 
                                    $cf7dbplugin_dbpassword, 
                                    $cf7dbplugin_dbname, 
                                    $cf7dbplugin_dbhost);  
    }
?>
