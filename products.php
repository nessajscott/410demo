<?php $page = "products"; ?>

<?php require_once('includes/top.inc.php'); ?>

<body>
<div class="gridContainer clearfix">
  
  <?php require_once('includes/header.inc.php'); ?>
  
  <section class="main">
  	<h2>Products</h2>
	<article>
		<h3>Product One</h3>
  		<figure>
	    	<img src="i/bruce.jpg" alt="Bruce Lawson is awesome!" />
	    	<figcaption>According to Bruce Lawson, the section tag is NOT another DIV.</figcaption>
	    </figure>
		<div class="controls">
			<span class="price">$10.99</span> <button>Add to Cart</button>
		</div>
	</article>
	
	<article>
		<h3>Product Two</h3>
  		<figure>
	    	<img src="i/bruce.jpg" alt="Bruce Lawson is awesome!" />
	    	<figcaption>According to Bruce Lawson, the section tag is NOT another DIV.</figcaption>
	    </figure>
		<div class="controls">
			<span class="price">$10.99</span> <button>Add to Cart</button>
		</div>
	</article>
	
	<article>
		<h3>Product Three</h3>
  		<figure>
	    	<img src="i/bruce.jpg" alt="Bruce Lawson is awesome!" />
	    	<figcaption>According to Bruce Lawson, the section tag is NOT another DIV.</figcaption>
	    </figure>
		<div class="controls">
			<span class="price">$10.99</span> <button>Add to Cart</button>
		</div>
	</article>
	
	<article>
		<h3>Product Four</h3>
  		<figure>
	    	<img src="i/bruce.jpg" alt="Bruce Lawson is awesome!" />
	    	<figcaption>According to Bruce Lawson, the section tag is NOT another DIV.</figcaption>
	    </figure>
		<div class="controls">
			<span class="price">$10.99</span> <button>Add to Cart</button>
		</div>
	</article>
    
  </section>
  
  <?php include_once('includes/sidebar.inc.php');?>
  
  <?php include_once('includes/footer.inc.php');?>
  
</div>
</body>
</html>
