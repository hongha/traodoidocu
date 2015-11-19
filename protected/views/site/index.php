
<p class="danhmuc_tag">Các bài đăng mới</p>
<?php 
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
