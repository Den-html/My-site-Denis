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
<html lang='ru'>

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
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<script src="https://apis.google.com/js/platform.js"></script>
<style>
a.main {
  text-decoration: none;
  outline: none;
  display: inline-block;
  margin: 10px 20px;
  padding: 15px 30px;
  overflow: hidden;
  border: 2px solid;
  border-bottom-width: 4px;
  font-family: 'Montserrat', sans-serif;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 2px;
  color: rgba(30,255,188,1);
  background: rgba(255,255,255,1);
  transition: color .3s, background .5s;
}
a.main:hover {
  animation: stripes .75s infinite linear;
  background: linear-gradient(45deg, rgba(30,255,188,1) 25%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 50%, rgba(30,255,188,1) 50%,      rgba(30,255,188,1) 75%, rgba(255,255,255,1) 75%, rgba(255,255,255,1));
  background-size: 10px 10px;
  color: #FF50E5;
}
@keyframes stripes {
  0% {background-position: 0 0;}
  100% {background-position: 50px 0;}
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
							<a href="/" style="font-family: Roboto Slab" class="main">Главная</a>
							<a href="/pages/about_me.php" style="font-family: Roboto Slab " class="main">Обо мне</a>
							<a href="https://vk.com/id613687397" target="_blank" style="font-family: Roboto Slab" class="main">Я Вконтакте</a>
							<a href="../pages/articles.php" style="font-family: Roboto Slab " class="main"> Статьи</a>
							<a href="../pages/ankeres.php" style="font-family: Roboto Slab " class="main">Ссылки</a>
							<div class="g-ytsubscribe" data-channelid="UCxKDrdE1CNgOSHC81cWnchQ" data-layout="full" data-count="default"></div>
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
echo '<hr>';
?>
<p style="font-family: Lobster;"><?php
echo 'Just_Programmer <br>';
echo 'Связь ';
echo 'Мыло: ';
echo 'html.programmer99@gmail.com <br>';
?></p>
<script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5dm2002alxi&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
<!-- RedHelper -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" 
	src="https://web.redhelper.ru/service/main.js?c=123qwerty123">
</script> 
<!--/Redhelper -->
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="padded" data-lang="ru" data-ef_voting="push" data-white_label="true" data-identifier="item_1" data-i18n_dislike="Не нравится"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</body>

</html>