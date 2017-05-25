<?php

session_start();
include "header.php";

?>
	<link href="./includes/css/datepicker-jqueryui.css" rel="stylesheet">
	<link href="./includes/css/datepicker-style.css" rel="stylesheet">
	
			<div class="page-header">
				<div class="container">
					<h3>最新动态<small class="pull-right hidden-xs"> <a href="./">首页</a> > <a class="active" href="#">最新动态</a></small></h3>
					<small class="visible-xs"> <a href="./">首页</a> > <a class="active" href="#">最新动态</a></small>
				
				</div>			
			</div>
			<div class="container">
				<div class="row blog">
					<div class="col-sm-8 blog-content">
						<div class="blog-post-item">
							<div class="row">
								<div class="col-sm-12">
									<h4><a href="blog-post.html">ALTERA宣布推出新一代低成本FPGA</a></h4>
									<div class="blog-post-metadata">
										<span class="blog-post-date"><i class="icon-calendar"></i> 27/09/2012</span>
										<span class="blog-post-author"><i class="icon-pencil"></i> 编辑人</span>
									</div>
									<div class="blog-post-content-summary">
										There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable <a href="blog-post.html"><span class="label label-tag"> ... more</span></a>
									</div>
								</div>
							</div>
						</div>
						<hr class="visible-xs"/>
						<div class="blog-post-item">
							<div class="row">
								<div class="col-sm-12">
									<h4><a href="blog-post.html">ALTERA宣布推出新一代低成本FPGA</a></h4>
									<div class="blog-post-metadata">
										<span class="blog-post-date"><i class="icon-calendar"></i> 27/09/2012</span>
										<span class="blog-post-author"><i class="icon-pencil"></i> 编辑人</span>
									</div>
									<div class="blog-post-content-summary">
										There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable <a href="blog-post.html"><span class="label label-tag"> ... more</span></a>
									</div>
								</div>
							</div>
						</div>
						<hr class="visible-xs"/>
						<div class="blog-post-item">
							<div class="row">
								<div class="col-sm-12">
									<h4><a href="blog-post.html">ALTERA宣布推出新一代低成本FPGA</a></h4>
									<div class="blog-post-metadata">
										<span class="blog-post-date"><i class="icon-calendar"></i> 27/09/2012</span>
										<span class="blog-post-author"><i class="icon-pencil"></i> 编辑人</span>
									</div>
									<div class="blog-post-content-summary">
										There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable <a href="blog-post.html"><span class="label label-tag"> ... more</span></a>
									</div>
								</div>
							</div>
						</div>
						<hr class="visible-xs"/>
						<div class="blog-post-item">
							<div class="row">
								<div class="col-sm-12">
									<h4><a href="blog-post.html">ALTERA宣布推出新一代低成本FPGA</a></h4>
									<div class="blog-post-metadata">
										<span class="blog-post-date"><i class="icon-calendar"></i> 27/09/2012</span>
										<span class="blog-post-author"><i class="icon-pencil"></i> 编辑人</span>
									</div>
									<div class="blog-post-content-summary">
										There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable <a href="blog-post.html"><span class="label label-tag"> ... more</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-paging">
							<a href="#" class="btn btn-default"><i class="icon-double-angle-left"></i> Newer</a>
							<a href="#" class="btn btn-default">Older <i class="icon-double-angle-right"></i></a>
						</div>
						<hr class="visible-xs"/>
					</div>
					<div class="col-sm-4 blog-sidebar">
						<div class="sidebar-item">
							<div class="header"><h4>日历</h4></div>
							<div class="row">
								<div class="col-sm-12 blog-post">
									<main id="frame">
										<div id='date_time'></div>
										<div id='calendar'></div>			
									</main>
								</div>
							</div>
						</div>
					
						<div class="sidebar-item">
							<div class="header"><h4>通知公告</h4></div>
							<div class="row">
								<div class="col-sm-12 blog-post">
									<a href="blog-post.html">2017年端午节放假通知</a>
									<span class="pull-right">2017-5-14</span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 blog-post">
									<a href="blog-post.html">lab369研讨会第四期--主题：异构计算集群变成模型</a>
									<span class="pull-right">2017-5-14</span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 blog-post">
									<a href="blog-post.html">lab369研讨会第三期--主题：深度学习在图像语义分割中的应用</a>
									<span class="pull-right">2017-5-14</span>
								</div>
							</div>
						</div>
						
						<div class="sidebar-item">
							<div class="header"><h4>别的内容</h4></div>
							
						</div>
					</div>
		
				</div>
			</div>
			
			
			<?php
				include "footer.php";
			?>
			<script src='./includes/js/jquery.datepicker.jqueryui.js'></script>
			<script src="./includes/js/jquery.datepicker.index.js"></script>