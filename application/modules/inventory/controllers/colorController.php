<?php
class inventory_ColorController extends Zend_Controller_Action {
	const REDIRECT_URL = '/group/index';
	public function init()
	{
		header('content-type: text/html; charset=utf8');
		defined('BASE_URL')	|| define('BASE_URL', Zend_Controller_Front::getInstance()->getBaseUrl());
	}
	public function indexAction(){
		$frm = new inventory_Form_FrmColor();
		$this->view->form = $frm->FrmColor();
	}
	public function addAction(){
		$frm = new inventory_Form_FrmColor();
		$this->view->form = $frm->FrmColor();
	}
	
	
}

