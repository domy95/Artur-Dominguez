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
        	Solicitamos su autorización para obtener datos estadísticos de su navegación en este sitio web, de conformidad con el Real Decreto-Ley 13/2012. Si continúa navegando, consideramos que acepta el uso de cookies.
        	<a href="javascript:void(0);" class="ok" onclick="GuardarCookie();"><b>Aceptar</b></a>
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
							<h3><span>Técnico / Programador</span></h3>
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
					<h2>Sobre mí</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Nombre:</span><span class="second-block">Artur Domínguez Gispert</span></li>
						<li><span class="first-block">Teléfono:</span><span class="second-block">+34 673 74 57 46</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">adominguez@datebion.com</span></li>
						<li><span class="first-block">Web:</span><span class="second-block">www.artur.datebion.com</span></li>
						<li><span class="first-block">Dirección:</span><span class="second-block">Carrer Constantins nº4, Sant Julià del Llor i Bonmatí 17164 (Girona)</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Bienvenido!</h2>

					<p>Soy Artur Domínguez Gispert. Nací en un pueblo pequeño de la comarca La Selva llamado Sant Julià del Llor i Bonmatí. Actualmente sigo viviendo en este maravilloso y tranquilo pueblo.</p>

					<p>Me considero un ser muy exigente consigo mismo y un apasionado de las nuevas tecnologías, sí estos pequeños artefactos que nos permiten hacer cosas que hasta el momento se habían considerado inalcanzables. Cuanto más pequeño y potente es el artefacto en cuestión más me despierta lo que llamamos curiosidad.</p>

					<p>Desde pequeño he sentido curiosidad por las nuevas tecnologías, me entusiasmaban los ordenadores y los diferentes aparatos electrónicos que teníamos por casa. Decidí que algún día me dedicaría a esto profesionalmente hasta que finalmente lo conseguí.</p>

					<p>Mi primera experiencia con la informática, de índole lectivo, fue alrededor del año 2003, cuando tenía unos 8 años. En mi escuela empezaron a impartir clases extraescolares de mecanografía e informática, en las que me apunté sin pensarlo demasiado.</p>

					<p>Más adelante, una vez terminado la ESO, al realizar el CFGM de Sistemas Microinformáticos y Redes descubrí un montón de posibilidades con la programación, para aquellos momentos en <i>bash</i>. Sólo de realizar mi primer <i>script</i> funcional para realizar copias de seguridad decidií que debía realizar el grado de desarrollo de aplicaciones multiplataforma, y ​​así lo hice. Este ciclo me cambió la perspectiva respecto al mundo de la programación, descubrí que este mundo era mucho más grande de lo que me había imaginado.</p>

					<p>Desde aquí quiero mostrar mi agradecimiento a todos mis profesores, tanto del CFGM SMR como del CFGS DAM del Instituto Rafael Campalans, por todos los conocimientos recibidos por su parte los que me han permitido dedicarme profesionalmente al mundo de la programación.</p>

					<p>Una vez hecha esta introducción <i>sobre mí</i> espero que disfrutes del sitio web y que la información que puedas encontrar te sea de utilidad.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Experiencia</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Experiencia Laboral</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Programador</h3>
									<span class="company">Esolvo - 07/2016 - Actualmente</span>
								</div>
								<div class="timeline-body">
									<p>En este puesto de trabajo he estado trabajando en el desarrollo de aplicaciones para dispositivos móviles, tanto para iOS (lenguaje Swift) como para Android (lenguaje Java). La tarea más destacable de esta experiencia fue desarrollar la aplicación principal de la empresa (Escio) para iOS, ya que sólo estaba para dispositivos Android.</p>
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
									<p>Mi labor en este puesto de trabajo consistía en apoyar en determinadas tareas de desarrollo a los programadores Android de la empresa. La tarea más destacable de esta experiencia fue realizar un sistema propio de traducciones de la aplicación Escio, ya que no nos servía el sistema de traducciones que incluye Android.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Técnico informático</h3>
									<span class="company">SEUR - 08/2015 - 01/2016</span>
								</div>
								<div class="timeline-body">
									<p>En esta experiencia laboral hacía diferentes tareas de mantenimiento de sistemas y de redes de la empresa. Mientras estaba en este puesto de trabajo SEUR Girona cambió de nave, esto hizo que mis compañeros y yo realizáramos la instalación y configuración de los equipos informáticos y las redes a la nueva nave.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Operario</h3>
									<span class="company">ANTEX S.A. - 01/2015 - 07/2015</span>
								</div>
								<div class="timeline-body">
									<p>ANTEX S.A. es una fábrica la que produce hilo. Mi tarea principal era limpiar el polímero, material usado para producir hilo, que sueltan las máquinas.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Técnico informático</h3>
									<span class="company">Escuela Sant Jordi, Bonmatí - 11/2012 - 04/2013</span>
								</div>
								<div class="timeline-body">
									<p>Fue mi primera experiencia laboral. Realizaba tareas de mantenimiento de equipos informáticos (servidores, ordenadores, pizarras digitales, ...) y redes. La tarea más destacable fue crear una intranet donde los profesores y padres podían interecutar con esta.</p>
								</div>
							</div>
						</li>

						<br>
						<li class="timeline-heading text-center animate-box">
							<div><h3>Educación</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Grado en Ingeniería Informática</h3>
									<span class="company">Universidad de Girona - 09/2016 - Actualmente</span>
								</div>
								<div class="timeline-body">
									<p>Cursando actualmente.</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">CFGS Desarrollo de aplicaciones multiplataforma</h3>
									<span class="company">Instituto Rafael Campalans - 09/2014 - 06/2016</span>
								</div>
								<div class="timeline-body">
									<p>Recursos usados: Android Studio (Java), Eclipse C++ (C++), Eclipse Java (Java), Visual Studio (C#), XML Editor (XML), Oracle Database (SQL), MySQL (SQL), Unity (C#).</p>
									<br/>
									<p>Nota: 91.6/100</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Curso de acceso a CFGS</h3>
									<span class="company">Instituto Vallvera - 09/2013 - 06/2014</span>
								</div>
								<div class="timeline-body">
									<p>Estudio de materias básicas (Inglés, Catalán, Castellano y Matemáticas) y materias específicas (Física y Tecnología) con un nivel aproximado al bachillerato.</p>
									<br/>
									<p>Nota: 96.0/100</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">CFGM Sistemas microinformáticos y redes</h3>
									<span class="company">Instituto Rafael Campalans - 09/2011 - 06/2013</span>
								</div>
								<div class="timeline-body">
									<p>Recursos usados: Administración de sistemas, administración de redes, seguridad informática, montaje y mantenimiento de equipos informáticos, aplicaciones ofimáticas y aplicaciones web.</p>
									<br/>
									<p>Nota: 86.0/100</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Educación secundaria obligatoria</h3>
									<span class="company">Instituto Rafael Campalans - 09/2007 - 06/2011</span>
								</div>
								<div class="timeline-body">
									<p>Estudio de materias básicas (Inglés, Catalán, Castellano y Matemáticas) y materias específicas (Francés, Física, Química y Biología).</p>
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
						<h2>Servicios</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-mobile"></i>
							</span>
							<div class="feature-copy">
								<h3>Desarrollo</h3>
								<p>Desarrollo web, Android, iOS, Linux y Windows.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
							<div class="feature-copy">
								<h3>Diseño web</h3>
								<p>Realización de páginas web estáticas.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Asesoramiento</h3>
								<p>Asesoramiento informático según tus requisitos.</p>
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
								<h3>Reparación y mantenimiento</h3>
								<p>Reparación y mantenimiento de equipos informáticos.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-tools-2"></i>
							</span>
							<div class="feature-copy">
								<h3>Montaje</h3>
								<p>Montaje de nuevos equipos e instalaciones de redes.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>Distribución</h3>
								<p>Distribución de aparatos informáticos como: Ordenadores, impresoras, componentes, accesorios, ...</p>
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
					<h2>Aptitudes</h2>
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
						<h3><span class="name-left">Mantenimiento de equipos informáticos</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Mantenimiento de redes</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Administración de servidores</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Reparaciones</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Distribución</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Montaje</span><span class="value-right">90%</span></h3>
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
					<h2>Proyectos</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalArturDominguez" onclick="ga('send', 'event', 'Project', 'Artur Dominguez', 1);" class="work" style="background-image: url(../images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Artur Domínguez</h3>
							<span>Diseño web</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalDatebion" onclick="ga('send', 'event', 'Project', 'Datebion', 1);" class="work" style="background-image: url(../images/datebion.png);">
						<div class="desc">
							<h3>Datebion</h3>
							<span>Diseño web</span>
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
							<span>Diseño web</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalCarvalet" onclick="ga('send', 'event', 'Project', 'Carvalet', 1);" class="work" style="background-image: url(../images/carvalet.png);">
						<div class="desc">
							<h3>Car Valet</h3>
							<span>Diseño web</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalMuntatge" onclick="ga('send', 'event', 'Project', 'Muntatge', 1);" class="work" style="background-image: url(../images/muntatge.png);">
						<div class="desc">
							<h3>Montaje de ordenadores</h3>
							<span>Montaje</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalReparacio" onclick="ga('send', 'event', 'Project', 'Reparacio', 1);" class="work" style="background-image: url(../images/reparacions.png);">
						<div class="desc">
							<h3>Reparación de ordenadores</h3>
							<span>Reparaciones</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a data-toggle="modal" href="#workModalProjectes" onclick="ga('send', 'event', 'Project', 'Seguents projectes', 1);" class="work" style="background-image: url(../images/projects.png);">
						<div class="desc">
							<h3>Siguientes proyectos</h3>
							<span>Estudio</span>
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
			<h2>Contacta</h2>
			<form id="ContactForm" onSubmit="return doSubmit();", method="post" action="../sendEmail.php">

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="fname" name="fname" class="form-control" placeholder="Nombre" value="">
					</div>
				</div>
				<div class="alert"  id="alertFname" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecto!</strong> No puedes dejar en blanco el nombre, es un campo obligatorio.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="lname" name="lname" class="form-control" placeholder="Apellido" value="">
					</div>
				</div>
				<div class="alert"  id="alertLname" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecto!</strong> No puedes dejar en blanco el apellido, es un campo obligatorio.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="email" name="email" class="form-control" placeholder="Email" value="">
					</div>
				</div>
				<div class="alert"  id="alertEmail" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecto!</strong> Asegúrate de que el correo introducido esté bien formado.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="subject" name="subject" class="form-control" placeholder="Asunto del mensaje" value="">
					</div>
				</div>
				<div class="alert"  id="alertSubject" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecto!</strong> Asegúrate de que has introducido algún asunto.
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Escribe aquí tu mensaje" value=""></textarea>
					</div>
				</div>
				<div class="alert" id="alertMessage" style="display:none; color: #8B0C0C;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
 					<strong>Valor incorrecto!</strong> Asegúrate de que has introducido algún mensaje.
				</div>

				<div class="form-group">
					<input type="submit" value="Enviar" class="btn btn-primary">
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
						<p style="text-align: justify; font-style: italic">Diseño web</p>
						<br/>
						<p style="text-align: justify;">Este proyecto corresponde a este sitio web. Ha sido realizado con el fin de anunciarme como <strong> técnico </strong> y <strong> desarrollador informático </strong>. La idea era "suprimir" el curriculum vitae en papel y pasar a usar esta web.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="http://artur.datebion.com" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="icon-dribbble2"></i>
										Visita el sitio web
									</button>
								</a>
								<a href="https://github.com/domy95/Artur-Dominguez" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositorio
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline" data-dismiss="modal" type="button" style="visibility: hidden;">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
								</button>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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
						<p style="text-align: justify; font-style: italic">Diseño web</p>
						<br/>
						<p style="text-align: justify;">Este proyecto trataba de realizar una página web para promocionar la nueva empresa de servicios informáticos, <strong>Datebion</strong>, de la localidad de Sant Julià del Llor i Bonmatí.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="http://datebion.com" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="icon-dribbble2"></i>
										Visita el sitio web
									</button>
								</a>
								<a href="https://github.com/domy95/Datebion" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositorio
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-outline" data-dismiss="modal" type="button" style="visibility: hidden;">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
								</button>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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
						<p style="text-align: justify;">Este fue mi proyecto final del CFGS de Desarrollo de aplicaciones multiplataforma (DAM). Quedé muy contento del resultado por ser mi primer proyecto de desarrollo.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/ByScar-Android" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Repositorio Android
									</button>
								</a>
								<a href="https://github.com/domy95/ByScar-Arduino" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Repositorio Arduino
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<a href="https://youtu.be/H_xbrIpx85c" target="_blank">
									<button class="btn btn-primary" type="button">
										<i class="fab fa-youtube"></i>
										Ver el vídeo
									</button>
								</a>
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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
						<p style="text-align: justify; font-style: italic">Diseño web</p>
						<br/>
						<p style="text-align: justify;">Este proyecto trataba de realizar un sitio web para informar de los servicios dados desde la empresa <strong>SG Gestión de comunidades</strong>.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/SG-Comunitats" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositorio
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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
						<p style="text-align: justify; font-style: italic">Diseño web</p>
						<br/>
						<p style="text-align: justify;">Este proyecto trataba de realizar una página web para promocionar la nueva empresa de lavado de coches, <strong>Car Valet</strong>, de la localidad de Anglès. Desgraciadamente esta empresa ha cerrado a finales del 2017 y hemos tenido que dar de baja el sitio web.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<a href="https://github.com/domy95/Car-Valet" target="_blank">
									<button class="btn btn-outline" type="button">
										<i class="fas fa-code-branch"></i>
										Visita el repositorio
									</button>
								</a>
							</div>
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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
						<p style="text-align: justify; font-style: italic">Montaje</p>
						<br/>
						<p style="text-align: justify;">Realizo montajes de ordenadores desde 2013. Según el presupuesto del interesado se opta por componentes acuerdo con el presupuesto y las expectativas.</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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
						<p style="text-align: justify; font-style: italic">Reparaciones</p>
						<br/>
						<p style="text-align: justify;">Realizo reparaciones de ordenadores y otros equipos informáticos desde 2013. Me dedico sobre todo a ordenadores de sobremesa y portátiles, aunque también reparo algunos problemas de dispositivos móviles, impresoras, escáneres, ...</p>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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
						<h2 style="text-align: justify;">Siguientes proyectos</h2>
						<p style="text-align: justify; font-style: italic">Estudio</p>
						<br/>
						<p style="text-align: justify;">Estoy estudiando poder hacer otros proyectos personales. Algunos de ellos son:</p>
						<ul>
							<li>Aplicación para gestionar reservas</li>
							<li>Sistema de riego automático</li>
							<li>Control de acceso mediante NFC y/o huellas digitales</li>
							<li>Otros</li>
						</ul>
						<br/>
						<div class="row" style="padding: 10px">
							<div class="col-md-6">
								<button class="btn btn-danger" data-dismiss="modal" type="button">
									<i class="fa fa-times"></i>
									Cerrar el proyecto
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

