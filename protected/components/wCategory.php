<?php 
class wCategory extends CWidget
{
	public function init(){
		parent::init();
		
	}
	public function run()
	{
		/*Top nxb*/
		$criteria = new CDbCriteria ();
		$criteria->order = 'frequency desc';
		$list = Tag::model()->findAll($criteria);		
		$this->render('category', array(
			'list'=>$list,			
		));
	}
}
?>