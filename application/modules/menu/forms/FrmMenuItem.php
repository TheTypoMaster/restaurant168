<?php 
Class menu_Form_FrmMenuItem extends Zend_Form {
	protected $tr;
	public function init()
	{
		$this->tr = Application_Form_FrmLanguages::getCurrentlanguage();
	}
	public function FrmMenu($data=null){
		//item_code
		$item_code = new Zend_Form_Element_Text('item_code');
		$item_code->setAttribs(array(
				'class'=>'form-control',
		));
		$menu_code = new Zend_Form_Element_Text('menu_code');
		$menu_code->setAttribs(array(
				'class'=>'form-control',
		));
		//menu_group
		$menu_group = new Zend_Form_Element_Select('menu_group');
		$menu_group->setAttribs(array(
				'class'=>'form-control input-xlarge select2me','onClick'=>'FuncMenuGroup()'
		));
		$db = new Menu_Model_DbTable_DbMenu();
		$opt = $db->getAllGroupMenu();
		$menu_group->setMultiOptions($opt);
		
		$root_code = new Zend_Form_Element_Select('root_code');
		$root_code->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncRootMenuCode()'
		));
		$select_root_code_opt = array( ""=>$this->tr->translate("SELECT_GROUP_CODE"),-1=>$this->tr->translate("ADD_NEW"));
		$root_code->setMultiOptions($select_root_code_opt);
		
		
		//root_menu
		$root_menu = new Zend_Form_Element_Select('root_menu');
		$root_menu->setAttribs(array(
				'class'=>'form-control input-xlarge select2me','onClick'=>'FuncRootMenuCode()'
		));
		$db = new Menu_Model_DbTable_DbMenu();
		$opt = $db->getAllRootMenu();
		$root_menu->setMultiOptions($opt);
		$root_menus = new Zend_Form_Element_Select('root_menus');
		$root_menus->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncRootMenuCode()'
		));
		$root_menu_opt = array( ""=>$this->tr->translate("SELECT_ROOT_MENU"),-1=>$this->tr->translate("ADD_NEW"));
		$root_menus->setMultiOptions($root_menu_opt);
		$print_code = new Zend_Form_Element_Select('print_code');
		$print_code->setAttribs(array(
				'class'=>'form-control input-xlarge select2me','onClick'=>'FuncRootMenuCode()'
		));
		$select_print_code_opt = array( ""=>$this->tr->translate("SELECT_PRINT_CODE"),-1=>$this->tr->translate("ADD_NEW"));
		$print_code->setMultiOptions($select_print_code_opt);
		$description = new Zend_Form_Element_Text('description');
		$description->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_1 = new Zend_Form_Element_Text('lang_1');
		$lang_1->setAttribs(array(
				'class'=>'form-control',
		));
		$lang_2 = new Zend_Form_Element_Text('lang_2');
		$lang_2->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		$lang_3 = new Zend_Form_Element_Text('lang_3');
		$lang_3->setAttribs(array(
				'checked'=>'checked','class'=>'form-control'
		));
		if($data!=null){
// 			print_r($data);
		}
		$db = new Application_Model_DbTable_DbGlobal();
		$show_description = new Zend_Form_Element_Select('show_description');
		$show_description->setAttribs(array(
				'class'=>'form-control'
		));
		$opt = $db->getVewOptoinTypeByType(1,1,null,1);
		$show_description->setMultiOptions($opt);
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$font_color = new Zend_Form_Element_Text('font_color');
		$font_color->setAttribs(array(
				'class'=>'form-control','id'=>"selected-color1"
		));
		$font_size = new Zend_Form_Element_Text('demo3');
		$font_size->setAttribs(array(
				'class'=>'form-control','id'=>"demo3",'value'=>12,'placeholder'=>'0'
		));
		$font_size = new Zend_Form_Element_Select('demo3');
		$font_size->setAttribs(array(
				'class'=>'form-control'
		));
		$description_opt = array( ""=>$this->tr->translate("$600"),-1=>$this->tr->translate("$500"));
		$font_size->setMultiOptions($description_opt);
		$photo = new Zend_Form_Element_File('photo');
		$background = new Zend_Form_Element_Text('background');
		$background->setAttribs(array(
				'class'=>'form-control color-picker-rgba'
		));
		$apply = new Zend_Form_Element_Select('apply');
		$apply->setAttribs(array(
				'class'=>'form-control'
		));
		$apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"),-1=>$this->tr->translate("ADD_NEW"));
		$apply->setMultiOptions($apply_opt);
		$combo = new Zend_Form_Element_Checkbox('combo');
		$combo->setAttribs(array(
				'class'=>'red',
		));
		$print_to = new Zend_Form_Element_Checkbox('print_to');
		$print_to->setAttribs(array(
				'class'=>'red',
		));
		$show_screen = new Zend_Form_Element_Checkbox('show_screen');
		$show_screen->setAttribs(array(
				'class'=>'red',
		));
		$discount = new Zend_Form_Element_Checkbox('discount');
		$discount->setAttribs(array(
				'class'=>'red',
		));
		$time = new Zend_Form_Element_Checkbox('time');
		$time->setAttribs(array(
				'class'=>'red',
		));
		$is_root = new Zend_Form_Element_Checkbox('$is_root');
		$is_root->setAttribs(array(
				'class'=>'red',
		));
		$require_qty = new Zend_Form_Element_Checkbox('require_qty');
		$require_qty->setAttribs(array(
				'class'=>'red',
		));
		$active = new Zend_Form_Element_Checkbox('active');
		$active->setAttribs(array(
				'class'=>'red',
		));
		$format = new Zend_Form_Element_Text('demo4');
		$format->setAttribs(array(
				'class'=>'form-control','id'=>"demo4",'value'=>12,'placeholder'=>'0'
		));
		$setting = new Zend_Form_Element_Select('setting');
		$setting->setAttribs(array(
				'class'=>'form-control'
		));
		$setting_opt = array( ""=>$this->tr->translate("SELECT_SETTING"));		
		$setting->setMultiOptions($setting_opt);
		
		$arrange = new Zend_Form_Element_Text('arrange');
		$arrange->setAttribs(array(
				'class'=>'form-control'
		));		
		$resize = new Zend_Form_Element_Text('resize');
		$resize->setAttribs(array(
				'class'=>'form-control','id'=>"resize",'value'=>12,'placeholder'=>'12'
		));
		$note = new Zend_Form_Element_Textarea('note');
		$note->setAttribs(array(
				'class'=>'form-control','style'=>"margin-top: 0px; margin-bottom: 0px; height: 100px;"
		));
		$select_apply = new Zend_Form_Element_Select('select_apply');
		$select_apply->setAttribs(array(
				'class'=>'form-control','onClick'=>'FuncApplyCompany()'
		));
		$select_apply_opt = array( ""=>$this->tr->translate("SELECT_APPLY_TO_COMPANY"),-1=>$this->tr->translate("ADD_NEW"));
		$select_apply->setMultiOptions($select_apply_opt);
		$id = new Zend_Form_Element_Hidden('id');
		if(!empty($data)){
			//print_r($data);
			$id->setValue($data['id']);
			$item_code ->setValue($data['bar_code']);
			$description->setValue($data['desc']);
			$lang_1->setValue($data['lang1']);
			$lang_2->setValue($data['lang2']);
			$font_size->setValue($data['price']);
			$show_description->setValue($data['display_by']);
			$menu_group->setValue($data['category_id']);
			$root_menu->setValue($data['root_menuid']);
			$print_code->setValue($data['print_code']);
			$print_to->setValue($data['printto_print']);
			$active->setValue($data['status']);
			$show_screen->setValue($data['showscreen']);
			$is_root->setValue($data['is_root']);
			$time->setValue($data['time']);
			$discount->setValue($data['is_discound']);
			$require_qty->setValue($data['is_reqty']);
		}
		
		$this->addElements(array($select_apply,$require_qty,$root_code,$menu_group,$item_code,$apply,$active,$combo,$menu_code,
				$description,$lang_1,$lang_2,$lang_3,$print_code,$print_to,$show_screen,$time,$discount,
				$show_description,$background,$font_color,$font_size,$format,$setting,$arrange,$resize,$note,
				$is_root,$root_menu,$root_menus,$id));
		return $this;
		
	}	
}