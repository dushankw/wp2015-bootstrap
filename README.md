Design Information
=====
* You may be familiar with MVC (http://en.wikipedia.org/wiki/Model-view-controller)
* You will see this layout is similar in some respects (the big difference is there are no Models and no URL routing)
* Think of it as a Controller-View layout (most advantages of MVC are still applicable)

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

Example
=====
* http://titan.csit.rmit.edu.au/~e09962/wp2015/trevor/
