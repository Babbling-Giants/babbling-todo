Team Members
Matt Goerwell  (CAPTAIN)
Alex Zielinski (First Mate)

Changelog Format:
Name: Change ~ Date
Ordered Latest to first
IE:
change2
change1

Files Added:
Matt Goerwell:  Added: _alert view for internal use ~ March 9 2017
Matt Goerwell:  Added: all caboose files (third_party/assets) ~ March 9 2017
Alex Zielinski: Added: /controllers/Roles.php ~ March 2 2017
							
Matt Goerwell: added itemnav.php to handle the view for our pagination navbar ~ March 2 2017
Alex Zielinski: Added:  /controllers/Mtce.php
						/views/itemlist.php
						/views/oneitem.php ~ March 2 2017

Matt Goerwell: Added the parsedown library, in addition to a markdown file for our new help wanted page. ~ February 17 2017
Alex Zielinski: Added: 	/controllers/Views.php, 
						/views/by_category.php
						/views/by_priority.php
						/views/template_secondary.php ~ February 16 2017
Alex Zielinski: Added table models php files ~ February 16 2017
Matt Goerwell: Added Changelog file ~ February 16 2017


Files Changed:
Matt Goerwell:  Adjusted autoload, templates, and base controller to support caboose ~ March 9 2017
Alex Zielinski: Modified:	/config/autoload.php
							/config/config.php
							/config/constants.php
							/controllers/Mtce.php
							/views/_menubar.php ~ March 2 2017
Matt Goerwell:  updated the mtce controller to handle pagination, and added the navbar to the maintenance page view. 
Matt Goerwell:  Updated our autoload file to use the new markdown library. ~ February 17 2017
Matt Goerwell:  updated views/template_secondary to reflect the required changes due to Jim's css errors ~ February 17 2017
Alex Zielinski: Added function to display data by category in /models/Tasks.php
Matt Goerwell:  Changed MY_controller to update page name and enabled better layout support, generated controller and view for homepage. ~ February 16 2017
Alex Zielinski: Changed autoload file to bind webapp to database ~ February 16 2017
