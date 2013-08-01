<aside>
  	<p>
    You can shorten the code by combining both lines into one like this:
$title = ucfirst(basename($_SERVER['SCRIPT_FILENAME'], '.php'));
When you nest functions like this, PHP processes the innermost one first and passes the result to the outer function. It makes your code shorter, but it's not so easy to read.
	</p>
</aside>