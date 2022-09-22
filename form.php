<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wild Template</title>
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php include("_header.php") ?>

<div class="container">
	<div class="column is-12">
		<section class="hero is-info is-bold is-small">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">Hello <?= $_GET['firstname'] ?> <?= $_GET['lastname'] ?> from <?= $_GET['campus']; ?>, this is your message : </h1>
					<h2 class="subtitle"><?= $_GET['message']; ?></h2>
				</div>
			</div>
		</section>
	</div>
</div>

<?php include("_footer.php") ?>
</body>
</html>