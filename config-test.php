<?php  /// Moodle Configuration File 
unset($CFG);
global $CFG;
$CFG->dbtype    = '';
$CFG->dbhost    = '';
$CFG->dbname    = '';
$CFG->dbuser    = '';
$CFG->dbpass    = '';
$CFG->dbpersist =  ;
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = '';
$CFG->dirroot   = dirname(__FILE__);
$CFG->dataroot  = '';
$CFG->admin     = 'admin';
$CFG->testmode = true; // use to prevent config.php being loaded and unsetting our config
$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>

