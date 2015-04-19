Security
=====
* ALWAYS filter AND sanitise ALL user input
* The Templater is very simple and uses the PHP `extract()` function internally, this is not strictly bad, but please read the warnings section here https://php.net/manual/en/function.extract.php
