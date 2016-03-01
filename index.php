<!DOCTYPE html>
<html>
<head>
	<title>WhoDunnIt</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<?php
		include "company.php";

		$companyInfo = new Company();
		$companyInfo = $companyInfo->getCompanyInfo("WhoDunnIt");
	?>
</head>
<body>

	<header>
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WhoDunnIt</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">About <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Project</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Contact <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Email</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Address</a></li>
          </ul>
        </li>
      </ul>
      <a class="btn btn-success my-btn" data-toggle="modal" href="#myModal" >Login</a>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</header>

	<section>
		<div class="container">
	<div class="row">

        <div class="modal" id="myModal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">x</button>
            <h3>Login to WhoDunnIt.com</h3>
          </div>
          <div class="modal-body">
            <form method="post" action='' name="login_form">
              <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
              <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
              <p><button type="submit" class="btn btn-success">Sign in</button>
                <button class="btn btn-warning"><a href="#" class="black">Forgot Password?</a></button>
              </p>
            </form>
          </div>
          <div class="modal-footer">
            New To WhoDunnIt.com?
            <a href="#" class="btn btn-primary">Register</a>
          </div>
        </div>
	</div>
</div>
	</section>

	<section>
		<div class="well">
			<h2 class="header">Recent Posts</h2>
			<p><?= "hello World"; ?></p>
		</div>
	</section>

	<footer>
		<div class="comp-info">
		<?php
			echo $companyInfo;
		?>
		</div>
	</footer>

</body>
</html>