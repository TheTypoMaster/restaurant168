<?php
class setting_backupController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		//$this->_helper->layout()->disableLayout();
		$frm = new setting_Form_FrmBackup();
		$this->view->form = $frm->Frmbackup();
	}
	public function addAction(){
		//$this->_helper->layout()->disableLayout();
		$frm = new setting_Form_FrmBackup();
		$this->view->form = $frm->Frmbackup();
	}
	
	
	
}

