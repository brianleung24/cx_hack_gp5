<!DOCTYPE html>
<html lang="en">
<head>
     <?php session_start(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cathay Pacific</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">  
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
        

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->


</head><!--/head-->

<body>
	<header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="menu.php">
                        <h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="menu.php">Home</a></li>
                        <li><a href="food.php">Inflight meal</a></li>
                        <li><a href="service.php">I-Service</a></li>                      
                        <li><a href="dutyfree.php">Duty Free</a></li>    
                        <li><a href="marcopolo.php">Macro Polo</a></li>  
                    </ul>
                </div>
                <div class="User">
<!--                    User Info-->
                    <h3>Hello <?= isset($_SESSION['username'])?$_SESSION['username']:'Guest'?>, </h3>
                    <h3>Flight number:&nbsp;&nbsp;<?= isset($_SESSION['flight'])?$_SESSION['flight']:''?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seat Number:&nbsp;<?= isset($_SESSION['seat'])?$_SESSION['seat']:''?></h3>
                    


                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
