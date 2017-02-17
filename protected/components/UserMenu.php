<?php

Yii::import('zii.widgets.CPortlet');
//echo "from protected/components/UserMenu.php";
class UserMenu extends CPortlet
{


	public function init()
	{
		$this->title=CHtml::encode(Yii::app()->user->name);
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('userMenu');
	}
}