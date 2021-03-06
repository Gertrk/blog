<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=ASSETS_URL?>ico/favicon.png">

    <title><?=PROJECT_NAME?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=ASSETS_URL?>components/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            min-height: 2000px !important;
            padding-top: 70px;
            background: url(<?= ASSETS_URL ?>img/bg.jpg);
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?=PROJECT_NAME?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?= $controller == 'posts' ? 'class="active"' : '' ?>><a href="<?=BASE_URL?>">Posts</a></li>
                <li <?= $controller == 'tags' ? 'class="active"' : '' ?>><a href="<?=BASE_URL?>tags">Tags</a></li>
					</ul>
				</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</div>

<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <?  require 'views/'. $controller . '/' .  $controller . '_' . $action . '.php'; ?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=ASSETS_URL?>components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
<script src="<?=ASSETS_URL?>components/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>