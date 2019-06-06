<?php
//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("mysql://bed84a9b65a9ed:2c0e42a1@eu-cdbr-west-02.cleardb.net/heroku_e311a9b2e0b19bd?reconnect=true"));
$cleardb_server   = $cleardb_url["eu-cdbr-west-02.cleardb.net"];
$cleardb_username = $cleardb_url["bed84a9b65a9ed"];
$cleardb_password = $cleardb_url["2c0e42a1"];
$cleardb_db       = substr($cleardb_url["heroku_e311a9b2e0b19bd"],1);

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => $cleardb_server,
    'username' => $cleardb_username,
    'password' => $cleardb_password,
    'database' => $cleardb_db,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
?>