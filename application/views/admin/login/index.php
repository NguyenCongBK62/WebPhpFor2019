<html>
	<head>
		<?php $this->load->view('admin/head');?>
	</head>
	<body>
	
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Đăng nhập</div>
					<div class="panel-body">
						<form role="form" method="post">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="Username" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
								</div>
								<center><div style="color:red;font-weight:bolder;"><?php echo form_error('login'); ?></div></center>
								<button type="submit" class="btn btn-primary">Đăng nhập</button>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
			
	</body>
</html>