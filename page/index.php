<?php include_once('page/connexion.php');

  ?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Consultation "déploiement Fibre Optique"</title>

     <!-- Bootstrap Core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="css/main.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="font-awesome\css\font-awesome.min.css" rel="stylesheet" type="text/css">
   </head>
<style>
@@font-face {
  src:url('fonts/prototype.ttf');
  font-family: 'prototype';
}
@@font-face {
  src:url('fonts/BirdsofParadise.ttf');
  font-family: 'birds';
}
.pres{
  padding-left: 20%;
padding-top: 2%;
}
a:hover{
    color: white !important;
}
select{
  width:30%;
  color: rgba(46, 138, 175, 1);
}
body{

  opacity: 0.9;
  margin-right: -3%;
  overflow-x: hidden;
  color: skyblue;
  background-image: url('images/yellow.jpg');
  background-size: cover;
  background-color:#d6ebf2;
}
a{

    color:#87CEFA !important;
}
.navbar{
  font-family: 'prototype';
  padding-right: 5%;
  /*background-image: url('images/fibre1.jpg');
  background-size: cover;*/
  background-color: rgba(46, 138, 191, 0.4);


}
input:hover{
  border: skyblue 1px;
}
.welcome{
  width: 30%;
  margin-left: 20%;
  border-radius: 1%;
}
.formulaire{
  text-align: justify;
  width: 70%;
  padding-left: 25%;
  padding-bottom: 2%;
  padding-top: 2%;
}
.searchcom{
  margin-right: 20%;
}
.fix{
  display: inline-block;
}
.fixlink{
  padding-left: 50px;
}
.logo{
  padding: 5px;
}
p{
  font-size: 16px;
padding-left: 8%;
  text-align: justify;
}
p:hover{
  color:white;
}
.presentation{
    font-family: 'prototype';
  border-radius: 6%;
  margin-left: 18%;
  width: 60%;
  border: transparent;
    color: lightblue!important;
  padding-right: 2%;
  margin-top: 2%;
    background-color: rgba(0, 114, 255, 0.6);
  /*border: solid skyblue 1px;*/
}
h1{
  font-family: 'birds';
  color: lightgreen;
}
</style>
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container fix">
           <a class="logo navbar-header navbar-left"><img class="img-responsive" src="images\cab.jpg" width="50px"></a>
           <!-- Left -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand fixlink">Consultation "déploiement Fibre Optique"</a>
           </div>
           <!-- Right -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                   <li>
                     <a class="btn" href="page\searchcommune.php">Recherche par Commune et Statut</a>
                   </li>
                   <li>
                     <a class="btn" href="page\searchstatut.php">Recherche par Adresse</a>
                   </li>
                   <li>
                        <a class="btn" href="page\listPM.php">Liste PM</a>

                   </li>
               </ul>
           </div>
           <!-- /.navbar-collapse -->
       </div>
       <!-- /.container -->
   </nav>



   <body>
     <div class="row">
     <div class=' pres col-md-12'>
       <img class='welcome img-responsive' src="images\logo.jpg">
     </div>
   </div>
     <div class='presentation col-md-12'>
       <h1 class="text-center">Bienvenue sur l'outil de recherche des adresses desservies par la fibre optique</h1><br>
       <p>- La barre de navigation située en haut de l'écran permet d'accéder aux différents formulaires de recherche.</p><br>
       <p>- Le lien "Recherche par Communes" est utilisé pour exécuter une recherche de l'ensemble des adresses de particuliers ou d'entreprises en fonction d'une commune et d'un statut sélectionnée.</p><br>
       <p>- Le lien "Recherche par Adresses" est utilisé pour exécuter une recherche à partir d'un formulaire où l'utilisateur entre l'adresse manuellement pour afficher le statut du Point de Mutualisation associé.</p><br>
       <p>- Le lien "Liste PM" amène l'utilisateur à l'ensemble des PM sous forme de liste où il pourra modifier le statut qui lui est associé.</p><br>
       <p>- Un lien permettant la mise à jour de la base de donnée est accessible sur chaque page dans la barre de navigation sauf sur celle sur laquelle vous vous situez pour lire ces informations.</p>
       <p>- Note: pour une meilleur visibilité il est conseillé d'utiliser le  navigateur chrome.</p><!-- <form enctype="multipart/form-data" action="page/listPM.php" name="sentMessage" id="contactForm" novalidate method="POST"> -->
         <!-- <div class="controls">
             <label>Liste adresses PM:</label>
                   <! <a class="btn" href="page/listPM.php"></a> -->
             <!-- <p class="help-block"></p>
         </div> -->
       <!-- </form> -->
</div>
<script type="text/javascript">
function verif(){
  var num=document.getElementById('num');
  var verifnum="#[0-9]#";
  var rue=document.getElementById('rue');
  var verifrue="#^rue#";
  var code=document.getElementById('code');
   var verifcode="#[0-9]#";
  var ville=document.getElementById('ville');
  var verifville=/^[a-zA-Z]+$/;
  var commune=document.getElementById('commune');

  var numok = verifnum.test(num.value);
  var rueok = verifrue.test(rue.value);
  var codeok = verifcode.test(code.value);
  var villeok = verifville.test(ville.value);
  var communeok = verifcommune.test(commune.value);

  if (document.sentMessage.num.value == "") {
      document.getElementById('callnum').innerHTML = "Veuillez entrer un numéros de rue";
      valid = false;
  }
  if (document.sentMessage.rue.value == "") {
      document.getElementById('callrue').innerHTML = "Veuillez entrer un nom de rue";
      valid = false;
  }
  if (document.sentMessage.code.value == "") {
      document.getElementById('callcode').innerHTML = "Veuillez entrer un code postal";
      valid = false;
  }
  if (document.sentMessage.ville.value == "") {
      document.getElementById('callville').innerHTML = "Veuillez entrer un nom de ville";
      valid = false;
  }

  if (document.sentMessage.commune.value == "") {
      document.getElementById('callcommune').innerHTML = "Veuillez entrer un nom de commune";
      valid = false;
  }
  if (numok) {
      document.getElementById('callnum').innerHTML = "votre numéros de rue est bien pris en compte";
  } else {
      document.getElementById('callnum').innerHTML = "verifiez la saisie de votre numéros de rue";
  }
  if (nameok) {
      document.getElementById('callrue').innerHTML = "votre rue est bien prise en compte";
  } else {
      document.getElementById('callrue').innerHTML = "verifiez la saisie de votre rue";
  }
  if (lastnameok) {
      document.getElementById('callcode').innerHTML = "votre code postal est bien pris en compte";
  } else {
      document.getElementById('callcode').innerHTML = "verifiez la saisie de votre code postal";
  }
  if (phoneok) {
      document.getElementById('callville').innerHTML = "votre ville est bien pris en compte";
  } else {
      document.getElementById('callville').innerHTML = "verifiez la saisie de votre ville";
  }
}
</script>
<script src="js/bootstrap.min.js"></script>
       </body>
       </html>
