<?php include_once('connexion.php');

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
     <link href="../css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="../css/main.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   </head>
<style>
@@font-face {
  src:url('../fonts/prototype.ttf');
  font-family: 'prototype';
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
  margin-right: -3%;
  overflow-x: hidden;
  font-family: 'prototype';
  color: skyblue;
  background-image: url('../images/fibre.jpg');
  background-size: cover;
  background-color:#d6ebf2;
}
a{
    color:#87CEFA !important;
}
.navbar{
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
  width: 66%;
  padding-left: 30%;
  padding-bottom: 2%;
  padding-top: 2%;
}
.btn{
  margin-left: 20%;
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
.update{
  padding: 2%;
  margin-right: 10%;
}
.launch{
  margin-left: 40%;
}
</style>

   <body>
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container fix">
           <a class="logo navbar-header navbar-left"><img class="img-responsive" src="..\images\cab.jpg" width="50px"></a>
           <!-- Left -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand fixlink" href="../index.php">Retour à la page d'accueil</a>
           </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                 <li>
                   <a class="btn" href="searchcommune.php">Recherche par Commune et Statut</a>
                 </li>
                   <li>
                        <a class="btn" href="listPM.php">Liste PM</a>
                   </li>
                   <li>
                      <a  class="btn" href="update.php" data-toggle="modal" data-target="#myModal" >Mettre à jour la base de donnée</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

     <div class="row">
     <div class=' pres col-md-12'>
       <img class='welcome img-responsive' src="..\images\logo.jpg">
     </div>
   </div>
   <div id="myModal" class="modal fade" role="dialog">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>

               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>
     <div class='col-md-9 formulaire'>
     <form action="list.php" name="sentMessage" id="contactForm"  method="POST">
         <div class="control-group form-group">
             <div class="controls">
               <h2>Adresse:</h2>
               <p>Ville:</p>
                                <select name="ville">
                                <option value="BOULOGNE SUR MER">BOULOGNE SUR MER</option>
                                <option value="LE PORTEL">LE PORTEL</option>
                                <option value="WIMEREUX">WIMEREUX</option>
                                <option value="PITTEFAUX">PITTEFAUX</option>
                                <option value="PERNES LEZ BOULOGNE">PERNES-LEZ-BOULOGNE</option>
                                <option value="WIMILLE">WIMILLE</option>
                                <option value="CONDETTE">CONDETTE</option>
                                <option value="CONTEVILLE LEZ BOULOGNE">CONTEVILLE LEZ BOULOGNE</option>
                                <option value="LA CAPELLE LES BOULOGNE">LA CAPELLE LES BOULOGNE</option>
                                <option value="ISQUES">ISQUES</option>
                                <option value="ST ETIENNE AU MONT">ST ETIENNE AU MONT</option>
                                <option value="BAINCTHUN">BAINCTHUN</option>
                                <option value="SAINT MARTIN BOULOGNE">SAINT MARTIN BOULOGNE</option>
                                <option value="ST MARTIN BOULOGNE">ST MARTIN BOULOGNE</option>
                                <option value="OUTREAU">OUTREAU</option>
                                <option value="EQUIHEN PLAGE">EQUIHEN PLAGE</option>
                                <option value="SAINT LEONARD">SAINT LEONARD</option>
                                <option value="ECHINGHEN">ECHINGHEN</option>
                                <option value="HESDIN L ABBEE">HESDIN L ABBEE</option>
                                <option value="HESDIGNEUL LES BOULOGNE">HESDIGNEUL LES BOULOGNE</option>
                                <option value="NEUFCHATEL HARDELOT">NEUFCHATEL HARDELOT</option>
                              </select>
                 <p>Rue:</p><input type="text" class="form-control" id="rue" name="rue" autocomplete="off" value="" required="" data-validation-required-message="Veuillez entrez une rue." onblur=""/>
                 <p class="help-block"></p>
                 <br>
                 <p>N°:</p><input type="text" class="form-control " id="num" name="num" autocomplete="off" onblur="" required="" data-validation-required-message="Veuillez entrez un numéros."  />
                 <p class="help-block"></p>
                 <br>
                 <div id="callnum"></div><br>
                             <div class="control-group form-group">       <!-- <div id="callrue"></div><br>
                 <p>Code Postal:</p><input type="text" class="form-control" id="code" name="code"  autocomplete="off" value="" required="" data-validation-required-message="Veuillez entrez un code postal." onblur=""/>
                 <p class="help-block"></p> -->
                 <!-- <br> -->
                 <div id="callcode"></div><br>
    <!-- <input type="text" class="form-control" id="ville" name="ville" autocomplete="off" value="" required="" data-validation-required-message="Veuillez entrez une ville ." onblur=""/>                             -->
                 <p class="help-block"></p>
                 <br>
                 <div id="callville"></div><br>
         <button type="submit" id="search" name="search" class="btn btn-primary launch" onclick="verif()">Rechercher</button>
          </form>
       </div>
     </div>
   </div>
 </div>
       <!-- <form enctype="multipart/form-data" action="page/listPM.php" name="sentMessage" id="contactForm" novalidate method="POST"> -->
         <!-- <div class="controls">
             <label>Liste adresses PM:</label>
                   <! <a class="btn" href="page/listPM.php"></a> -->
             <!-- <p class="help-block"></p>
         </div> -->
       <!-- </form> -->
       <div class="row">
       </div>
       <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
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
  }
  else {
      document.getElementById('callnum').innerHTML = "verifiez la saisie de votre numéros de rue";
  }
  if (nameok) {
      document.getElementById('callrue').innerHTML = "votre rue est bien prise en compte";
  }
  else {
      document.getElementById('callrue').innerHTML = "verifiez la saisie de votre rue";
  }
  if (lastnameok) {
      document.getElementById('callcode').innerHTML = "votre code postal est bien pris en compte";
  }
  else {
      document.getElementById('callcode').innerHTML = "verifiez la saisie de votre code postal";
  }
  if (phoneok) {
      document.getElementById('callville').innerHTML = "votre ville est bien pris en compte";
  }
  else {
      document.getElementById('callville').innerHTML = "verifiez la saisie de votre ville";
  }
}
</script>
<script src="../js/bootstrap.min.js"></script>

       </body>
       </html>
