Security
=====
* ALWAYS filter and sanitise any user input (research at the very least `filter_var()`, `htmlentities()`, `mysqli_real_escape_string()`)
* The templater is very simple and uses the PHP `extract()` function internally, this is not strictly bad, but please read the warnings section here https://php.net/manual/en/function.extract.php
