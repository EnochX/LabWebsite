<?php

session_start();
include "header.php";

?>
			<div class="page-header">
				<div class="container">
					<h3>相册<small class="pull-right hidden-xs"> <a href="./">首页</a> > <a class="active" href="#">相册</a></small></h3>
					<small class="visible-xs"><a href="./">首页</a> > <a class="active" href="#">相册</a></small>
				
				</div>			
			</div>
			
			<div class="container gallery">
				<div class="row" style="margin-bottom: 20px">
					<div class="col-sm-12 ">
						<a href="./upload-photo" class="btn btn-main btn-default pull-right"><i class="icon-plus"></i> 上传照片</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 gallery-item">
						<img src="./includes/img/project-1.jpg" class="img-thumbnail img-responsive"  alt=""/>
						<div class="gallery-item-inner">
							<a href="./album.php" class="mask">
								<h4>相册的名称</h4>
								<small>2017-5-18</small>
							</a>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="./includes/img/project-2.jpg" class="img-thumbnail img-responsive"  alt=""/>
						<div class="gallery-item-inner">
							<a href="./album.php" class="mask">
								<h4>相册的名称</h4>
								<small>2017-5-18</small>
							</a>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="./includes/img/project-3.jpg" class="img-thumbnail img-responsive"  alt=""/>
						<div class="gallery-item-inner">
							<a href="./album.php" class="mask">
								<h4>相册的名称</h4>
								<small>2017-5-18</small>
							</a>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="./includes/img/project-4.jpg" class="img-thumbnail img-responsive"  alt=""/>
						<div class="gallery-item-inner">
							<a href="./album.php" class="mask">
								<h4>相册的名称</h4>
								<small>2017-5-18</small>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<img src="./includes/img/project-5.jpg" class="img-thumbnail img-responsive"  alt=""/>
						<div class="gallery-item-inner">
							<a href="./album.php" class="mask">
								<h4>相册的名称</h4>
								<small>2017-5-18</small>
							</a>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="./includes/img/project-6.jpg" class="img-thumbnail img-responsive"  alt=""/>
						<div class="gallery-item-inner">
							<a href="./album.php" class="mask">
								<h4>相册的名称</h4>
								<small>2017-5-18</small>
							</a>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="./includes/img/project-7.jpg" class="img-thumbnail img-responsive"  alt=""/>
						<div class="gallery-item-inner">
							<a href="./album.php" class="mask">
								<h4>相册的名称</h4>
								<small>2017-5-18</small>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<?php
				include "footer.php";
			?>

