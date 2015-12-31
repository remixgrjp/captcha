<?php
// vim: foldmethod=marker
/**
*	Capt_ActionClass.php
*
*	@author	 {$author}
*	@package	Capt
*	@version	$Id$
*/

// {{{ Capt_ActionClass
/**
*	action execution class
*
*	@author	 {$author}
*	@package	Capt
*	@access	 public
*/
class Capt_ActionClass extends Ethna_ActionClass
{
	/**
	*	authenticate before executing action.
	*
	*	@access public
	*	@return string  Forward name.
	*				  (null if no errors. false if we have something wrong.)
	*/
	function authenticate()
	{
		$this->backend->log( LOG_DEBUG, '▲%s', session_id() );
		if( !$this->session->isStart() ){
			///	セッション開始
			if( ! $this->session->start() ){
				$this->backend->log( LOG_WARNING, '例外スタートセッション' );
			}
		}
		$this->backend->log( LOG_DEBUG, '▼%s', session_id() );

		return parent::authenticate();
	}

	/**
	*	Preparation for executing action. (Form input check, etc.)
	*
	*	@access public
	*	@return string  Forward name.
	*				  (null if no errors. false if we have something wrong.)
	*/
	function prepare()
	{
		return parent::prepare();
	}

	/**
	*	execute action.
	*
	*	@access public
	*	@return string  Forward name.
	*				  (we does not forward if returns null.)
	*/
	function perform()
	{
		return parent::perform();
	}
}
// }}}

?>
