<?php

if (isset($_GET['m_do'])) {
	echo 'Test content';
	die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset='utf-8'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">

		<hr>

		<div class="mesour-simple-filter">
			<div class="input-group">
				<input type="text" class="form-control" value="Johnd fasd fasd fads" data-simple-filter-query="-test">
				<span class="input-group-btn">
						<a href="#" data-simple-filter="-test" class="btn btn-primary" role="button">
							<span class="fa fa-search"></span>
						</a>
					</span>
			</div>
		</div>

		<hr>

		<br><br><br><br><br><br><br><br>
	</div>

	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../dist/mesour.simple-filter.js"></script>

</body>
</html>