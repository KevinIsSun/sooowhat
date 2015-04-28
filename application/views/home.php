<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="This is homepage for stoooges education">
	<meta name="author" content="Kevin Somers">
	<title>Sooowhat</title>
	<link rel="icon" href="./images/favicon.gif" type="image/x-icon"/>

	<!-- Bootstrap -->
	<link href=<?php echo base_url()."css/bootstrap.min.css";?> rel="stylesheet">

	<!-- Custom CSS -->
	<link href=<?php echo base_url()."css/style.css";?> rel="stylesheet">

	<!-- Superslides CSS -->
	<link href=<?php echo base_url()."css/superslides.css";?> rel="stylesheet">

	<!-- Owl Carousel stylesheet -->
	<link href=<?php echo base_url()."css/owl.carousel.css";?> rel="stylesheet">

	<!-- Owl Carousel Default Theme -->
	<link href=<?php echo base_url()."css/owl.theme.css";?> rel="stylesheet">

	<!-- Fancybox -->
	<link href=<?php echo base_url()."css/jquery.fancybox.css";?> rel="stylesheet">

	<!-- Honeycomb -->
	<link href=<?php echo base_url()."css/homeycombs.css";?> rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
	
		<a id="home"></a>

		<!-- ========== BANNER START ========== -->

		<div id="slides">
			<div class="slides-container">
				<img src=<?php echo base_url()."images/banner1.jpg";?> alt="" />
				<img src=<?php echo base_url()."images/banner2.jpg";?>  alt="" />
				<img src=<?php echo base_url()."images/banner3.jpg";?>  alt="" />
			</div>
			<div class="tint">
				<div class="welcome text-center">
					<!-- <h1>You chooose us because we care.</h1>
					<h1>Welcome to Sooowhat</h1> -->
					<i class="fa fa-angle-down"></i>
				</div>
			</div>
		</div>

		<!-- ========== BANNER END ========== -->

		<!-- ========== MENU START ========== -->

		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#home"><img style="height:65px;" src=<?php echo base_url()."images/logo2.png";?> alt="Welcome to Stoooges." class="img-responsive" /></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#mission">Our Motto</a></li>
								<li><a href="#staff">Our People</a></li>
								<li><a href="#activities">Our Work</a></li>
								<li><a href="#testimonials">Our Expertise</a></li>
								<li><a href="#contact">Contact Us</a></li>
							</ul>
						</li>
						<li><a href="#contact">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- ========== MENU END ========== -->

		<!-- ========== ROOMS START ========== -->

		<div id="rooms">
			<div class="container text-center">
				<div class="row no-fade">
					<div class="col-sm-4">
						<div class="box background background1">
							<h3>Original</h3>
						</div>
						<div class="icon img-circle">
							<img src=<?php echo base_url()."images/circle1.png";?> alt="" />
						</div>
						<div class="arrow background background1"></div>
					</div>
					<div class="col-sm-4">
						<div class="box background background2">
							<h3>Out of the box</h3>
						</div>
						<div class="icon img-circle">
							<img src=<?php echo base_url()."images/circle2.png";?> alt="" />
						</div>
						<div class="arrow background background2"></div>
					</div>
					<div class="col-sm-4">
						<div class="box background background3">
							<h3>On Strategy</h3>
						</div>
						<div class="icon img-circle">
							<img src=<?php echo base_url()."images/circle3.png";?> alt="" />
						</div>
						<div class="arrow background background3"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- ========== ROOMS END ========== -->

		<!-- ========== MENTOR START ========== -->



		<!-- ========== MENTOR END ========== -->

		<!-- ========== MISSION START ========== -->

		<section class="background background1 background-image" id="mission">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h2>Introduction</h2>
						<h5><?php echo $introduce[0]['content']?></h5>
					</div>
				</div>
				<div class="row">
					<?php foreach ($introduce as $k => $v) { ?>
						<?php if($k > 0) { ?>
							<div class="col-sm-6">
								<?php echo $introduce[$k]['content']?>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
				<div class="row text-center">
					<div class="col-sm-12">
						<p>&nbsp;</p>
						<p><a href="#contact" class="btn btn-lg btn-transparent">Contact Us</a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== MISSION END ========== -->
		<section id="staff">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2>Our People</h2>
						<h5>
							<?php echo $team[0]['content'];?></h5>
						<p>
							<?php echo $team[1]['content']; ?></p>	
					</div>
				</div>
				<div class="row">
					<img style="width:60%;height:60%;" src=<?php echo base_url()."images/teamCircle.png";?>  alt="" />
				</div>
				<div class="row-margin owl-carousel">
					<div>
						<div class="item">
							<img src="images/team1.jpg" alt="" />		
							<h4>Product Manager</h4>

						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/team2.jpg" alt="" />		
							<h4>Project Manager</h4>
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/team3.jpg" alt="" />		
							<h4>Frontend Engineer</h4>

						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/team4.jpg" alt="" />		
							<h4>Backend Engineer</h4>

						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/team5.jpg" alt="" />		
							<h4>Quality Assurance Engineer</h4>

						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/team6.jpg" alt="" />		
							<h4>Actuary</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========== ACTIVITIES START ========== -->


		<!-- ========== TESTIMONIALS START ========== -->

		<section class="background background3 background-image" id="testimonials">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h2>Our Expertise</h2>
						<h5></h5>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-12 owl-carousel">
						<?php foreach($evaluation as $k => $v) { ?>
							<div class="item">
								<blockquote><?php echo $evaluation[$k]['content'];?></blockquote>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-12">
						<p>&nbsp;</p>
						<p><a href="#contact" class="btn btn-lg btn-transparent">Contact Us</a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== TESTIMONIALS END ========== -->
		<section id="activities">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Our Work</h2>
						<h5> </h5>
						<!-- Tabs Start -->
						<ul class="nav nav-tabs text-center">
						<?php foreach($project as $k => $v) { ?>
						<li <?php echo ($k==0)?'class="in active"':'';?>><a href="#project<?php echo $k+1;?>" data-toggle="tab"><?php echo $project[$k]['name'];?></a></li>
						<?php } ?>
						</ul>
						<div class="tab-content">
						<?php foreach($project as $k => $v) { ?>
							<div class="tab-pane fade <?php echo ($k==0)?'in active':'';?>" id="project<?php echo $k+1;?>">
								<div class="col-sm-4">
									<p><img src="images/<?php echo 'project'.($k+1);?>.png" alt="" class="img-responsive" /></p>
								</div>
								<div class="col-sm-8">
									<br>
									<p><?php echo $project[$k]['content']?></p>
								</div>
							</div>
						<?php } ?>

						</div>
						<!-- Tabs End -->

					</div>
				</div>
			</div>
		</section>

		<!-- ========== ACTIVITIES END ========== -->

		<!-- ========== CONTACT START ========== -->
		<section class="background background2 background-image" id="contact">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h2>Contact Us</h2>
						<h5></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<img height="200px" src="images/contact.png" alt="扫描二维码联系我们">
					</div>
					<div class="col-sm-3">
						<div class="mail-title">Telephone</div>
						<div class="mail-content">
							<a href="mailto:zhangyuhang@sjtu.edu.cn">
								(8621) 5459 1887

							</a>
						</div>
						<div class="address">Address</div>
						<div>Unit 203, Block 16, Lane 118, Rui Jing 1sr Road, Huangpu District, Shanghai, PRC, 200020
</div>
					</div>
					<div class="col-sm-6">
						<div id="allmap"></div>
					</div>

					<p>&nbsp;</p>
				</div>
			</div>
		</section>

		<!-- ========== CONTACT END ========== -->

		<!-- ========== MAP START ========== -->

		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=4ce275c31467dd57f3c32f2b79121f25"></script>
		<script type="text/javascript">
			// 百度地图API功能
			var map = new BMap.Map("allmap");    // 创建Map实例
			map.centerAndZoom(new BMap.Point(121.4693, 31.2259), 18);  // 初始化地图,设置中心点坐标和地图级别
			map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
			map.setCurrentCity("上海");          // 设置地图显示的城市 此项是必须设置的
			map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
		</script>

		<div id="map-canvas-dum"></div>

		<!-- ========== MAP END ========== -->

		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-3 text-center ">
						<p>&copy; Copyright 2015 Sooowhat 沪ICP备15018019号-1<br>
						151-2103-6028, QQ:  227-606-9174,  info@sooowhat.com<br>
						Web Development by <a>Zhendong Sun </a>&<a> Yuhang Zhang</a></p>
						
					</div>
					<div class="col-sm-4">
						<img height="100px" src="images/contact.png" alt=""/>
					</div>
					<div class="col-sm-1">
					</div>
				</div>
			</div>
		</footer>

		<!-- ========== FOOTER END ========== -->

		<!-- Modernizr Plugin -->
		<script src="./js/modernizr.custom.97074.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-1.10.2.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="./js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="./js/retina-1.1.0.min.js"></script>

		<!-- Superslides Plugin -->
		<script src="./js/jquery.easing.1.3.js"></script>
		<script src="./js/jquery.animate-enhanced.min.js"></script>
		<script src="./js/jquery.superslides.js"></script>

		<!-- Owl Carousel Plugin -->
		<script src="./js/owl.carousel.js"></script>

		<!-- Direction-aware Hover Effect Plugin -->
		<script src="./js/jquery.hoverdir.js"></script>

		<!-- Fancybox Plugin -->
		<script src="./js/jquery.fancybox.js"></script>

		<!-- jQuery Settings -->
		<script src="./js/settings.js"></script>

		<!-- Honeycomb -->
		<script src="./js/jquery.homeycombs.js"></script>

		<script type="text/javascript">
    			$(document).ready(function() {
				$('#honeycombs13').honeycombs({
					combWidth: 160,
					margin: 8
				});
			});
		</script>

		<script type="text/javascript">
    			$(document).ready(function() {
				$('#honeycombs14').honeycombs({
					combWidth: 120,
					margin: 6
				});
			});
		</script>
		

</body>
</html>