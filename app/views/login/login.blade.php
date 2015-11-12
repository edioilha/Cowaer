<!DOCTYPE html>
<html lang="pt-br">
	<head>
    <meta charset="utf-8">
    <title>Boitrix</title>
    <meta name="description" content="Sistem de Gestão e Controle de gado bovino">
    <meta name="author" content="TechMob">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{url('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Boitrix Login</h3>
					</div>
					<div class="form-group">
						<label class="control-label">Nome</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Senha</label>
						<input type="password" class="form-control" name="password" />
					</div>
					<div class="text-center">
						<a href="{{url('panel-control/dashboard/')}}" class="btn btn-primary">Entrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
