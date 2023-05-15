<!doctype html>
<html>
<head>
	<!--CSS linkek:-->
	<title>Gróf-3Dnyomda</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="styles.css"/>
	<link rel="stylesheet" href="gallery.css"/>
	<script src ="script.js"></script>
	<!-- meta adatok-->
	<meta charset="UTF=8">
</head>
<body>
	<header id="fej" width="100%">
		<img class ="img-fluid"src="képek/fejlec2.jpg" width="100%" height="90%">
	</header>
	<!-- navigációs menü-->
	<nav id="navmagyar" class="navbar sticky-top navbar-expand-sm">
		<ul class="navbar-nav col-sm">
		<li class="nav-item"><a class="nav-link" href="kezdőlap.php">Kezdőlap</li></a>
		<li class="nav-item"><a class="nav-link" href="gépleírás.php">Nyomtatók</li></a>
		<li class="nav-item"><a class="nav-link" href="galéria.php">Galéria</li></a>
		<li class="nav-item"><a class="nav-link" href="webshop.php">Bolt</li></a>
		<li class="nav-item"><a class="nav-link" href="kapcsolat.php">Kapcsolat</li></a>
		</ul>
	</nav>
	<nav id="navangol" class="navbar sticky-top navbar-expand-sm">
		<ul class="navbar-nav col-sm">
		<li class="nav-item"><a class="nav-link" href="kezdőlap.php">Home</li></a>
		<li class="nav-item"><a class="nav-link" href="gépleírás.php">Printers</li></a>
		<li class="nav-item"><a class="nav-link" href="galéria.php">Galery</li></a>
		<li class="nav-item"><a class="nav-link" href="webshop.php">Shop</li></a>
		</ul>
	</nav>
	<a href="webshop.php"><button type="button">vissza</button></a>
	<div>
	<img class ="img-fluid"src="képek/termek3.png" width="20%">
	</div>
	<ul>
	<li>Termek neve:</li>
	<li>Szín:</li>
	<li>Anyag:</li>
	<li>Méret:</li>
	<li>Termék ára:</li>
	<li>Termek azonosítója</li>
	</ul>
	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="grof3dnyomda";
		
		$conn=new mysqli($servername,$username, $password, $dbname);
		
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		$sql="Select termek_azon,nev,szin,anyag,meret,gyartasi_ar From termek where termek_azon='grof0001'";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
			echo"<ul>";
			while($row=mysqli_fetch_assoc($result))
			{
				echo"<li>".$row["nev"]."</li><li>".$row["szin"]."</li><li>".$row["anyag"]."</li><li>".$row["meret"]."</li><li>".$row["gyartasi_ar"]."</li><li>".$row["termek_azon"]."</li>";
			}
			echo"</ul>";
		}
		
	?>
</body>