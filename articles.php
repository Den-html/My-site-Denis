<?php
$config = array(
	'title' => 'Блог',
	'db' => array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'name' => 'blog')
);
$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if ( $connection == false ) 
{
	echo 'Не удалось!<br>';
	echo mysqli_connect_error();
	exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title><?php echo $config['title'];?></title>
	<link rel="shortcut icon" href="\media\favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
<style>
   body {
    background-image: url(../media/year.jpg); /* Путь к фоновому изображению */
   }
   body {background: #d6eaf8}
a {
  text-decoration: none;
  outline: none;
  display: inline-block;
  color: white;
  padding: 20px 30px;
  margin: 10px 20px;
  border-radius: 10px;
  font-family: 'Montserrat', sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  background-image: linear-gradient(to right, #9EEFE1 0%, #4830F0 51%, #9EEFE1 100%);
  background-size: 200% auto;
  box-shadow: 0 0 20px rgba(0,0,0,.1);
  transition: .5s;
}
a:hover {background-position: right center;}
</style>
</head>

<body>

	<div id="wrapper">

		<header id="header">
			<div class="header_top">
				<div class="container">
					<div class="header_top_logo">
						<h1 style="font-family: Raleway"><?php echo $config['title']; ?></h1>
						<h1 style="font-family: Nerko One"><?php
echo date("D, F j, Y, g:i a");
						?></h1>
					</div>
					<nav class="header_top_menu">
						<ul>
							<li><a href="/" style="font-family: Roboto Slab">Главная</a></li>
							<li><a href="/pages/about_me.php" style="font-family: Roboto Slab ">Обо мне</a></li>
							<li><a href="<?php
echo $config['vk_url']
							?>" target="_blank" style="font-family: Roboto Slab">Я Вконтакте</a></li>
							<li><a href="/pages/stati.php" style="font-family: Roboto Slab "> Статьи</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="header_bottom">
				<div class="container">
					<nav>
					</nav>
				</div>
			</div>
		</header>
<?php
echo "<hr>";
$articles = mysqli_query($connection, "SELECT * FROM `articles`");
while ($art = mysqli_fetch_assoc($articles) ) {
	?>
	<article class="article">
		<div class="article_image" style="background-image: url(../media/year.jpg);"></div>
		<div class="article_info">
			<div class="article_info_meta">
				</div>
				<div class="article_info_preview"><?php
				echo $art['title'];
				echo $art['text'];
				?></div>
				</div>
			</div>
		</article>
	</div>
</body>
</html>
