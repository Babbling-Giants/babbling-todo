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
Alex Zielsinki: Added: 	/views/itemedit.php to allow editing of items by owner ~ March 12 2017
Alex Zielinski: Added:  /views/itemadd.php for an owner to add a new item
						/views/oneitemx.php to create links out of task ID's for owners ~ March 12 2017
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
Alex Zielinski: Modified:	/controllers/Mtce.php added new form fields (size, group and status)
							/models/Tasks.php added a status form validation rule
							/views/itemedit.php added the form fields that need to be displayed
Alex Zielinski: Modified:   /models/Tasks.php to validate form rules
							/controllers/Mtce.php added add function which initiates adding a new task
												  added edit function to initiate editing of a task
												  added showit method to render the current DTO
												  added submit method to handle form submissions
												  added cancel method to cancel a form update
												  added delete method to delete a task ~ March 12 2017
							/views/itemedit.php added two buttons to allow users to delete or cancel
Matt Goerwell:  Updated View controller and Priority view to enable task completion for the Owner Role. ~ March 9 2017
Matt Goerwell:  Updated menubar to use proper user roles, added complete button and role handling to work page ~ March 9 2017
Alex Zielinski: Modified database to use RDB for sessions and created SQL dump
				Modified:	/config/config.php
							/data/todo.sql ~ March 9 2017
							
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
