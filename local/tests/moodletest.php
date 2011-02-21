<?php

if (extension_loaded('xdebug')) {
	xdebug_disable();
}

if (strpos('/usr/bin/php', '@php_bin') === 0) {
	set_include_path(dirname(__FILE__) . PATH_SEPARATOR . get_include_path());
}

require_once(dirname(__FILE__) . '/../../config-test.php');
// replicates setup.php from lib

global $CFG;

include_once($CFG->dirroot . '/local/moodletest/setup.php');