//
// Brafton Drupal 7 Module v1.0
// http://www.brafton.com/support
//

CONTENTS OF THIS FILE
---------------------
 * Introduction
 * Requirements
 * Installation
 * Settings
 * Operation

 
Introduction
------------

The Brafton Drupal 7 Module imports articles from the Brafton XML Feed. The content 
is loaded into a newly created content type called News Articles. 


Requirements
------------

 - Drupal 7.X

 
Installation
------------

- Extract the module files from the zip
- Copy the brafton folder into the /sites/all/modules directory

-> Modules
- Enable the Brafton Scheduled Feed Importer in the Feed Parser package and Save


Settings
--------

-> Brafton settings

Feed Type:
	- API Key
		Feed #0 Author - Select user for the author of the Brafton articles
		Brafton XML feed URL: Feed #0 - Enter Brafton XML feed URL with "/news" appended to the end
			e.g. http://api.brafton.com/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/news

	- Archive
		Feed #0 Author - Select user for the author of the Brafton articles
		Brafton Archive File Location - Select archive file provided by Brafton
	

Operation
---------

The importer is triggered by the Drupal cron job. 
-> Configuration -> Cron