# joomla-basic-popup
A Joomla module to show a popup containing an image or custom text


Some aspects:
* The popup closes after a mouse click or otherwise automatically after some sec
* The popup only shows once per session (to avoid annoyed users by too much popping up)
* The popup makes use of jQuery functions


Installation:
* Create a new folder "mod_basic_popup" within the folder "module" of your Joomla installation
* Copy all files and folders of the module to the just created folder "mod_basic_popup"
* Login as Joomla admin and choose "Extensions > Manage > Discover", the "Basic Popup" module should be listed
* Checkmark the module and click install button, you may get a message similar to "Message - Discover install successful."
* Choose "Extensions > Modules", click "New", then choose the "Basic Popup" module
* Complete the following:
  * Enter a title (e.g. "Popup")
  * Choose a Popup image - or alternatively enter html content -
  * Set “Show title” to "Hide"
  * Select an appropriate "Position" (most of the positions should be possible that are used by your template)
* Click "Save"
