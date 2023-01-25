<!DOCTYPE html>
<html>
<head>
	<title>Send mail</title>
</head>
<body>
	<form action="mailCode.php" method="post">
		<input type="text" placeholder="firstname" name="firstName"/><br>
		<input type="text" name="lastName" placeholder="lastname"><br>
		<input type="text" name="number" maxlength="10" placeholder="number"><br>
		<input type="email" name="email" placeholder="email"><br>
		<textarea name="message" placeholder="enter your message"></textarea><br>
		<!-- <input type="submit" value="Submit" name="send"> -->
<button type="submit" name="send">Send</button>
	</form>

</body>
</html>
