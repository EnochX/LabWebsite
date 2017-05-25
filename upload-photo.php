<?php

session_start();
include "header.php";

?>

			<div class="page-header">
				<div class="container">
					<h3>上传照片<small class="pull-right hidden-xs"> <a href="./">首页</a> > <a class="active" href="#">上传照片</a></small></h3>
					<small class="visible-xs"><a href="./">首页</a> > <a class="active" href="#">上传照片</a></small>			
				</div>			
			</div>
			<div class="container upload-photo">
				<div class="row">
					<div class="col-sm-8">
						<form role="form" action="/" method="post" class="contactform">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="album"><i class="icon-user"></i> 选择相册</label>
										<select class="form-control" name="album" id="album">
											<option value="默认相册">默认相册</option>
											<option value="相册1">相册1</option>
											<option value="相册2">相册2</option>
											<option value="相册3">相册3</option>
											<option value="相册4">相册4</option>
										</select>
									</div>
									<div class="form-group">
										<label for="new-album"><i class="icon-plus"></i> 创建相册
											<input type="checkbox" id="if-new-album" onclick="checkboxEvent(this)">
										</label>
										<input disabled name="new-album" class="form-control" value="" id="new-album" required="" type="text" placeholder="输入新的相册名称">
									</div>								
									
								</div>
								<div class="col-sm-12">
									<label for="new-photo"><i class="icon-pencil"></i> 选择照片</label>
									<input type="file" name="new-photo" id="new-photo" class="form-control" multiple/>
								</div>
							</div>
							<div class="row" style="margin-top:20px">
								<div class="col-sm-2 col-sm-offset-8 submit-button">
									<a class="btn btn-default btn-large" type="submit" href="./gallery.php">取消上传</a>
								</div>
								
								<div class="col-sm-2 submit-button">
									<input class="btn btn-main btn-large" value="确认上传" type="submit">
								</div>
							</div>
						</form>
					</div>
					<hr class="visible-xs" />
				</div>
			</div>
			
			<?php
				include "footer.php";
			?>
			
			<script type="text/javascript">
				function checkboxEvent(obj){
					if(obj.checked){
						document.getElementById("new-album").disabled=false;
						document.getElementById("album").disabled=true;
					}else{
						document.getElementById("new-album").disabled=true;
						document.getElementById("album").disabled=false;
					}
				}
			</script>
			<script>
				$(document).ready(function(){
					var marginTop = window.screen.height - $("#footer-bottom").offset().top - 195;
					$("footer").css({"margin-top":marginTop});
				});
			</script>

