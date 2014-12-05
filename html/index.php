<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NUIT DE L'INFO</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <script src="http://tympanus.net/Development/Arctext/js/jquery.arctext.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="ni-background">
    <div class="ni-head">
      <h1>NUIT DE L'INFO</h1>
    </div>
  <div class="ni-navbar" >
  <div class="container">
    <div class="row">
      <div class="f14 text-center col-md-4 col-xs-6">
        J'ai des <span class="ni-key">S</span>ymptomes !
      </div>
      <div class="f14 col-md-4 col-xs-6">
        <p class="text-center"> <img src="css/oms-logo.jpg"> </p>
      </div>
      <div class="f14 text-center col-md-4 col-xs-6">
        Je veux me <span class="ni-key">P</span>remunir !
      </div>
    </div>
  </div>
  </div>
  <div id="How">

  </div>
  <div id="Prem">
    <img src="css/premunir.jpg" alt="se premunir" class="img-thumbnail">
  </div>
  <div id="Symp" class="container">
    <div class="row  text-center">
  <img src="css/symp.jpg" alt="se premunir" class="img-thumbnail ">
  </div>
    <h5 class="text-center f13">Quel est le traitement général de la maladie ?</h5>
<p class="text-center f13">
Pour la majorité des malades pris en charge, l'équipe médicale tente de lutter contre les symptômes de la fièvre hémorragique. En s'attaquant à la fièvre et à la diarrhée et en réhydratant le patient, notamment par le biais de transfusions sanguines, l'organisme du patient est en mesure de développer une réponse immunitaire.

« Le traitement des symptômes est le seul qu'on maîtrise, et qui ne produit pas d'effet secondaire », analyse Sylvain Baize, directeur du centre national de référence des fièvres hémorragiques de l'Institut Pasteur.

Mais, malgré ces soins, la maladie reste mortelle. Pour l'épidémie actuelle qui ravage l'Afrique de l'Ouest, une personne contaminée sur deux meurt. En moyenne, le taux de létalité de la fièvre Ebola varie entre 25 % et 90 %, en fonction notamment de la prise en charge des malades, mais également de la souche du virus. Si l'épidémie actuelle est provoquée par la souche « Zaïre », il en existe cinq différentes, qui ont un taux de mortalité plus ou moins important.

En savoir plus sur http://www.lemonde.fr/les-decodeurs/article/2014/08/22/guerir-d-ebola-et-apres_4475307_4355770.html#FZcZ0slAsQ6tTh3c.99
  </p>
  </div>

<div class="footer ni-navbar">


</div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js">
  </script> 
  <script type="text/javascript">
  $(window).load(function() {
    $('body').keypress(function(e){
      if (String.fromCharCode( e.which ) == "p")
      {
        $("#Prem").css("display", "block");
        $("#Symp").css("display", "none");
        $("#How").css("display", "none");
      }
    });

     $('body').keypress(function(e){
      if (String.fromCharCode( e.which ) == "s")
      {
        $("#Prem").css("display", "none");
        $("#Symp").css("display", "block");
        $("#How").css("display", "none");
      }
    });
  }


  );
  </script>
  </body>
</html


