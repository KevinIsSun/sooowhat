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
	<link href='<?=base_url().'css/style.css'?>' rel="stylesheet">

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
					<a class="navbar-brand" href="index.html"><img src=<?php echo base_url()."images/logo.png";?> alt="Welcome to Stoooges." class="img-responsive" /></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">首页</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">关于我们 <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#staff">导师团队</a></li>
								<li><a href="#mission">企业文化</a></li>
								<li><a href="#activities">服务内容</a></li>
								<li><a href="#testimonials">客户评价</a></li>
								<!-- <li><a href="#gallery">团队成员</a></li> -->
							</ul>
						</li>
						<li><a href="#contact">联系我们</a></li>
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
							<p>Explanation</p>
						</div>
						<div class="icon img-circle">
							<img src=<?php echo base_url()."images/icon-s.png";?> alt="" />
						</div>
						<div class="arrow background background1"></div>
					</div>
					<div class="col-sm-4">
						<div class="box background background2">
							<h3>Out of the box</h3>
							<p>Explanation</p>
						</div>
						<div class="icon img-circle">
							<img src=<?php echo base_url()."images/icon-x.png";?> alt="" />
						</div>
						<div class="arrow background background2"></div>
					</div>
					<div class="col-sm-4">
						<div class="box background background3">
							<h3>OnStrategy</h3>
							<p>Explanation</p>
						</div>
						<div class="icon img-circle">
							<img src=<?php echo base_url()."images/icon-g.png";?> alt="" />
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
						<h5>Explanation</h5>
						<p>Explanation<br>
							Explanation</p>
						<p>&nbsp;</p>
					</div>
				</div>
				<div class="row-margin owl-carousel">
					<div>
						<div class="item">
							<img src="images/1vs1.jpg" alt="" />
							<h4>一对一主导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/language.jpg" alt="" />
							<h4>美方语言导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/supervisor.jpg" alt="" />
							<h4>监督委员会导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/whyessay.jpg" alt="" />
							<h4>Why essay导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/ps.jpg" alt="" />
							<h4>PS委员会导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/standardtest.jpg" alt="" />
							<h4>标准化考试导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/interview.jpg" alt="" />
							<h4>面试导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/plan.jpg" alt="" />
							<h4>规划导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/choose.jpg" alt="" />
							<h4>选校导师 </h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/scholarship.jpg" alt="" />
							<h4>奖学金导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/area.jpg" alt="" />
							<h4>区域申请导师</h4>
							
							
						</div>
					</div>
					<div>
						<div class="item">
							<img src="images/brainstorm.jpg" alt="" />
							<h4>头脑风暴导师</h4>
							
							
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- ========== MENTOR END ========== -->

		<!-- ========== MISSION START ========== -->

		<section class="background background1 background-image" id="mission">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h2>Introduce</h2>
						<h5>Explanation</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<p>Explanation<br>
						<br>
						Explanation</p>
					</div>
					<div class="col-sm-6">
						<p>Explanation</p>
					</div>
						<div class="col-sm-6">
						<p>Explanation</p>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-12">
						<p>&nbsp;</p>
						<p><a href="#contact" class="btn btn-lg btn-transparent">联系我们</a></p>
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

						<!-- Tabs Start -->
						<ul class="nav nav-tabs text-center">
							<li class="active"><a href="#Learn" data-toggle="tab">Project</a></li>
							<li><a href="#Play" data-toggle="tab">Project</a></li>
							<li><a href="#Painting" data-toggle="tab">Project</a></li>
							<li><a href="#Music" data-toggle="tab">Project</a></li>
							<li><a href="#Sport" data-toggle="tab">Project</a></li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane fade in active" id="Learn">
								<div class="col-sm-4">
									<p><img src="images/mentor.jpg" alt="" class="img-responsive" /></p>
								</div>
								<div class="col-sm-8">
									<br>

									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>

								</div>
							</div>
							<div class="tab-pane fade" id="Play">
								<div class="col-sm-4">
									<p><img src="images/committee.png" alt="" class="img-responsive" /></p>
								</div>
								<div class="col-sm-8">
									<br>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
								</div>
							</div>
							<div class="tab-pane fade" id="Painting">
								<div class="col-sm-4">
									<p><img src="images/test.jpg" alt="" class="img-responsive" /></p>
								</div>
								<div class="col-sm-8">
									<br>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
								</div>
							</div>
							<div class="tab-pane fade" id="Music">
								<div class="col-sm-4">
									<p><img src="images/prof.jpg" alt="" class="img-responsive" /></p>
								</div>
								<div class="col-sm-8">
									<br>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
								</div>
							</div>
							<div class="tab-pane fade" id="Sport">
								<div class="col-sm-4">
									<p><img src="images/lib.png" alt="" class="img-responsive" /></p>
								</div>
								<div class="col-sm-8">
									<br>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
									<p>Explanation</p>
								</div>
							</div>
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
						<h2>客户评价</h2>
						<h5>以往客户反馈</h5>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-12 owl-carousel">
						<div>
							<div class="item">
								<blockquote>
									大部分中介的导师都是国内大学英语专业毕业。他们并没有经历过美国大学申请，更不理解美国人的价值理念。高收费的咨询机构的美籍导师靠谱些。他们的语言功底应该没问题，但一看到他们的客户数量就会怀疑我到底能得到多少关注。在三士渡，我的导师们都是专家；更重要的是，他们都懂我，愿意与我交流。
									<small>刘同学（成都）（被Yale录取）</small>
								</blockquote>
							</div>
						</div>
						<div>
							<div class="item">
								<blockquote>
									作为一个顽固的典型的大陆背景高中生，我像许多人一样，满心都是“爬藤”的梦想，我能把US news的前二十排名倒背如流，我甚至经常幻想自己上了常青藤名校之后在人人上佯装淡定地发一条状态然后被各种转载各种cong和膜拜。彼时我对哥大和宾大这两个商业氛围浓郁的大学情有独钟，于是我便兴致勃勃地把我自认为精雕细琢的essay发给我的mentor求修改。然而，他却立刻qq打电话过来，劈头盖脸的就把我的爬藤梦说了一通，并且忽视了我藤校的essay，在否定我的school list的同时，他根据我的essay主题和个人性格（通过聊天他就能准确的判断出来）给了我申请rice, duke等校园氛围美好团结的大学的建议。我心里很不服气，还是满怀信心地递交了我心目中梦想藤校地申请。也许也是因为我自身实力的原因，columbia和upenn都没有录取我，反而是当初他建议的那些无一例外都录取了我。
									<small>卢同学（北京）（被Duke、Rice等大学录取）</small>
								</blockquote>
							</div>
						</div>
						<div>
							<div class="item">
								<blockquote>
									我一开始对申请大学毫不在意，学校只要华丽的像霍格沃茨一样并且会下雪就行，那会儿美国大概凌晨四五点，他打来电话严肃认真团结活泼的讲了一个多小时，怎样选学校啊，student body比风景重要的多，还把前10的文理学院都事无巨细的介绍了一遍。我特别能拖，所有essay几乎都是死线前几天一口气写完然后一股脑儿扔给他的，这是一种很不负责任的行为，可他帮我把每一篇都仔仔细细地看完了，熬夜陪我写，帮我改。In fact, 我给他发去的essay他都是在几天之内就看了然后提出好多意见，不管自己有多么忙碌憔悴，我没认真写的他也一眼就能看出来……我的mentor不是在帮我改essay，就是在帮我改essay的路上！
									<small>宋同学（青岛）（被Berkeley、Carleton等大学录取）</small>
								</blockquote>
							</div>
						</div>
						<div>
							<div class="item">
								<blockquote>
									我的mentor虽然还是美国某校的在读学生，但他对美国大学有着超出同龄人的理解。在选校上给予了我很多网站上找不到的建议。他亲身走访美国多所高校的经历给予我充分的理由相信他对这些学校的介绍。在申请的最后关头，他更是不顾自己的课业，在skype上耐心地和我修改着文章。除此之外，我的mentor平时也很积极地与我聊天，缓解我在紧张的申请季中的心情。聊人生，聊理想。即使是在申请结束后，也仍然和我保持着联系。总而言之，他是一位真正意义上的良师诤友。
									<small>王同学（杭州）（被Williams、Chicago等大学录取）</small>
								</blockquote>
							</div>
						</div>
						<div>
							<div class="item">
								<blockquote>
									直到mentor第一次点评我的essay, 我才对怎样用文书表现自己有了明确的概念。之前数月自己对申请文书的探索，没有之后mentor的悉心指导，是不可能得到升华的。我永远不会忘记，mentor在整夜学术以后仍坚持和我一起讨论我ps的第N稿。那段时间，即使已经进入了申请的最后一个月，即使我的PS被否定back to square one，即使后来题材完全改变的新的文书一直未入佳境，在mentor的指导和鼓励下，我燃起了前所未有的信心和干劲儿。每当我自认为找到感觉并作出一些修改以后，我总是急切想得到mentor的反馈，而mentor也不厌其烦地引导我，启发我。交给卡尔顿的那篇PS我已经记不清一共改了多少稿了，但是我确信的是没有mentor，我是不可能被卡尔顿录取的。每一次讨论文章，就是对我自身的一次更深的挖掘。所以写这篇PS的经历，带给我的不仅是卡尔顿的认可，更是我对自身passion的确定，以及不到最后关头决不放弃的信念。对mentor有说不尽的感激！
									<small>朱同学（郑州）（被Notre Dame、Carleton等大学录取）</small>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-sm-12">
						<p>&nbsp;</p>
						<p><a href="#contact" class="btn btn-lg btn-transparent">加入我们</a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- ========== TESTIMONIALS END ========== -->

		<!-- ========== CONTACT START ========== -->

		<section  class="background background-imagep" id="contact">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-12">
						<h2>联系我们</h2>
						<h5>您的意见与反馈</h5>

						<!-- Form Start -->
						<form role="form" id="form1" name="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://stoooges.wufoo.com/forms/m1tulwy71d660to/#public">
							<div class="form-group col-sm-4">
								<input type="text" class="form-control" id="Field1" name = "Field1" placeholder="Name">
							</div>
							<div class="form-group col-sm-4">
								<input type="email" class="form-control" id="Field2" name = "Field2" placeholder="Email">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" class="form-control" id="Field3" name = "Field3" placeholder="Phone">
							</div>
							<div class="form-group col-sm-12">
								<textarea class="form-control" id="Field5" name = "Field5" rows="6" placeholder="Message"></textarea>
							</div>
							<input type="hidden" name="idstamp" id="idstamp" value="fshSwax/BUr7tK7ol6WYRRvQc6i1YfEefvVXi4xtQRY=" />
							<button type="submit" class="btn btn-primary btn-lg">提交</button>
						</form>
						<!-- Form End -->

						<p>&nbsp;</p>

					</div>
				</div>
			</div>
		</section>

		<!-- ========== CONTACT END ========== -->

		<!-- ========== MAP START ========== -->

		<!-- Google Map Script -->
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

		<div id="map-canvas"></div>

		<!-- ========== MAP END ========== -->

		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-3 text-center ">
						<p>&copy; Copyright 2015 Sooowhat<br>
						400-999-8974, QQ:  400-999-8974,  info@stoooges.com<br>
						Web Design &amp; Development by <a href="http://www.areswang.com/" target="_blank">Ares Wang</a> & Kai Wang</p>
						
					</div>
					<div class="col-sm-4">
						<img src="images/wechat.jpg" alt=""/>
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