<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Artur Domínguez</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Artur Domínguez Gispert" />
	<meta name="keywords" content="Artur, artur, dominguez, Dominguez, Artur Dominguez, artur dominguez, currículum, currículo, perfil, profile, Artur Dominguez curriculum" />
	<meta name="author" content="Artur Domínguez Gispert" />

	<!-- 
	//////////////////////////////////////////////////////

	ARTUR DOMINGUEZ GISPERT
		
	Website: 		http://artur.datebion.com
	Email: 			adominguez@datebion.com

	//////////////////////////////////////////////////////
	 -->

	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- FontAwesome -->
	<link rel="stylesheet" type="text/css" href="../css/fontawesome/css/fontawesome-all.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114306646-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-114306646-1');
  		ga('create', 'UA-114306646-1', 'auto');
	</script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>

	<!-- DIV COOKIES -->
	
	<div id="divCookies" style="display: none;">
    	<div class="inner">
        	We request your permission to obtain statistical data of your browsing on this website, in compliance with Royal Decree-Law 13/2012. If you continue browsing we consider that you accept the use of cookies.
        	<a href="javascript:void(0);" class="ok" onclick="GuardarCookie();"><b>Accept</b></a>
    	</div>
	</div>

	<script>
		function getCookie(c_name){
    		var c_value = document.cookie;
    		var c_start = c_value.indexOf(" " + c_name + "=");
    		if (c_start == -1){
    		    c_start = c_value.indexOf(c_name + "=");
    		}
    		if (c_start == -1){
    		    c_value = null;
    		}else{
    		    c_start = c_value.indexOf("=", c_start) + 1;
    		    var c_end = c_value.indexOf(";", c_start);
    		    if (c_end == -1){
   		        	c_end = c_value.length;
        		}
        		c_value = unescape(c_value.substring(c_start,c_end));
    		}
    		return c_value;
		}
 
		function setCookie(c_name,value,exdays){
    		var exdate=new Date();
    		exdate.setDate(exdate.getDate() + exdays);
    		var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    		document.cookie=c_name + "=" + c_value;
		}
 
		if(getCookie('avisCookies')!="1"){
    		document.getElementById("divCookies").style.display="block";
		}

		function GuardarCookie(){
    		setCookie('avisCookies','1',365);
    		document.getElementById("divCookies").style.display="none";
		}

	</script>

	<!-- FI DIV COOKIES -->
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(../images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(../images/user-3.jpg);"></div>
							<h1><span>Artur Domínguez Gispert</span></h1>
							<h3><span>Technician / Developer</span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="https://github.com/domy95" onclick="ga('send', 'event', 'Header', 'Open', 'Github', 1);" target="_blank"><i class="icon-github2"></i></a></li>
									<li><a href="https://bitbucket.org/arturdominguez/" onclick="ga('send', 'event', 'Header', 'Open', 'Bitbucket', 1);" target="_blank"><i class="fab fa-bitbucket"></i></a></li>
									<li><a href="https://stackoverflow.com/users/6133630/a-dominguez?tab=profile" onclick="ga('send', 'event', 'Header', 'Open', 'Stackoverflow', 1);" target="_blank"><i class="icon-stackoverflow"></i></a></li>
									<li><a href="https://www.linkedin.com/in/artur-dominguez-554846b9/" onclick="ga('send', 'event', 'Header', 'Open', 'Linkedin', 1);" target="_blank"><i class="icon-linkedin2"></i></a></li>
									<li><a href="http://artur.datebion.com" onclick="ga('send', 'event', 'Header', 'Open', 'Website', 1);" target="_blank"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Name:</span><span class="second-block">Artur Domínguez Gispert</span></li>
						<li><span class="first-block">Phone:</span><span class="second-block">+34 673 74 57 46</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">adominguez@datebion.com</span></li>
						<li><span class="first-block">Website:</span><span class="second-block">www.artur.datebion.com</span></li>
						<li><span class="first-block">Address:</span><span class="second-block">Carrer Constantins nº4, Sant Julià del Llor i Bonmatí 17164 (Girona)</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Welcome!</h2>

					<p>I am Artur Domínguez Gispert. I was born in a small village in the region La Selva called Sant Julià del Llor i Bonmatí. I am currently living in this wonderful and peaceful village.</p>

					<p>I consider myself to be a very demanding being with himself and passionate about new technologies, yes these small gadgets that allow us to do things that until now had been considered as unattainable. How more little and powerful is the artifact in question arouses me what we call curiosity.</p>
					
					<p>Since i was a young boy, I have been curious about the new technologies, I was excited about the computers and the different electronic devices that we had at home. I decided that one day I would dedicate myself to this professionally until I finally got it.</p>
					
					<p>My first experience with computer science, of a school nature, was around 2003, when I was about 8 years old. At my school they began to teach extracurricular typing and computer classes, in which I subscribe out without thinking so much.</p>
					
					<p>Later, once I finished ESO, when I made the MGTC for Microinformatics Systems and Networks I discovered a lot of possibilities with programming, for those moments in <i>bash</i>. Just by making my first <i>script</i> functional to back up I decided that I had to realize the degree of cross-platform application development, and so did. This cycle changed my perspective to the world of programming, I discovered that this world was much larger than I had imagined.</p>
					
					<p>From here I would like to thank all my teachers, both from the MGTC MSN and the SGTC CAD of the Rafael Campalans Institute, for all the knowledge I have received, which allowed me to dedicate myself professionally to the world of the programming.</p>
					
					<p>Once I've made this introduction <i>about me</i>, I hope you enjoy the website and that the information you find can be useful.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Experience</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Work experience</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Developer</h3>
									<span class="company">Esolvo - 07/2016 - Actualment</span>
								</div>
								<div class="timeline-body">
									<p>In this workplace I have been working on the development of applications for mobile devices, both for iOS (Swift language) and for Android (Java language). The most remarkable task of this experience was to develop the main application of the company (Escio) for iOS, as it was only for Android devices.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Auxiliary developer</h3>
									<span class="company">Esolvo - 02/2016 - 07/2016</span>
								</div>
								<div class="timeline-body">
									<p>My work in this job was to support certain development tasks for Android company programmers. The most remarkable task of this experience was to create a system of translations of the Escio application, since it did not use the translation system that includes Android.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Computer technician</h3>
									<span class="company">SEUR - 08/2015 - 01/2016</span>
								</div>
								<div class="timeline-body">
									<p>In this work experience, I carried out various maintenance tasks for systems and networks of the company. While in this place of work SEUR Gerona changed his ship, this made my colleagues and I realize the installation and configuration of computer equipment and networks in the new ship.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Worker</h3>
									<span class="company">ANTEX S.A. - 01/2015 - 07/2015</span>
								</div>
								<div class="timeline-body">
									<p>ANTEX S.A. is a factory which produces wire. My main task was to clean the polymer, the material used to produce the wire, that loosen the machines.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Computer technician</h3>
									<span class="company">Sant Jordi school, Bonmatí - 11/2012 - 04/2013</span>
								</div>
								<div class="timeline-body">
									<p>It was my first work experience. He carried out maintenance tasks for computer equipment (servers, computers, digital slates, ...) and networks. The most remarkable task was to create an intranet where teachers and parents could interact with it.</p>
								</div>
							</div>
						</li>

						<br>
						<li class="timeline-heading text-center animate-box">
							<div><h3>Education</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Degree in Computer Engineering</h3>
									<span class="company">University of Girona - 09/2016 - Currently</span>
								</div>
								<div class="timeline-body">
									<p>Currently attending.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">SGTC Cross-platform application development</h3>
									<span class="company">Rafael Campalans Institute - 09/2014 - 06/2016</span>
								</div>
								<div class="timeline-body">
									<p>Resources used: Android Studio (Java), Eclipse C++ (C++), Eclipse Java (Java), Visual Studio (C#), XML Editor (XML), Oracle Database (SQL), MySQL (SQL), Unity (C#).</p>
									<br/>
									<p>Note: 91.6/100</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Course of access to SGTC</h3>
									<span class="company">Vallvera Institute - 09/2013 - 06/2014</span>
								</div>
								<div class="timeline-body">
									<p>Study of basic subjects (English, Catalan, Spanish and Mathematics) and specific subjects (Physics and Technology) with an approximate level in the baccalaureate.</p>
									<br/>
									<p>Note: 96.0/100</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">MGTC Micro-information systems and networks</h3>
									<span class="company">Rafael Campalans Institute - 09/2011 - 06/2013</span>
								</div>
								<div class="timeline-body">
									<p>Resources used: Systems management, network management, computer security, assembly and maintenance of computer equipment, office applications and web applications.</p>
									<br/>
									<p>Note: 86.0/100</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">High school</h3>
									<span class="company">Rafael Campalans Institute - 09/2007 - 06/2011</span>
								</div>
								<div class="timeline-body">
									<p>Study of basic subjects (English, Catalan, Spanish and Mathematics) and specific subjects (French, Physics, Chemistry and Biology).</p>
									<br/>
									<p>Note: 61.0/100</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	

	<div id="fh5co-features" class="animate-box">
		<div class="container">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Services</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-mobile"></i>
							</span>
							<div class="feature-copy">
								<h3>Development</h3>
								<p>Web development, Android, iOS, Linux and Windows.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
							<div class="feature-copy">
								<h3>Web design</h3>
								<p>Making static web pages.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Advice</h3>
								<p>Computer advice according to your requirements.</p>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-4 text-center">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-desktop"></i>
							</span>
							<div class="feature-copy">
								<h3>Repair and maintenance</h3>
								<p>Repair and maintenance of computer equipment.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-tools-2"></i>
							</span>
							<div class="feature-copy">
								<h3>Assembly</h3>
								<p>Assembly of new equipment and network installations.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>Distribution</h3>
								<p>Distribution of computer equipment such as: Computers, printers, components, accessories, ...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="95"><span><strong>Java</strong>95%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Swift</strong>90%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>SQL</strong>90%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>C++</strong>90%</span></div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="80"><span><strong>C#</strong>80%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="60"><span><strong>PHP</strong>60%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="40"><span><strong>HTML5</strong>40%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="40"><span><strong>CSS3</strong>40%</span></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Maintenance of computer equipment</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Network maintenance</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Server management</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Repairs</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Distribution</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Assembly</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Projects</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalArturDominguez" onclick="ga('send', 'event', 'Project', 'Artur Dominguez', 1);" class="work" style="background-image: url(../images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Artur Domínguez</h3>
							<span>Web design</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalDatebion" onclick="ga('send', 'event', 'Project', 'Datebion', 1);" class="work" style="background-image: url(../images/datebion.png);">
						<div class="desc">
							<h3>Datebion</h3>
							<span>Web design</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalByscar" onclick="ga('send', 'event', 'Project', 'Byscar', 1);" class="work" style="background-image: url(../images/byscar.png);">
						<div class="desc">
							<h3>ByScar</h3>
							<span>Android &amp; Arduino</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalSG" onclick="ga('send', 'event', 'Project', 'SG Comunitats', 1);" class="work" style="background-image: url(../images/SGComunitats.png);">
						<div class="desc">
							<h3>SG Gestió de Comunitats</h3>
							<span>Web design</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalCarvalet" onclick="ga('send', 'event', 'Project', 'Carvalet', 1);" class="work" style="background-image: url(../images/carvalet.png);">
						<div class="desc">
							<h3>Car Valet</h3>
							<span>Web design</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalMuntatge" onclick="ga('send', 'event', 'Project', 'Muntatge', 1);" class="work" style="background-image: url(../images/muntatge.png);">
						<div class="desc">
							<h3>Assembly of computers</h3>
							<span>Assembly</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalReparacio" onclick="ga('send', 'event', 'Project', 'Reparacio', 1);" class="work" style="background-image: url(../images/reparacions.png);">
						<div class="desc">
							<h3>Computer repair</h3>
							<span>Repairs</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalProjectes" onclick="ga('send', 'event', 'Project', 'Seguents projectes', 1);" class="work" style="background-image: url(../images/projects.png);">
						<div class="desc">
							<h3>Next projects</h3>
							<span>Study</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<script>

		function validateEmail(email) {
  			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  			return re.test(email);
		}

		function validationFormPass() {
			
			var result = true;

			document.getElementById("fname");

			var fname = document.getElementById("fname").value;
			var lname = document.getElementById("lname").value;
			var email = document.getElementById("email").value;
			var subject = document.getElementById("subject").value;
			var message = document.getElementById("message").value;

			if (fname === '' || fname === null || fname === undefined || fname == null) {
				document.getElementById("alertFname").style.display = 'block';
				result = false;
			}

			if (lname === '' || lname === null || lname === undefined || lname == null) {
				document.getElementById("alertLname").style.display = 'block';
				result = false;
			}

			if (email === '' || email === null || email === undefined || email == null) {
				document.getElementById("alertEmail").style.display = 'block';
				result = false;
			}
			else if (!validateEmail(email)) {
				document.getElementById("alertEmail").style.display = 'block';
				result = false;
			}

			if (subject === '' || subject === null || subject === undefined || subject == null) {
				document.getElementById("alertSubject").style.display = 'block';
				result = false;
			}

			if (message === '' || message === null || message === undefined || message == null) {
				document.getElementById("alertMessage").style.display = 'block';
				result = false;
			}

			return result;
		
		}

		function doSubmit() {
			if(validationFormPass()) {
				ga('send', 'event', 'Contact', 'Email', 'Validated', 1);
				document.getElementById("ContactForm").submit();
			}
			else {
				return false;
			}
		}

	</script>

	<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(../images/cover_bg_1.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<h2>Contact me</h2>
			<form id="ContactForm" onSubmit="return doSubmit();", method="post" action="../sendEmail.php">

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="fname" name="fname" class="form-control" placeholder="First name" value="">
					</div>
				</div>
				<div class="alert"  id="alertFname" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Incorrect value!</strong> You can not leave blank the name, it is a required field.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="lname" name="lname" class="form-control" placeholder="Surname" value="">
					</div>
				</div>
				<div class="alert"  id="alertLname" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Incorrect value!</strong> You can not leave the surname in blank, it is a required field.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="email" name="email" class="form-control" placeholder="Email" value="">
					</div>
				</div>
				<div class="alert"  id="alertEmail" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Incorrect value!</strong> Make sure the email you entered is well-formed.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject of the message" value="">
					</div>
				</div>
				<div class="alert"  id="alertSubject" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Incorrect value!</strong> Make sure you have entered a subject.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Write your message here" value=""></textarea>
					</div>
				</div>
				<div class="alert" id="alertMessage" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Incorrect value!</strong> Make sure you have entered a message.
				</div>

				<div class="form-group">
					<input type="submit" value="Send" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>

	<div id="map" class="fh5co-map"></div>
	</div>
	
	<div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; 2018 Artur Domínguez. All Rights Reserved. 
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- MODAL PROJECTS DIVS -->

	<!-- MODAL Artur Dominguez -->
	<div id="workModalArturDominguez" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">Artur Domínguez</h2>
						<p style="text-align: justify; font-style: italic">Web design</p>
						<br/>
						<p style="text-align: justify;">This project corresponds to this website. It has been made to announce me as <strong>technician</strong> and <strong>computer developer</strong>. The idea was to "delete" the paper curriculum and move on to use this website.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="http://artur.datebion.com" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="icon-dribbble2"></i>
										Visit the website
									</button>
								</a>
								<a href="https://github.com/domy95/Artur-Dominguez" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visit the repository
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline" data-dismiss="modal" type="button" style="visibility: hidden;">
									<i class="fa fa-times"></i>
									Close the project
								</button>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL Datebion -->
	<div id="workModalDatebion" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">Datebion</h2>
						<p style="text-align: justify; font-style: italic">Web design</p>
						<br/>
						<p style="text-align: justify;">This project aimed to create a web page to promote the new IT services company, <strong>Datebion</strong>, of the town of Sant Julià del Llor i Bonmatí.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="http://datebion.com" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="icon-dribbble2"></i>
										Visit the website
									</button>
								</a>
								<a href="https://github.com/domy95/Datebion" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visit the repository
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline" data-dismiss="modal" type="button" style="visibility: hidden;">
									<i class="fa fa-times"></i>
									Close the project
								</button>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL ByScar -->
	<div id="workModalByscar" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">ByScar</h2>
						<p style="text-align: justify; font-style: italic">Android &amp; Arduino</p>
						<br/>
						<p style="text-align: justify;">This was my final project of the CFGS of Cross-platform Application Development (CAD). I was very happy with the result to be my first development project.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/ByScar-Android" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Android Repository
									</button>
								</a>
								<a href="https://github.com/domy95/ByScar-Arduino" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Arduino Repository
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<a href="https://youtu.be/H_xbrIpx85c" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="fab fa-youtube"></i>
										Watch the video
									</button>
								</a>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL SG Comunitats -->
	<div id="workModalSG" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">SG Gestió de comunitats</h2>
						<p style="text-align: justify; font-style: italic">Web design</p>
						<br/>
						<p style="text-align: justify;">This project was about making a website to inform about the services provided by the company <strong>SG Gestió de comunitats</strong>.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/SG-Comunitats" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visit the repository
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL Car Valet -->
	<div id="workModalCarvalet" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">Car Valet</h2>
						<p style="text-align: justify; font-style: italic">Web design</p>
						<br/>
						<p style="text-align: justify;">This project sought to make a web page to promote the new car wash company, <strong>Car Valet</strong>, of the Anglès town. Unfortunately this company has closed by the end of 2017 and we have had to cancel the website.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/Car-Valet" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visit the repository
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL Muntatge -->
	<div id="workModalMuntatge" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">Assembly of computers</h2>
						<p style="text-align: justify; font-style: italic">Assembly</p>
						<br/>
						<p style="text-align: justify;">I carry out computer assemblies since 2013. According to the budget of the interested party, I opt for components according to the budget and expectations.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL Reparacions -->
	<div id="workModalReparacio" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">Computer repair</h2>
						<p style="text-align: justify; font-style: italic">Repairs</p>
						<br/>
						<p style="text-align: justify;">I've done computer repairs and other computer equipment since 2013. I mainly dedicate myself to desktops and laptops, although I also repaired some problems of mobile devices, printers, scanners ...</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL Projectes -->
	<div id="workModalProjectes" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<!-- Modal content-->
    		<div class="modal-content">
				<div class="row animate-box" style="padding: 5%;">
					<div class="modal-body">
						<h2 style="text-align: justify;">Next projects</h2>
						<p style="text-align: justify; font-style: italic">Study</p>
						<br/>
						<p style="text-align: justify;">I am studying to be able to do other personal projects. Some of them are:</p>
						<ul>
							<li>Application to manage reservations</li>
							<li>Automatic irrigation system</li>
							<li>Access control through NFC and/or fingerprints</li>
							<li>Others</li>
						</ul>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Close the project
								</button>
							</div>
						</div>
					</div>
				</div>
    		</div>
  		</div>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="../js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvCPtedEpy939dFc4cagabgSukl21B0WY&sensor=false"></script>
	<script src="../js/google_map.js"></script>
	
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>

