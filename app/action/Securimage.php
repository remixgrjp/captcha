<?php
/**
*	Securimage.php
*
*	@author		remix.asia
*	@package	Capt
*	@version	1.0
*/

/**
*	Securimage Form implementation.
*
*	@author	 {$author}
*	@access	 public
*	@package	Capt
*/
class Capt_Form_Securimage extends Capt_ActionForm
{
	/**
	*	@access private
	*	@var	array   form definition.
	*/
	var $form = array(
	);

	/**
	*	Form input value convert filter : sample
	*
	*	@access protected
	*	@param  mixed   $value  Form Input Value
	*	@return mixed		   Converted result.
	*/
	/*
	function _filter_sample($value)
	{
		//  convert to upper case.
		return strtoupper($value);
	}
	*/
}

/**
*	Securimage action implementation.
*
*	@author	 {$author}
*	@access	 public
*	@package	Capt
*/
class Capt_Action_Securimage extends Capt_ActionClass
{
	/**
	*	preprocess of Securimage Action.
	*
	*	@access public
	*	@return string	forward name(null: success.
	*								false: in case you want to exit.)
	*/
	function prepare()
	{
		return null;
	}

	/**
	*	Securimage action implementation.
	*
	*	@access public
	*	@return string  forward name.
	*/
	function perform()
	{
		return 'Securimage';
	}
}

?>
