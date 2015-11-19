
<script src="<?php echo Yii::app()->request->baseUrl?>/js/bootstrap.min.js" type="text/javascript" ></script>

<button type="button" class="button-evelope btn btn-primary " data-toggle="modal" data-target="#fullTipModal"><span class="glyphicon glyphicon-envelope evelope"></span>Trao đổi</button>


<div class="modal fade margin-top-30" id="fullTipModal">
   <div class="modal-dialog">
         <div class="report-modal-header background-white">
            <div class="popup-close">
            </div>
            <div class="suport-popup-close">
               
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <span class="modal-title margin-left-15" id="full_tip_name">Lời mời trao đổi sản phẩm</span>
         </div>
      <div class="background-white border-bottom-right border-bottom-left">
         <div class="modal-body row">
 			<?php foreach($list as  $data):?>
         <?php
         $model=Post::model()->findByPk($data->id_post);
         $model1=Post::model()->findByPk($data->id_post_traodoi);
         $model2=User::model()->findByPk($data->id_user);
         ?>
      <div class="col-md-9">
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/viewtraodoi&id=<?php echo $data->id_post_traodoi;?>">
   <span class="category"><?php echo $model1->title; ?></span>
	</a>
   trao đổi lấy
   <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/view&id=<?php echo $data->id_post;?>">
   <span class="category"><?php echo $model->title; ?></span>
   </a>
   <p class="category"><?php echo $model2->username; ?></p>
   </div>
   <div class="col-md-3">
      <a  href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/viewtraodoi&id=<?php echo $data->id_post_traodoi;?>&idreport=<?php echo $data->id;?>" role="button"><button class=" btn btn-warning">Xem sản phẩm</button></a>
   </div>
<?php endforeach;?>
         </div>
         <div class="modal-footer">
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>