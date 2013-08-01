<?php $page = "about"; ?>

<?php require_once('includes/top.inc.php'); ?>

<body>
<div class="gridContainer clearfix">
  
  <?php require_once('includes/header.inc.php'); ?>
  
  <section class="main">
  	<h2>About</h2>
    <p>In HTML 5 you can specifically mark up all the "secondary" content on a page such as navigation, branding, copyright notices, so it feels odd that you can’t specifically mark up the most important part of your page—the content.
	</p>

	<blockquote>
		But what would be the purpose of marking it up specifically, anyway?
	</blockquote>

	<p>
But what would be the purpose of marking it up specifically, anyway? If you need to style it, use a div. An assistive technology like a screenreader can find the main content because it is the first thing inside a page that isn’t a header, nav or footer.
	</p>
  </section>
  

  
  <?php include_once('includes/footer.inc.php');?>
  
</div>
</body>
</html>
