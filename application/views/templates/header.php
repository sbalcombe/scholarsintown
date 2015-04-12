<html>
	<head>
		<title>Scholar In Town</title>
	</head>
	
	<body>
		<?= validation_errors() ?>
		<?= form_open('login'); ?>
			<label for="email">Email:</label>
				<input type="text" size="50" name="email"/>
			<label for="password">Password:</label>
				<input type="password" size="20" name="password"/>
			<input type="submit" value="Login"/>
		</form>