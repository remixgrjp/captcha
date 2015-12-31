<?php
/**
*	Index.php
*
*	@author		remix.asia
*	@package	Capt
*	@version	1.0
*/

/**
*	Index view implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Capt
*/
class Capt_View_Index extends Capt_ViewClass
{
	/**
	*	preprocess before forwarding.
	*
	*	@access public
	*/
	function preforward()
	{
		$this->af->clearFormVars();
	}
}

?>
