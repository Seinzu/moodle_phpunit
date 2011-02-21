### INSTALLATION

* If you have a local modifications directory then copy the directories under local into that directory.  
* Create a copy of config-dist.php or config.php from the root as config-test.php in the same directory.
* In config-test.php remove the line that calls lib/setup.php, this is replaced by a Moodle test version which fixes some problems PHPUnit has with the moodle database lib.
* You are now ready to add test suites into the local/tests directory.
* Once you have some good tests suites you can go into local/tests and run a command like
<pre>
phpunit --color --verbose AllTests
</pre>  
and the tests will run.