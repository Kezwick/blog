<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrap">
		<header class="header">
			<nav class="menu">
				<ul class="lists-item">
					<li class="list-item">
						<a href="index.php?text=1" class="link-item">Ссылка 1</a>
					</li>
					<li class="list-item">
						<a href="index.php?text=2" class="link-item">Ссылка 2</a>
					</li>
				</ul>
			</nav>
			<div class="clr"></div>
			<div class="bg-header"></div>
		</header>
		<section class="content">
			<div class="addnews">
				<div class="news">
					<div class="title">
						<h3>Новость 1</h3>
					</div>
                    <div>
					     <?php include_once ('./lib/func.php'); showcaseswitch();?>
                    </div>
					<div class="clr"></div>
				</div>
			</div>
		</section>

	</div>
</body>
</html>
