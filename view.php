<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
	<script src="ckeditor/ckeditor.js"></script>
	<style type="text/css">
		table, th, td {
    		border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php
		require_once 'db_connect.php';
		$result=mysql_query("SELECT * FROM data",$link) or die(mysql_error());
	?>
	<table>
		<tr>
			<th>ID</th>
			<th>TITLE</th>
			<th>CONTENT</th>
		</tr>
		<?php
			while($row=mysql_fetch_assoc($result)):
				?>
				<tr>
					<td>
						<?php echo $row["id"]; ?>
					</td>
					<td>
						<?php echo $row['title']; ?>
					</td>
					<td>
						<?php echo $row['content']; ?>
					</td>

				</tr>
			<?php 
			endwhile;
		?>
	</table>
</body>
</html>