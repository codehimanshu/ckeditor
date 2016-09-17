<!DOCTYPE html>
<html>
	<head>
		<title>CKEditor</title>
		<script src="ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<form action="insert.php" method="post">
			<input type="text" name="title" placeholder="title" required="" />
			<textarea class="ckeditor" name="content" required="" ></textarea>
			<input type="submit" name="submit" />
		</form>
	</body>
</html>