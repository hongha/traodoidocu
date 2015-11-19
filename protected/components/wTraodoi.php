<?php 
class wTraodoi extends CWidget
{

	public function init(){
		parent::init();
		
	}
	public function run()
	{
		$id=Yii::app()->user->id;
		$criteria = new CDbCriteria ();
		$criteria->compare('id_user',$id);
		$criteria->compare('status','0');
		$criteria->order = 'id desc';
		$list = Report::model()->findAll($criteria);		
		$this->render('traodoi', array(
			'list'=>$list,			
		));
	}
}
?>