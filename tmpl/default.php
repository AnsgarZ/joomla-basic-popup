<?php
// No direct access
defined ( '_JEXEC' ) or die ();

// only show once per session
$session = JFactory::getSession ();
$hidePopup = $session->get ( 'hide_basic_popup' );

if ( ! $hidePopup ) {
	
	$session->set ( 'hide_basic_popup', 1 );
	
	// inlude required css and js files
	$document = JFactory::getDocument();
	$modulePath = JURI::base() . 'modules/mod_basic_popup/';
	
	//Adding JS File
	$document->addScript($modulePath . 'js/mod_basic_popup.js');
	
	//Adding CSS File
	$document->addStyleSheet($modulePath . 'css/mod_basic_popup.css');
	
	// get popup content from parameters
	$module = JModuleHelper::getModule ( 'mod_basic_popup' );
	$moduleParams = new JRegistry ( $module->params );
	$popup_image = $moduleParams->get ( 'popup-image', '' );
	$popup_content = $moduleParams->get ( 'popup-content', 'popup text' );
	
	// only show once per session
	if ( ! $hidePopup ) :
		?>
    <div id="mod_basic_popup_wrapper">
	    <div id="mod_basic_popup_box">
	    <?= (! empty ( $popup_image )) ? "<img src='$popup_image' />" : $popup_content; ?>
	    </div>
    </div>
	<?php 
	endif;
}
