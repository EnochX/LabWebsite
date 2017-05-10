<?php

session_start();
include "header.php";

?>	

	<div class="page-header">
		<div class="container">
			<h3>LAB369<small> - 复旦大学微电子学院</small><small class="pull-right hidden-xs"> <a class="active" href="#">首页</a></small></h3>
			<small class="visible-xs"><a class="active" href="#">Home</a></small>
		</div>			
	</div>
				
	<div class="banner">
		<ul>
			<li style="">
				<img src="./includes/img/banner-2.jpg" class="img-responsive"  alt="" />
			</li>
			<li style="">
				<img src="./includes/img/banner-1.jpg" class="img-responsive"  alt="" />
			</li>
			<li style="">
				<img src="./includes/img/banner-3.jpg" class="img-responsive"  alt="" />
			</li>
			<li style="">
				<img src="./includes/img/banner-4.jpg" class="img-responsive"  alt="" />
			</li>
			<li style="">
				<img src="./includes/img/banner-5.jpg" class="img-responsive"  alt="" />
			</li>
						
			<!--<li style="background-image: url('./includes/img/slide-bg.png');background-repeat:repeat;text-align:center;background-size:150px 150px !important;">
				<h1>Slide with a background image</h1>
				<p>You can also use different background images and layouts in your slides. For example, this one is center-aligned.</p>
				<div style="margin-bottom:100px;"></div>
				<a class="btn btn-main" href="#">Buy Now For Just $10</a>
			</li>
			<li style="background-color:#eee;text-align:center;">
				<h1>Uh! Yet Another Slide</h1>
				<p>Just to show a slide with a different solid color as background.</p>
				<div style="margin-bottom:100px;"></div>					
				<a class="btn btn-main" href="#">Buy Now For Just $10</a>
			</li>-->
		</ul>
	</div>
	<h3 class="headline">
		欢迎加入复旦大学微电子学院智能电子实验室 <br>从我们的主页中了解我们
	</h3>
				
	<hr/>

	<div id="features">
		<div class="container">
			<div class="row feature">
				<div class="col-sm-6">
					<img src="./includes/img/project-3.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-sm-5 info">
					<h3>
						<i class="icon-laptop icon-large"></i>最新动态
						<small class = "pull-right"><a href = "blog.html">更多</a></small>
					</h3>
					<ul>
						<li><a href="#"><i class="icon-pencil"></i>ALTERA宣布推出新一代低成本FPGA</a></li>
						<li><a href="#"><i class="icon-pencil"></i>XLINIX投片首款Virtex UltraScale All Programmable器件 行业唯一高端20nm产品系列即将上市</a></li>
						<li><a href="#"><i class="icon-pencil"></i>学生组队参与全国大学生集成电路创新创业大赛（NCICC）-深度学习（卷积神经网络CNN优化）</a></li>
					</ul>
				</div>
				<hr class="visible-xs" />
			</div>
			<div class="row feature">
				<div class="col-sm-6 pic-right">						
					<img src="./includes/img/project-16.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-sm-5 col-sm-offset-1 info info-left">
					<h3>
						<i class="icon-info icon-large"></i> 信息公告
						<small class = "pull-right"><a href = "blog.html">更多</a></small>
					</h3>
					<ul>
						<li><p><i class="icon-calendar"></i> 2017-5-5</p><a href="#">【预告】lab369研讨会第五期--主题：人体姿势估计 主讲人：张均 时间：2017-5-11 19:00</a></li>
						<li><p><i class="icon-calendar"></i> 2017-5-3</p><a href="#">lab369研讨会第四期--主题：异构计算集群变成模型 主讲人：王磊 时间：2017-5-4 19:00</a></li>
						<li><p><i class="icon-calendar"></i> 2017-4-26</p><a href="#">lab369研讨会第三期--主题：深度学习在图像语义分割中的应用 主讲人：相恒亮 时间：2017-4-27 18:00</a></li>
					</ul>
				</div> 
				<hr class="visible-xs" />               
			</div>		
		</div>				
	</div>
	
	<?php
	include "footer.php";
	?>
				
				


