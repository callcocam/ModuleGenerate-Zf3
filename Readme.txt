INSTALLATION
===================

- Extract the folder's content into module/Codegenerator folder

- Copy content of the module's public folder into application public folder

- Add valid permissions to the module's folder, if necessary

- Add the module name in the application config file (config/application.config.php), in order to "activate" the module, e.g.:

...
'modules' => array(
	'Application',
	...,
	'Codegenerator', <-- Add this line
    ),
...

- That's it! You are now ready to create new modules auto-magically.

USAGE
===================

- Visit http://%yoursite%/codegenerator (or http://%yoursite%/public/codegenerator if you didn't setup virtual host)

- The welcome page will be displayed

- Select Module Generator

- Enter your module's name and click the Create button

- New module will be created and ready for use

- Add new module's name in the application config file (config/application.config.php), in order to "activate" new module, e.g.:

...
'modules' => array(
        'Application',
		'Codegenerator',
		'Newmodule', <-- Add here your module name
    ),
...

TODO
===================


