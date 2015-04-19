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
				<img src=<?php echo base_url()."images/banner7.jpg";?> alt="" />
				<img src=<?php echo base_url()."images/banner8.jpg";?>  alt="" />
				<img src=<?php echo base_url()."images/banner9.jpg";?>  alt="" />
			</div>
			<div class="tint">
				<div class="welcome text-center">
					<h1>Welcome to Sooowhat</h1>
					<h1>You chooose us because we care.</h1>
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
					<a class="navbar-brand" href="#home"><img src=<?php echo base_url()."images/logo2.png";?> alt="Welcome to Stoooges." class="img-responsive" /></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#staff">Our Team</a></li>
								<li><a href="#mission">Introduction</a></li>
								<li><a href="#activities">Our Project</a></li>
								<li><a href="#testimonials">Customer Evaluation</a></li>
								<!-- <li><a href="#gallery">团队成员</a></li> -->
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

		<section id="staff">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2>Our Team</h2>
						<h5><?php echo $team[0]['content'];?></h5>
						<p><?php echo $team[1]['content']; ?></p>
						<p>&nbsp;</p>
					</div>
				</div>
		<div class="row-margin owl-carousel">
			<div>
				<div class="item">
					<img src="images/1vs1.jpg" alt="" />
					<h4>Product Manager</h4>
					
					
				</div>
			</div>
			<div>
				<div class="item">
					<img src="images/language.jpg" alt="" />
					<h4>Project Manager</h4>
				</div>
			</div>
			<div>
				<div class="item">
					<img src="images/supervisor.jpg" alt="" />
					<h4>Frontend Engineer</h4>
					
					
				</div>
			</div>
			<div>
				<div class="item">
					<img src="images/whyessay.jpg" alt="" />
					<h4>Backend Engineer</h4>
					
					
				</div>
			</div>
			<div>
				<div class="item">
					<img src="images/ps.jpg" alt="" />
					<h4>Quality Assurance Engineer</h4>
					
					
				</div>
			</div>
			<div>
				<div class="item">
					<img src="images/standardtest.jpg" alt="" />
					<h4>Actuary</h4>
				</div>
			</div>
		</section>

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

		<!-- ========== ACTIVITIES START ========== -->

		<section id="activities">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Our Project</h2>
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

		<!-- ========== TESTIMONIALS START ========== -->

		<section class="background background2 background-image" id="testimonials">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h2>Customer Evaluation</h2>
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

		<!-- ========== CONTACT START ========== -->

		<section id="contact">
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
						<div class="mail-title">Email</div>
						<div class="mail-content">
							<a href="mailto:zhangyuhang@sjtu.edu.cn">
								zhangyuhang@sjtu.edu.cn
							</a>
						</div>
						<div class="address">Address</div>
						<div>800 Dong Chuan Road,Shanghai, 200240, China</div>
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

		<!-- Google Map Script -->
		<!--
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoRMxiPsqJ9SUuaK1KsCAjd3gqnecjlBw&amp;sensor=false"></script>
		<script type="text/javascript">

			function initialize() {

				// Create an array of styles.
				var styles = [
					{
						stylers: [
							{ hue: "#e75d5d" },
							{ saturation: 0 }
						]
					},{
						featureType: "road",
						elementType: "geometry",
						stylers: [
							{ lightness: 100 },
							{ visibility: "simplified" }
						]
					},{
						featureType: "road",
						elementType: "labels",
						stylers: [
							{ visibility: "off" }
						]
					}
				];

				// Create a new StyledMapType object, passing it the array of styles,
				// as well as the name to be displayed on the map type control.
				var styledMap = new google.maps.StyledMapType(styles,
				{name: "Styled Map"});


							var mapOptions = {
								zoom: 4,
								center: new google.maps.LatLng(34.926049, 104.355838),
				mapTypeControlOptions: {
				  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
				}
				}
				var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

				//Associate the styled map with the MapTypeId and set it to display.
				map.mapTypes.set('map_style', styledMap);
				map.setMapTypeId('map_style');

				setMarkers(map, places);
			}

			var places = [
				['Beijing', 39.977576, 116.306392, 1],
				['Zhengzhou', 34.820609, 113.650822, 1]
			];

			function setMarkers(map, locations) {
				// Add markers to the map
				var image = {
					url: 'images/marker.png',
					// This marker is 40 pixels wide by 42 pixels tall.
					size: new google.maps.Size(40, 42),
					// The origin for this image is 0,0.
					origin: new google.maps.Point(0,0),
					// The anchor for this image is the base of the pin at 20,42.
					anchor: new google.maps.Point(15, 42)
				};

				for (var i = 0; i < locations.length; i++) {
					var place = locations[i];
					var myLatLng = new google.maps.LatLng(place[1], place[2]);
					var marker = new google.maps.Marker({
						position: myLatLng,
						map: map,
						icon: image,
						title: place[0],
						zIndex: place[3],
						animation: google.maps.Animation.DROP
					});

					var contentString = "Some content";
					google.maps.event.addListener(marker, "click", function() {
						infowindow.setContent(this.html);
						infowindow.open(map, this);
					});
				}
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		-->
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=4ce275c31467dd57f3c32f2b79121f25"></script>
		<script type="text/javascript">
			// 百度地图API功能
			var map = new BMap.Map("allmap");    // 创建Map实例
			map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);  // 初始化地图,设置中心点坐标和地图级别
			map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
			map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
			map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
		</script>

		<div id="map-canvas-dum"></div>

		<!-- ========== MAP END ========== -->

		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-3 text-center ">
						<p>&copy; Copyright 2015 Sooowhat<br>
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