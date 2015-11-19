<?php 
class wPlace extends CWidget
{
	public function init(){
		parent::init();
		
	}
	public function run()
	{

		$criteria = new CDbCriteria ();

		$list = Place::model()->findAll($criteria);		
		$this->render('place', array(
			'list'=>$list,			
		));
	}
}
?>