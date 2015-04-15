Setup
=====
* cd ~/public_html/
* git clone https://github.com/dushankw/wp2015-bootstrap.git
* Rename `wp2015-bootstrap` to whatever you want

Permissions
=====
NOTE: Replace `FOLDERNAME` with whatever you called it

* cd ~/public_html/
* Set 701 on the directories: `find FOLDERNAME -type d -exec chmod 701 {} \;`
* Set 604 on the files: `find FOLDERNAME -type f -exec chmod 604 {} \;`
* Try and load it in the browser
