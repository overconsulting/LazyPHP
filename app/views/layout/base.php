<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<link rel="icon" href="" type="image/png" />
		<title><?php echo isset($params['title']) ? $params['title'] : system\Config::$config['GENERAL']['title'] ?></title>
		<?php $this->loadCss(); ?>
		<?php $this->loadJs(); ?>
	</head>
	<body id="front">

		<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Titre du site</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo system\Router::url('articles_index'); ?>">Articles <span class="sr-only">(current)</span></a></li>
					</ul>
				
					<?php if (isset($this->connectedUser) && $this->connectedUser !== null) { ?>
						
						<div class="pull-right connected-user">
							<span><?php echo $this->connectedUser->lastname.' '.$this->connectedUser->firstname; ?></span>
							<a href="<?php echo system\Router::url('user_logout'); ?>" class="btn btn-danger" title="Se déconnecter"><i class="fa fa-remove"></i></a>
						</div>

					<?php } else { ?>
						<a href="<?php echo system\Router::url('user_login'); ?>" class="btn btn-success pull-right navbar-btn" title="Se déconnecter"><i class="fa fa-login"></i> Se connecter</a>
					<?php } ?>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php echo system\Session::flash(); ?>
					<?php echo $yeslp; ?>
				</div>
			</div>
		</div>
	</body>
</html>
