<?php $page = "contact"; ?>

<?php require_once('includes/top.inc.php'); ?>

<body>
<div class="gridContainer clearfix">
  
  <?php require_once('includes/header.inc.php'); ?>
  
  <section class="main">
  	<h2>Contact</h2>
	<form action="" method="">
		<fieldset>
			<legend>Got a Question? Ask away!</legend>
			<ol>
				<li>
					<label for="name">Your Full Name:</label>
					<input type="text" name="name" placeholder="i.e. John Smith" size="28" />
				</li>
				<li>
					<label for="email">Email Address:</label>
					<input type="email" name="email" placeholder="i.e. jon@me.com" size="28" />
				</li>
				<li>
					<label for="comments">Comments:</label>
					<textarea name="comments" placeholder="share your thoughts" 
					cols="30" rows="8"></textarea>
				</li>
				<li><input type="submit" name="submitted" value="Send Now"></li>
			</ol>
		</fieldset>
	</form>
  </section>

  
  <?php include_once('includes/footer.inc.php');?>
  
</div>
</body>
</html>
