<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-54-247-94-127.eu-west-1.compute.amazonaws.com';
$CFG->dbname    = 'd5066bhvrbogb5';
$CFG->dbuser    = 'tdspaagrqjkqoh';
$CFG->dbpass    = '213984ba3d9f3276d3b51c3930153483f37bd8f84725762edbe3311fff0f884b';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://imsponline.herokuapp.com';
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
