<?php
/**
*	Index.php
*
*	@author		remix.asia
*	@package	Capt
*	@version	1.0
*/

/**
*	Index form implementation
*
*	@author		remix.asia
*	@access		public
*	@package	Capt
*/
class Capt_Form_Index extends Capt_ActionForm
{
	/**
	*	@access   private
	*	@var	  array   form definition.
	*/
	var $form = array(
		'code'	=>	array(
			'name'		=> 'ImageCharcter',
			'required'	=> true,
		),
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
*	Index action implementation.
*
*	@author		remix.asia
*	@access		public
*	@package	Capt
*/
class Capt_Action_Index extends Capt_ActionClass
{
	/**
	*	preprocess Index action.
	*
	*	@access	public
	*	@return	string  Forward name (null if no errors.)
	*/
	function prepare()
	{
		if( 0 < $this->af->validate() ){
			return 'Index';
		}
		return null;
	}

	/**
	*	Index action implementation.
	*
	*	@access	public
	*	@return	string  Forward Name.
	*/
	function perform()
	{
		$securimage = new Ethna_Securimage( $this->backend );
		if( false == $securimage->check( $this->af->get('code') ) ){
			$this->backend->log( LOG_INFO, '=== limit captcha ===' );
			$this->af->setApp( 'info', '=== NG ===' );
			return 'Index';
		}
		$this->af->setApp( 'info', '=== OK ===' );
		return 'Index';
	}
}

?>
