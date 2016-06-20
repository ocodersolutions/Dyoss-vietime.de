<!DOCTYPE html>
<html>
<head>
	<title><?php echo $viewModel->get('pageTitle'); ?></title>
  
  

	<!-- insert bootstrap framework -->
	<link href="<?php echo PATH_CSS.'bootstrap.min.css' ?>" rel="stylesheet">
  <!-- custom css -->
  <link href="<?php echo PATH_CSS.'template.css' ?>" rel="stylesheet">
  
</head>
<body class="ocoder">
	<!-- navigation bar only display after login -->
	<?php include 'views/Include/navbar.php'; ?>

  
	<?php require($this->viewFile); ?>
	</div>

	<!-- footer only display after login -->
  <?php include 'views/Include/footer.php'; ?>

  <!-- include popup create issue -->
  <?php include 'views/Include/popup-issue.php'; ?>
  
	
  <!-- load jquery library -->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <!-- load bootstrap library -->
	<script src="<?php echo PATH_JS.'bootstrap.min.js' ?>"></script>
  <!-- load fancybox -->
  <script type="text/javascript" src="<?php echo PATH_JS.'fancybox/lib/jquery.mousewheel-3.0.6.pack.js' ?>"></script>
  <link rel="stylesheet" href="<?php echo PATH_JS.'fancybox/source/jquery.fancybox.css?v=2.1.5' ?>" type="text/css" media="screen" />
  <script type="text/javascript" src="<?php echo PATH_JS.'fancybox/source/jquery.fancybox.pack.js?v=2.1.5' ?>"></script>
  <link rel="stylesheet" href="<?php echo PATH_JS.'fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5' ?>" type="text/css" media="screen" />
  <script type="text/javascript" src="<?php echo PATH_JS.'fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5' ?>"></script>
  <script type="text/javascript" src="<?php echo PATH_JS.'fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6' ?>"></script>
  <link rel="stylesheet" href="<?php echo PATH_JS.'fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7' ?>" type="text/css" media="screen" />
  <!-- ckediktor link-->
  <script src="<?php echo PATH_JS.'ckfinder/ckfinder.js'?>"></script>
  <script type="text/javascript" src="<?php echo PATH_JS.'fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7' ?>"></script>
  <!-- load custom javascript -->
	<script src="<?php echo PATH_JS.'custom.js' ?>"></script>

</body>
</html>