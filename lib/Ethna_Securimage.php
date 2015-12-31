<?php
// vim: foldmethod=marker
/**
*	Ethna_Securimage.php
*
*	@author		remix.asia
*	@license	
*	@package	Ethna
*	@version	1.0
*/

// {{{ Ethna_Securimage
/**
*	Securimage 3.6.2	http://www.phpcaptcha.org/download/
*
*	@author		
*	@access		
*	@package	Ethna
*/
require_once 'securimage/securimage.php';

class Ethna_Securimage extends Securimage
{
	public function __construct( $Ethna_Backend )
	{
		$appid = $Ethna_Backend->getAppId();
		session_save_path( $Ethna_Backend->getTmpdir() );
		session_name( $appid.'SESSID' );
		return parent::__construct(
			array(
				'session_name'=> $appid.'SESSID',
			)
		);
	}
}
// }}}
?>
