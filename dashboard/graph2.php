
<?php

$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=basesoutenance;charset=utf8',
    'root',
    ''
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Liam Cariou</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
   <link rel="stylesheet" href="main.php" />

</head>
<body>

<section class="Contenunav">
<div class="titreg">   
 <img class="logonav" src="images/nws.png" alt="">

</div>
<h1 class="titrenavbar"> 5 données sur l'alternance à la NWS</h1>
 <div class="profilcontenu">
<img class="logoprofil" src="images/user.png" alt="">
<a class="nomprofil" href="#">Liam Cariou</a>
</div>

</section>

        <section class="sidebar">
<div class="sidenav">
<a href="index.php">Accueil</a>
  <a href="graph1.php">Taille des structures</a>
  <a href="graph2.php">Statuts des entreprises</a>
  <a href="graph3.php">Secteurs d'activités</a>
  <a href="graph4.php">Localisation</a>
  <a href="graph5.php">Stage ou Alternance</a>
</div>
<div class="contenugraph">

<h2 class="titreaccueill">Statuts des entreprises  </h2>
<canvas id="statueCanvas" aria-label="chart" role="img" class="graph"></canvas>
<br>

<table>
  <tr>
    <td class="r">Entreprise privée</td>
    <td class="r">444</td>
  </tr>

  <tr>
    <td class="b">Association</td>
    <td class="b">35</td>
  </tr>

  <tr>
    <td class="j">Entreprise publique</td>
    <td class="j">20</td>
  </tr>

  <tr>
    <td class="n">Collectivité</td>
    <td class="n">12</td>
  </tr>
  <tr>
    <td class="v">Administration public</td>
    <td class="v">3</td>
  </tr>
  <tr>
    <td class="vi">Etablissement fermé</td>
    <td class="vi">2</td>
  </tr>

</table>

</section>
   <script>
const statueCanvas = document.getElementById("statueCanvas");

const statueChart = new Chart(statueCanvas, {
	type: "bar",
	data: {
		labels: ["Entreprise privée", "Association", "Entreprise public", "Collectivité", "Administration public", "Etablissement fermé" ],
		datasets: [{
			data:[444,35,20,12,3,2],
			backgroundColor: [
                "#E94A34",
			"#00A5A5",
			"#FEC800",
			"black",
            "green",
            "violet"
			
			]
		}]

	}
})

   </script>     
</body>
</html>