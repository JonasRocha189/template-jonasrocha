<!doctype html>
<html lang="pt-BR">
	<head>
		<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-ND5VGHX');</script>
    <!-- End Google Tag Manager -->   
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Template criado por Jonas Rocha para usar em seu proprio site">
		<meta name="author" content="Jonas Rocha">
		<title>Jonas Rocha | Marketing Digital</title>
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fontawesome/font-awesome.min.css" rel="stylesheet">
	
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ND5VGHX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

		<?php wp_head(); ?>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<a class="navbar-brand" href="/">Jonas Rocha</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/sobre">Sobre</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Projetos</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
							<div class="dropdown-menu" aria-labelledby="dropdown01">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/contato">Contato</a>
						</li>
						
					</ul>
					<form class="form-inline mt-2 mt-md-0" action="/">
						<input class="form-control mr-sm-2" type="text" placeholder="Buscar por..." required name="s" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
					</form>
				</div>
			</nav>
			<div class="progress-container">
		    <div class="progress-bar" id="myBar"></div>
		  </div>
		</header>
		<main role="main">
			