<?php
class Mk_StoreInfo_Adminhtml_StoreinfobackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Store Info"));
	   $this->renderLayout();
    }
}