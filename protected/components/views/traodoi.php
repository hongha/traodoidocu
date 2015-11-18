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
         <div class="modal-body">
 			<?php foreach($list as  $data):?>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/report/update&id=<?php echo $data->id;?>">
	<p class="category"><?php echo $data->id_post_traodoi; ?></p>
	<p class="category"><?php echo $data->content; ?></p>
	</a>
<?php endforeach;?>
         </div>
         <div class="modal-footer">
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>