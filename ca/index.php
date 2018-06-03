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
        	Sol·licitem el vostre permís per obtenir dades estadístiques de la seva navegació en aquest lloc web, d'acord amb el Reial decret llei 13/2012. Si continues navegant, considerem que accepta l'ús de cookies.
        	<a href="javascript:void(0);" class="ok" onclick="GuardarCookie();"><b>Accepta</b></a>
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
							<h3><span>Tècnic / Programador</span></h3>
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
					<h2>Sobre mi</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Nom:</span><span class="second-block">Artur Domínguez Gispert</span></li>
						<li><span class="first-block">Telèfon:</span><span class="second-block">+34 673 74 57 46</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">adominguez@datebion.com</span></li>
						<li><span class="first-block">Web:</span><span class="second-block">www.artur.datebion.com</span></li>
						<li><span class="first-block">Adreça:</span><span class="second-block">Carrer Constantins nº4, Sant Julià del Llor i Bonmatí 17164 (Girona)</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Benvingut!</h2>
					<p>Sóc l'Artur Domínguez Gispert. Vaig néixer a un poble petit de la comarca La Selva anomenat Sant Julià del Llor i Bonmatí. Actualment segueixo vivint en aquest meravellós i tranquil poble.</p>
					<p>Em considero un ésser molt exigent amb si mateix i un apassionat de les noves tecnologies, sí aquests petits artefactes que ens permeten fer coses que fins al moment s'havien considerat inabastables. Com més petit i potent és l’artefacte en qüestió més em desperta allò que en diem curiositat.</p>
					<p>Des de ben petit he sentit curiositat per les noves tecnologies, m’entusiasmaven els ordinadors i els diferents aparells electrònics que teníem per casa. Vaig decidir que algun dia em dedicaria a això professionalment fins que finalment ho vaig aconseguir.</p>
					<p>La meva primera experiència amb la informàtica, de índole lectiu, va ser als voltants de l’any 2003, quan tenia uns 8 anys. A la meva escola varen començar a impartir classes extraescolars de mecanografia i informàtica, en les quals em vaig apuntar sense pensar-m’ho gaire.</p>
					<p>Més endavant, un cop acabat l’ESO, al realitzar el CFGM de Sistemes Microinformàtics i Xarxes vaig descobrir un munt de possibilitats amb la programació, per aquells moments en <i>bash</i>. Només de realitzar el meu primer <i>script</i> funcional per realitzar còpies de seguretat decidí que havia de realitzar el grau de desenvolupament d’aplicacions multiplataforma, i així ho vaig fer. Aquest cicle em va canviar la perspectiva respecte el món de la programació, vaig descobrir que aquest món era molt més gran del que m’havia imaginat.</p>
					<p>Des d’aquí vull mostrar el meu agraïment a tots els meus professors, tant del CFGM SMX com del CFGS DAM de l’Institut Rafael Campalans, per tots els coneixements rebuts per part seva els quals m’han permès dedicar-me professionalment al món de la programació.</p>
					<p>Un cop feta aquesta introducció <i>sobre mi</i> espero que gaudeixis del lloc web i que la informació que hi puguis trobar et sigui d'utilitat.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Experiència</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Experiència Laboral</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Programador</h3>
									<span class="company">Esolvo - 07/2016 - Actualment</span>
								</div>
								<div class="timeline-body">
									<p>En aquest lloc de treball he estat treballant en el desenvolupament d'aplicacions per a dispositius mòbils, tant per iOS (llenguatge Swift) com per Android (llenguatge Java). La tasca més destacable d'aquesta experiència va ser desenvolupar l'aplicació principal de l'empresa (Escio) per iOS, ja que només estava per a dispositius Android.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Programador auxiliar</h3>
									<span class="company">Esolvo - 02/2016 - 07/2016</span>
								</div>
								<div class="timeline-body">
									<p>La meva tasca en aquest lloc de treball consistia en donar suport en determinades tasques de desenvolupament als programadors Android de l'empresa. La tasca més destacable d'aquesta experiència va ser realitzar un sistema propi de traduccions de l'aplicació Escio, ja que no ens servia el sistema de traduccions que inclou Android.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Tècnic informàtic</h3>
									<span class="company">SEUR - 08/2015 - 01/2016</span>
								</div>
								<div class="timeline-body">
									<p>En aquesta experiència laboral feia diferents tasques de manteniment de sistemes i de xarxes de l'empresa. Mentre estava en aquest lloc de treball SEUR Girona va canviar de nau, això va fer que els meus companys i jo realitzéssim la instal·lació i configuració dels equips informàtics i les xarxes a la nova nau.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Operari</h3>
									<span class="company">ANTEX S.A. - 01/2015 - 07/2015</span>
								</div>
								<div class="timeline-body">
									<p>ANTEX S.A. és una fàbrica la qual produeix fil. La meva tasca principal era netejar el polímer, material usat per produir fil, que deixen anar les màquines.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Tècnic informàtic</h3>
									<span class="company">Escola Sant Jordi, Bonmatí - 11/2012 - 04/2013</span>
								</div>
								<div class="timeline-body">
									<p>Va ser la meva primera experiència laboral. Realitzava tasques de manteniment d'equips informàtics (servidors, ordinadors, pissarres digitals, ...) i xarxes. La tasca més destacable va ser crear una intranet on els professors i pares podien interecutar amb aquesta.</p>
								</div>
							</div>
						</li>

						<br>
						<li class="timeline-heading text-center animate-box">
							<div><h3>Educació</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Grau en Enginyeria informàtica</h3>
									<span class="company">Universitat de Girona - 09/2016 - Actualment</span>
								</div>
								<div class="timeline-body">
									<p>Cursant actualment.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">CFGS Desenvolupament d'aplicacions multiplataforma</h3>
									<span class="company">Institut Rafael Campalans - 09/2014 - 06/2016</span>
								</div>
								<div class="timeline-body">
									<p>Recursos utilitzats: Android Studio (Java), Eclipse C++ (C++), Eclipse Java (Java), Visual Studio (C#), XML Editor (XML), Oracle Database (SQL), MySQL (SQL), Unity (C#).</p>
									<br/>
									<p>Nota: 91.6/100</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Curs d'accès a CFGS</h3>
									<span class="company">Institut Vallvera - 09/2013 - 06/2014</span>
								</div>
								<div class="timeline-body">
									<p>Estudi de matèries bàsiques (Anglès, Català, Castellà i Matemàtiques) i matèries específiques (Física i Tecnologia) amb un nivell aproximat al batxillerat.</p>
									<br/>
									<p>Nota: 96.0/100</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">CFGM Sistemes microinformàtics i xarxes</h3>
									<span class="company">Institut Rafael Campalans - 09/2011 - 06/2013</span>
								</div>
								<div class="timeline-body">
									<p>Recursos utilitzats: Administració de sistemes, administració de xarxes, seguretat informàtica, muntatge i manteniment d'equips informàtics, aplicacions ofimàtiques i aplicacions web.</p>
									<br/>
									<p>Nota: 86.0/100</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Educació secundària obligatòria</h3>
									<span class="company">Institut Rafael Campalans - 09/2007 - 06/2011</span>
								</div>
								<div class="timeline-body">
									<p>Estudi de matèries bàsiques (Anglès, Català, Castellà i Matemàtiques) i matèries específiques (Francès, Física, Química i Biologia).</p>
									<br/>
									<p>Nota: 61.0/100</p>
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
						<h2>Serveis</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-mobile"></i>
							</span>
							<div class="feature-copy">
								<h3>Desenvolupament</h3>
								<p>Desenvolupament web, Android, iOS, Linux i Windows.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
							<div class="feature-copy">
								<h3>Disseny web</h3>
								<p>Realització de pàgines web estàtiques.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Assessorament</h3>
								<p>Assessorament informàtic segons els teus requisits.</p>
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
								<h3>Reparació i manteniment</h3>
								<p>Reparació i manteniment d'equips informàtics.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-tools-2"></i>
							</span>
							<div class="feature-copy">
								<h3>Muntatge</h3>
								<p>Muntatge de nous equips i instal·lacions de xarxes.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>Distribució</h3>
								<p>Distribució d'aparells informàtics com: Ordinadors, impressores, components, accessoris, ...</p>
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
					<h2>Aptituds</h2>
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
						<h3><span class="name-left">Manteniment d'equips informàtics</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Manteniment de xarxes</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Administració de servidors</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Reparacions</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:100%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Distribució</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:70%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Muntatge</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:85%">
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
					<h2>Projectes</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalArturDominguez" onclick="ga('send', 'event', 'Project', 'Artur Dominguez', 1);" class="work" style="background-image: url(../images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Artur Domínguez</h3>
							<span>Disseny web</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalDatebion" onclick="ga('send', 'event', 'Project', 'Datebion', 1);" class="work" style="background-image: url(../images/datebion.png);">
						<div class="desc">
							<h3>Datebion</h3>
							<span>Disseny web</span>
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
							<span>Disseny web</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalCarvalet" onclick="ga('send', 'event', 'Project', 'Carvalet', 1);" class="work" style="background-image: url(../images/carvalet.png);">
						<div class="desc">
							<h3>Car Valet</h3>
							<span>Disseny web</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalMuntatge" onclick="ga('send', 'event', 'Project', 'Muntatge', 1);" class="work" style="background-image: url(../images/muntatge.png);">
						<div class="desc">
							<h3>Muntatge d'ordinadors</h3>
							<span>Muntatge</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalReparacio" onclick="ga('send', 'event', 'Project', 'Reparacio', 1);" class="work" style="background-image: url(../images/reparacions.png);">
						<div class="desc">
							<h3>Reparació d'ordinadors</h3>
							<span>Reparacions</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalProjectes" onclick="ga('send', 'event', 'Project', 'Seguents projectes', 1);" class="work" style="background-image: url(../images/projects.png);">
						<div class="desc">
							<h3>Següents projectes</h3>
							<span>Estudi</span>
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
			<h2>Contacta'm</h2>
			<form id="ContactForm" onSubmit="return doSubmit();", method="post" action="../sendEmail.php">

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="fname" name="fname" class="form-control" placeholder="Nom" value="">
					</div>
				</div>
				<div class="alert"  id="alertFname" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecte!</strong> No pots deixar en blanc el nom, és un camp obligatori.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="lname" name="lname" class="form-control" placeholder="Cognom" value="">
					</div>
				</div>
				<div class="alert"  id="alertLname" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecte!</strong> No pots deixar en blanc el cognom, és un camp obligatori.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="email" name="email" class="form-control" placeholder="Email" value="">
					</div>
				</div>
				<div class="alert"  id="alertEmail" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecte!</strong> Assegura't que el correu introduït estigui ben format.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="subject" name="subject" class="form-control" placeholder="Assumpte del missatge" value="">
					</div>
				</div>
				<div class="alert"  id="alertSubject" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecte!</strong> Assegura't que has introduït algun assumpte.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Escriu aquí el teu missatge" value=""></textarea>
					</div>
				</div>
				<div class="alert" id="alertMessage" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecte!</strong> Assegura't que has introduït algun missatge.
				</div>

				<div class="form-group">
					<input type="submit" value="Envia" class="btn btn-primary">
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
						<p style="text-align: justify; font-style: italic">Disseny web</p>
						<br/>
						<p style="text-align: justify;">Aquest projecte correspon a aquest lloc web. Ha estat realitzat per tal d'anunciar-me com a <strong>tècnic</strong> i <strong>desenvolupador informàtic</strong>. La idea era "suprimir" el currículum vitae en paper i passar a usar aquest web.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="http://artur.datebion.com" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="icon-dribbble2"></i>
										Visita el lloc web
									</button>
								</a>
								<a href="https://github.com/domy95/Artur-Dominguez" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositori
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline" data-dismiss="modal" type="button" style="visibility: hidden;">
									<i class="fa fa-times"></i>
									Tanca el projecte
								</button>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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
						<p style="text-align: justify; font-style: italic">Disseny web</p>
						<br/>
						<p style="text-align: justify;">Aquest projecte tractava de realitzar una pàgina web per tal de promocionar la nova empresa de serveis informàtics, <strong>Datebion</strong>, de la localitat de Sant Julià del Llor i Bonmatí.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="http://datebion.com" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="icon-dribbble2"></i>
										Visita el lloc web
									</button>
								</a>
								<a href="https://github.com/domy95/Datebion" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositori
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline" data-dismiss="modal" type="button" style="visibility: hidden;">
									<i class="fa fa-times"></i>
									Tanca el projecte
								</button>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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
						<p style="text-align: justify;">Aquest va ser el meu projecte final del CFGS de Desenvolupament d'aplicacions multiplataforma (DAM). Vaig quedar molt content del resultat per ser el meu primer projecte de desenvolupament.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/ByScar-Android" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Repositori Android
									</button>
								</a>
								<a href="https://github.com/domy95/ByScar-Arduino" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Repositori Arduino
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<a href="https://youtu.be/H_xbrIpx85c" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="fab fa-youtube"></i>
										Veure el vídeo
									</button>
								</a>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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
						<p style="text-align: justify; font-style: italic">Disseny web</p>
						<br/>
						<p style="text-align: justify;">Aquest projecte tractava de realitzar un lloc web per informar dels serveis donats des de l'empresa <strong>SG Gestió de comunitats</strong>.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/SG-Comunitats" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositori
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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
						<p style="text-align: justify; font-style: italic">Disseny web</p>
						<br/>
						<p style="text-align: justify;">Aquest projecte tractava de realitzar una pàgina web per tal de promocionar la nova empresa de rentat de cotxes, <strong>Car Valet</strong>, de la localitat d'Anglès. Malauradament aquesta empresa ha tancat a finals del 2017 i hem tingut que donar de baixa el lloc web.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/Car-Valet" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositori
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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
						<h2 style="text-align: justify;">Muntatge d'ordinadors</h2>
						<p style="text-align: justify; font-style: italic">Muntatge</p>
						<br/>
						<p style="text-align: justify;">Realitzo muntatges d'ordinadors des de 2013. Segons el pressupost de la persona interessada s'opta per components acord amb el pressupost i les expectatives.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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
						<h2 style="text-align: justify;">Reparació d'ordinadors</h2>
						<p style="text-align: justify; font-style: italic">Reparacions</p>
						<br/>
						<p style="text-align: justify;">Realitzo reparacions d'ordinadors i altres equips informàtics des de 2013. Em dedico sobretot a ordinadors de sobretaula i portàtils, tot i que també reparo alguns problemes de dispositius mòbils, impressores, escàners, ...</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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
						<h2 style="text-align: justify;">Següents projectes</h2>
						<p style="text-align: justify; font-style: italic">Estudi</p>
						<br/>
						<p style="text-align: justify;">Estic estudiant poder fer altres projectes personals. Alguns d'ells són:</p>
						<ul>
							<li>Aplicació per gestionar reserves</li>
							<li>Sistema de reg automàtic</li>
							<li>Control d'accés mitjançant NFC i/o empremtes digitals</li>
							<li>Altres</li>
						</ul>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Tanca el projecte
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

