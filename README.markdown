### INSTALLATION

* If you have a local modifications directory then copy the directories under local into that directory.  
* Create a copy of the config-test.php file provided and fill in the details for your test environment.
* You are now ready to add test suites into the local/tests directory.
* Once you have some good tests suites you can go into local/tests and run a command like
<pre>
phpunit --color --verbose AllTests
</pre>  
and the tests will run.

### Test Suites

The recommended way to do this is to mimic the layout of the moodle directory. If you want to test an auth plugin, those tests should go in:
<pre>
[MOODLE ROOT]/local/tests/auth/<pluginname>/[testname.php]
</pre>


### Compatibility

This has been used with several versions of Moodle that are minor versions of 1.9.  The majority of use has been with PHP 5.2 and 5.3 and MySQL although it has been used very briefly with a MSSQL database.
