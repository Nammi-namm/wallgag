<!DOCTYPE html>
<html lang="en-GB">

<?php 
	include_once ("dbcon/class.datamanager.php");
	$db_man = new DatabaseManager('localhost', 'bennispenni_PictureBase', 'bennispenni', 'password');
	include 'startsession.php'; 
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wallgag</title>
  	<link rel="stylesheet" href="css/skeleton.css">
  	<link rel="stylesheet" type="text/css" href="css/custom.css">
  	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  	<?php
        include ("header.php");
    ?>
</head>
<body>
	<?php
		 if(!isset($_SESSION['login_user']))
		{
			include 'loggedOutNav.php';
		}
		else
		{
			include 'loggedInNav.php';
		}
	
	?>
	
	<!-- Page Content -->
    <div class="container">
        <!--<figure>
            <img src="<?= $selectedImage; ?>" alt="Random image">
            <figcaption><?= $caption; ?></figcaption>
        </figure>-->
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php //echo $pageTitles[$url]; ?>
                    <small>wallpapers</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project One</h3>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                </div>
                <a class="btn btn-primary" href="#">Download <span class="glyphicon glyphicon-download-alt"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Two</h3>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                </div>
                <a class="btn btn-primary" href="#">Download <span class="glyphicon glyphicon-download-alt"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Three</h3>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                </div>
                <a class="btn btn-primary" href="#">Download <span class="glyphicon glyphicon-download-alt"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Four</h3>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                </div>
                <a class="btn btn-primary" href="#">Download <span class="glyphicon glyphicon-download-alt"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="images/5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Five</h3>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-up"></span></button>
                  <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-down"></span></button>
                </div>
                <a class="btn btn-primary" href="#">Download <span class="glyphicon glyphicon-download-alt"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
 <!-- Footer -->
	<?php
		include ("footer.php");
	?>
</body>
</html>
