<?php
require ('../core/init.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="description" content="">
    <meta name="author" content="">-->

    <title>Sports Feed BLog Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sportsfeed.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
<style> 
 
    
    .carousel-inner>.item>img, .carousel-inner>.item>a>img
    {
        height:450px;
        width:700px;
    }
 
</style> 
</head>
<body>

    <div class="brand">Sports Feed</div>
    <div class="address-bar">National Institute Of Technology Tiruchirappalli</div>

    <!-- Navigation -->

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="bloghome.php">Sports Feed</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blogpage.php">Blog</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/h4.jpg" alt="">
	                            </div>
 			<?php  

     

     			 $images = $general->generalgallery();

     			 

     			 foreach($images as $reachs)

      			{

			?>


                            <div class="item">
                                <img class="img-responsive img-full" src="../gallery/<?php echo $reachs['file_name'];?>" alt="">
                            </div>
			<?php
			}
			?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
 <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Sports Feed</h1>
                    
                </div>
            </div>
        </div>
			<div id="footballcover" style="position:relative; background:white; z-index:7; display:none;">
			<h4 onclick="fclose()" style="cursor:pointer;">CLOSE X</h4>

	 <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">FOOTBALL
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
	<?php
	$content = $general->dashboard(2);
	foreach($content as $reach)
		{     	
		 
		
?>
                <div class="col-lg-12 text-center">
                  
                    <h2>Post Title
                        <br>
                        <small><?php echo $reach['postdate']?></small>
                    </h2>
                    <p><?php echo $reach['messages']?></p>
                    
                    <hr>
                </div>
                <?php
}?>
                
            </div>
        </div>
	</div>
<div id="volleyballcover" style="position:relative; background:white; z-index:7; display:none;">
			<h4 onclick="vclose()" style="cursor:pointer;">CLOSE X</h4>
 <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">VOLLEYBALL
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
	<?php
	$content = $general->dashboard(3);
	foreach($content as $reach)
		{     	
		 
		
?>
                <div class="col-lg-12 text-center">
                  
                    <h2>Post Title
                        <br>
                        <small><?php echo $reach['postdate']?></small>
                    </h2>
                    <p><?php echo $reach['messages']?></p>
                    
                    <hr>
                </div>
                <?php
}?>
                
            </div>
        </div>
</div>
<div id="basketballcover" style="position:relative; background:white; z-index:7; display:none;">
			<h4 onclick="bclose()" style="cursor:pointer;">CLOSE X</h4>
 <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">BASKETBALL
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
	<?php
	$content = $general->dashboard(1);
	foreach($content as $reach)
		{     	
		 
		
?>
                <div class="col-lg-12 text-center">
                  
                    <h2>Post Title
                        <br>
                        <small><?php echo $reach['postdate']?></small>
                    </h2>
                    <p><?php echo $reach['messages']?></p>
                    
                    <hr>
                </div>
                <?php
}?>
                
            </div>
        </div>
</div>
<div id="handballcover" style="position:relative; background:white; z-index:7; display:none;">
			<h4 onclick="hclose()" style="cursor:pointer;">CLOSE X</h4>
 <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">HANDBALL
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
	<?php
	$content = $general->dashboard(5);
	foreach($content as $reach)
		{     	
		 
		
?>
                <div class="col-lg-12 text-center">
                  
                    <h2>Post Title
                        <br>
                        <small><?php echo $reach['postdate']?></small>
                    </h2>
                    <p><?php echo $reach['messages']?></p>
                    
                    <hr>
                </div>
                <?php
}?>
                
            </div>
        </div>
</div>
<div id="hockeycover" style="position:relative; background:white; z-index:7; display:none;">
			<h4 onclick="hoclose()" style="cursor:pointer;">CLOSE X</h4>
 <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">HOCKEY
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
	<?php
	$content = $general->dashboard(6);
	foreach($content as $reach)
		{     	
		 
		
?>
                <div class="col-lg-12 text-center">
                  
                    <h2>Post Title
                        <br>
                        <small><?php echo $reach['postdate']?></small>
                    </h2>
                    <p><?php echo $reach['messages']?></p>
                    
                    <hr>
                </div>
                <?php
}?>
                
            </div>
        </div>
</div>
<div id="cricketcover" style="position:relative; background:white; z-index:7; display:none;">
			<h4 onclick="cclose()" style="cursor:pointer;">CLOSE X</h4>
 <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">CRICKET
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
	<?php
	$content = $general->dashboard(7);
	foreach($content as $reach)
		{     	
		 
		
?>
                <div class="col-lg-12 text-center">
                  
                    <h2>Post Title
                        <br>
                        <small><?php echo $reach['postdate']?></small>
                    </h2>
                    <p><?php echo $reach['messages']?></p>
                    
                    <hr>
                </div>
                <?php
}?>
                
            </div>
        </div>
</div>
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <a onclick="footshow()" style="cursor:pointer; text-align:center;"><strong>FootBall Blog</strong></a><!--Enter as covershow($id)-->
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/f1.jpg" alt="">
                    <hr class="visible-xs">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <a onclick="basketshow()" style="cursor:pointer; text-align:center;"><strong>BasketBall Blog</strong></a>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/b1.jpg" alt="">
                    <hr class="visible-xs">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <a onclick="volleyshow()" style="cursor:pointer; text-align:center;"><strong>VolleyBall Blog</strong></a>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/v1.jpg" alt="">
                    <hr class="visible-xs">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <a onclick="cricketshow()" style="cursor:pointer; text-align:center;"><strong>Cricket Blog</strong></a>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/c1.jpg" alt="">
                    <hr class="visible-xs">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <a onclick="handshow()" style="cursor:pointer; text-align:center;"><strong>HandBall Blog</strong></a>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/h1.jpg" alt="">
                    <hr class="visible-xs">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <a onclick="hockeyshow()" style="cursor:pointer; text-align:center;"><strong>Hockey Blog</strong></a>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/f1.jpg" alt="">
                    <hr class="visible-xs">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>

 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 500 //changes the speed
    })
    </script>
    <script>
	function footshow()// covershow($id)
{

	$("#footballcover").show();
	$(".row").hide();
}

	function fclose()
{
	$(".row").show();
	$("#footballcover").hide();
}	
function volleyshow()// covershow($id)
{

	$("#volleyballcover").show();
	$(".row").hide();
}

	function vclose()
{
	$(".row").show();
	$("#volleyballcover").hide();
}
function basketshow()// covershow($id)
{

	$("#basketballcover").show();
	$(".row").hide();
}

	function bclose()
{
	$(".row").show();
	$("#basketballcover").hide();
}	
function cricketshow()// covershow($id)
{

	$("#cricketcover").show();
	$(".row").hide();
}

	function cclose()
{
	$(".row").show();
	$("#cricketcover").hide();
}	
function handshow()// covershow($id)
{

	$("#handballcover").show();
	$(".row").hide();
}

	function hclose()
{
	$(".row").show();
	$("#handballcover").hide();
}	
function hockeyshow()// covershow($id)
{

	$("#hockeycover").show();
	$(".row").hide();
}

	function hoclose()
{
	$(".row").show();
	$("#hockeycover").hide();
}		
    </script>

</body>
</html>
