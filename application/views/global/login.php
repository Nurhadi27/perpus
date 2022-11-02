<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		 <title><?php echo $title; ?></title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
        html,
        body {
            background-image: url('<?php echo base_url(); ?>assets2/img/background.png');
            height: 100%;
            background-repeat: no-repeat;
        }

        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            width: 380px;
            height: 450px;
            padding: 20px;
            border-radius: 0px;
            border: 2px solid #000000;
        }

        input[type="email"],
        input[type="password"] {
            background-color: #c4c4c4;
            border-radius: 0px;
        }

        .card-title {
            font-weight: 600;
            padding-top: 20px;
        }

        .btn {
            background-color: #0B4619;
            color: #ffffff;
            border-radius: 0px;
            width: 100px;
            height: fit-content;
            margin-left: 70%;
        }

        .footer {
            background-color: #0B4619;
            color: #ffffff;
            width: 100%;
            border-radius: 0px;
            height: 40px;
            
        }
    	</style>
	</head>

	<body>
		<div class="global-container">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h1 class="card-title text-center">Login</h1>												
											<div class="space-6"></div>

											 <?php echo form_open('web/login'); ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														 <?php echo form_input($username); ?>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														 <?php echo form_input($password); ?>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<button type="submit" class="width-35 pull-right btn btn-primary">
															<span class="bigger-110">Masuk</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											 <?php echo form_close(); ?>

											<div class="space-6"></div>

										
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="<?php echo base_url(); ?>web/"  class="user-signup-link">
													Halaman utama
													<i class="ace-icon fa fa-arrow-left"></i>
												</a>
											</div>

											
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							
						</div>
					</div><!-- /.col -->

		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url(); ?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/bootstrap/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
