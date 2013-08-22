<?php

if($_POST['submitted'])
{
	require('PasswordHash.php');

	$pass = trim($_POST['pass']);
	$pass2 = trim($_POST['pass2']);
	
	if(empty($pass) || empty($pass2)){exit('passwords cannot be empty');}
	
	// Passwords should never be longer than 72 characters to prevent DoS attacks
	if(strlen($pass) > 72) { exit('Password must be 72 characters or less'); }
	
	if($pass === $pass2)
	{
		$t_hasher = new PasswordHash(8, FALSE);
		$hash = $t_hasher->HashPassword($pass);
		
		if (strlen($hash) >= 20)
		{
			echo "Hashed Pass: $hash";
		}
		else
		{
			echo 'There was an error hashing your password. Please try again.';
			unset($t_hasher);
		}
	}
	else
	{
		echo 'Passwords must match.';
	}
	
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Form</title>
</head>

<body>
<h1>Make Hashed Password</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<fieldset>
        <ul>
        	<li>
            	<label for="pass">Password: </label>
                <input name="pass" type="password" />
            </li>
            <li>
            	<label for="pass2">Password Again: </label>
                <input name="pass2" type="password" />
            </li>
            <li>
                <input name="submitted" type="submit" value="create hash now" />
            </li>
        </ul>
    </fieldset>
</form>
</body>
</html>


