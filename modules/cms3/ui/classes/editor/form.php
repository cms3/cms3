<?php

namespace CMS3\UI;

use CMS3\Engine\NS;

class Editor_Form extends Editor {

	public function render($action = NULL)
	{
		if (! is_object($this->_model) || ! is_object($this->_model->meta()))
		{
			return NULL;
		}
		
		$form = \Formo::form()->orm_driver()->load($this->data);
		$form->attr(array(
			'method' => 'post',
			'action' => $action
		));
		$form->add('model', 'hidden', array('value' => get_class($this->_model)));
		$form->add(__('Save'), 'submit');

		return $form->generate();
	}
}
