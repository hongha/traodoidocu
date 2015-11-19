<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	<script src="<?php echo Yii::app()->request->baseUrl?>/js/bootstrap.min.js" type="text/javascript" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div id="header">
		<img id="logo"src="<?php echo Yii::app()->request->baseUrl; ?>/image/logo.png">
		<!-- <input class="form-control search"type="text" placeholder="Tìm Kiếm"> -->
		<form  method="POST"  id = "" action="<?php echo Yii::app()->createUrl('Post/search1') ?>">
            <input id = "searchname" class="search" type="search" placeholder="search" name="search_str" ><br>
            <button class = "submit-search btn btn-primary hidden"id = "butsearch">Tìm Kiếm</button>
    	</form>
    	<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/post/create"><button type="button" class="btn btn-primary post-button">Đăng Tin Mới</button></a>
		<?php $this->widget('wTraodoi');?>


	</div><!-- header -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Trang chủ', 'url'=>array('/site/index')),
				array('label'=>'Giới thiệu', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Liên hệ', 'url'=>array('/site/contact')),
				array('label'=>'Đăng kí', 'url'=>array('/user/create'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Đăng nhập', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Đăng xuất ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Trang cá nhân', 'url'=>array('/user/profile'), 'visible'=>!Yii::app()->user->isGuest)
		))); ?>
	</div><!-- mainmenu -->
<div class="container" id="page">

<div class="col-md-3">
<div class="tag">
<p class="danhmuc_tag">Danh mục từ khóa</p>
	<div class="margin-left-15">
		<?php $this->widget('wCategory');?>
	</div>
</div>
<div class="tag">
<p class="danhmuc_tag">Danh mục địa điểm</p>
	<div class="margin-left-15">
		<?php $this->widget('wPlace');?>
	</div>
</div>
<img class=" quangcao" src="<?php echo Yii::app()->request->baseUrl; ?>/image/quangcao.png">
</div>
<div class="col-md-9 content1 nplr padding-15">

	

	<?php echo $content; ?>
	<!--like button facebook-->
	
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=919055684783017";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<!--end like button-->

	<!--comment facebook-->
	
		<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=919055684783017";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<!--end comment facebook-->


	<div class="fb-like" data-href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" data-width="445" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

	<!--luu comments cho tung trang web-->
	<div class="fb-comments facebook" data-href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" data-width="905" data-numposts="10" data-colorscheme="light">
	</div>		


</div>

	

	<div class="clear"></div>

</div><!-- page -->

<div id="footer" class=" margin-top-15">
	<div class="container">
		<div class="row">
            <div class="col-md-4">
            <div class="row address">
               <p>Công ty TNHH Hedspi Việt Nam</p>
               <p>Tầng 4,5 Tòa nhà D9 Đại Học Bách Khoa Hà Nội</p>
               <p>Hà Nội, Việt Nam</p>
               <p>hedspi@gmail.com</p>
               <br />
               <span id="color-enjoy">Chọn ngôn ngữ</span> <a href="#" class="enjoy">Japanes</a> <a href="#" class="enjoy">Việt Nam</a>
            </div>
            </div>
        
	        <div class="col-md-4">
	        	<div class="footer-img">
	        	<p id="tripopus-social">Tìm chúng tôi trên</p>
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/facebook.png">
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/google.png">
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/youtube.png">
	               <img src="<?php echo Yii::app()->request->baseUrl; ?>/image/twitter.png">
	            </div>
	        </div>
	        <div class="col-md-4">
	        	<div class="row">
	        	    <div class="col-md-5">
	        	    <div class="row">
                    <input class="form-control form-input  input-tripopus" type="text" placeholder=" Name " > 
                    </div>
               	    </div>
               		<div class="col-md-7">
               		<div class="row"style="padding-left:10px; margin-bottom:10px;" >
                  	<input class="form-control form-input form-input-tripopus input-tripopus" type="text" placeholder="Email">
                  	</div>
               		</div>
               		<textarea class = "oponion form-control col-md-12 input-tripopus" rows="3" style="margin-bottom:10px;" placeholder="Send us your opinions"></textarea>
               		<button type="button" class="btn btn-default btn-tripopus btn-sm col-md-12" style="">Send </button>
               </div>
	        </div>
        </div>
	</div>
</div>
<div id="copyright">
	<div class="container">
		<center><p id="right-reserved">© 2015 - All Rights Reserved</p></center>
	</div>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-553f171b421b5051" async="async"></script>
</body>
</html>
