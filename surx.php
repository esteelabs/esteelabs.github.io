<html>
<head>
  <title>Cluster SUR | Checking pictures</title>
</head>

<body>
<?php 
	echo '<p><strong>Checking Pictures</strong><br>eg M6JC05</p>'?>

<form action="surx.php" method="post">
SKU <input type="text" name="SKU" maxlength="6"/>
	<input type="submit" />
</form>

<?php
echo 'Imágenes disponibles para ' . htmlspecialchars($_POST["SKU"]) . '<br><br>';

$country = array("cl", "mx", "br", "us","gb");
$vista = array("0","1","2","3","4","5","6","7","8","9","10");

$size = count($country);

echo "<table border=1>";

echo "<tr><th>COUNTRY</th>";

foreach ($vista as $vv) {

	echo "<th>". $vv . "</th>";

}

echo "</tr>";

foreach ($country as $cc) {

	echo "<tr><td>" . $cc . "</td>";

	foreach ($vista as $vv) {

		
		$image = "https://sdcdn.io/mac/" . $cc . "/mac_sku_" . htmlspecialchars($_POST["SKU"]) . "_1x1_" . $vv . ".png?width=150&height=150";
		
  		echo "<td><img src=" . $image . " /></td>";
		
	}
	
	echo "</tr>";

}

echo "</table>";

?>



</body>
</html>
