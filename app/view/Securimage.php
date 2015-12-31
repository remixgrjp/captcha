<?php
/**
*	Securimage.php
*
*	@author		remix.asia
*	@package	Capt
*	@version	1.0
*/

/**
*	Securimage view implementation.
*
*	@author	 {$author}
*	@access	 public
*	@package	Capt
*/
class Capt_View_Securimage extends Capt_ViewClass
{
	/**
	*	preprocess before forwarding.
	*
	*	@access public
	*/
	function preforward()
	{
		$img = new Ethna_Securimage( $this->backend );

		if (!empty($_GET['namespace'])) $img->setNamespace($_GET['namespace']);

		$img->show();  // outputs the image and content headers to the browser
		exit;
	}
}

?>
