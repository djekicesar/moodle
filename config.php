<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-54-247-118-139.eu-west-1.compute.amazonaws.com';
$CFG->dbname    = 'd3uv586emgp79t';
$CFG->dbuser    = 'ntgxkwppmhbqjy';
$CFG->dbpass    = 'c51a6dbb97b04ccdd3d5da95ec33fcf3b2103500c34e8b94cf437f3282ec2f43';
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
