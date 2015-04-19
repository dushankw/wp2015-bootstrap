Security
=====
* ALWAYS filter and sanitise any user input. Research at the very least `filter_var()`, `htmlentities()` and `mysqli_real_escape_string()` (or better yet use `PDO`)
* The templater is very simple and uses the PHP `extract()` function internally, this is not strictly bad, but please read the warnings section here https://php.net/manual/en/function.extract.php
* Read: http://www.phptherightway.com/
