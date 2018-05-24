<?php
include "class.php";
?>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>BACK TO THE FUTURE</title>
</head>
<body>
  <p>

    <?php $Doc = new TimeTravel("31-12-1985", "");?>
    Suite à une expérience ratée avec sa nouvelle machine,
    le 31 décembre 1985, Doc s'est retrouvé projeté dans le temps.
    D'après les notes qu'il a laissées, Marty en déduit qu'il a été projeté
    le <?php $Doc->findDate("PT1000000000S")?>.

    </br>

    <?php $Marty= new TimeTravel("23-04-1954 10:35:20", "31-12-1985 06:35:18");
    $date1= "23-04-1954 06:35";
    $date2= "31-12-1985 06:35";
    echo $Marty->getTravelInfo($date1,$date2)?> qui sépare Marty et Doc.
    </br>Marty a retrouvé Doc mal en point.
    Il faut le ramener au plus vite à notre époque pour le soigner.
    Mais le réservoir de la Dolorean est endommagé.
    Après une rapide expertise, Doc estimes que
    la voiture ne peut plus faire des bonds dans le temps que, au mieux,
    d’1 mois plus 1 semaine et 1 jour.
    Il faudra refaire le plein de combustible à chaqu'une des date suivantes:
    <?php $Marty->backToFutureStepByStep("P1M8D");?>
  </p>

</body>
</html>
