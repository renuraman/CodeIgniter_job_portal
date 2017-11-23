<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<!--bootstrap files-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!--bootstrap files-->

</head>

<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>

</button>

</div>

 <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul>
	<li>home</li>
	<li>test</li>
	
	</ul>
	</div>

</div>


</nav>


<div class="container-fluid">
<div class="row">

<div class="container">
<?php $this->load->view($main_view);?>
</div>

</div>


</div>

</body>
</html>