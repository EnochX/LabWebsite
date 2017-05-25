<?php
require_once "./utils/dbConn.php";
$con = dbConn();
session_start();

if(isset($_SESSION["userInfo"])) {
	header("location: index.php");
}
$loginErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_GET["action"] == "login"){
		if (empty($_POST["user"]) || empty($_POST["password"])) {
			$loginErr = "用户名或密码不能为空";
		}
		
		$loginSuccess = false;
		$_SESSION["user"] = $_POST["user"];
		
		$sql = 'select * from users where user_="' . $_POST["user"] . '" and password="' . $_POST["password"] .'"';
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result) != 0){
			$loginSuccess = true;
		}		
		if(!$loginSuccess){
			$loginErr = "用户名或密码错误";
			//exit();
		}else{
			$_SESSION["userInfo"] = mysqli_fetch_assoc($result);
		}
		
		if(isset($_SESSION["userInfo"])){
			header("location: index.php");
		}
		//exit();		
	}
}

include "header.php";
?>

			<div class="container">
				<div class="login-box">
					<div class="login-header">
						<h4>账户登录</h4>
					</div>
					<div class="login-form">
						<form role="form" action="?action=login" method="post">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-user"></i></span>
								<input id="user" name="user" class="form-control" type="text" placeholder="用户名"
								value="<?php
									if(isset($_SESSION["user"]))
										echo $_SESSION["user"]
								?>">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-lock"></i></span>
								<input id="password" name="password" class="form-control" type="password" placeholder="密码">
							</div>
							<div class="row">
								<div class="col-sm-12 remember-me">
									 <label class="checkbox"><input type="checkbox"> Remember me</label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 cta">
									<button class="btn btn-main btn-large" type="submit" name="submit"><i class="icon-signin"></i> 登录</button>
								</div>
							</div>
							<div class="related-links">
								<a href="recover-password.html">忘记密码</a>
								<h5><?php echo $loginErr ?></h5>
							</div>					
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="./includes/js/jquery-2.0.3.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
		<script src="./includes/js/default.js"></script>
	</body>
</html>

