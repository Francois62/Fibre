<?php
include_once('connexion.php');

$nonraccordée=isset($_POST['nonraccordée']) ? $_POST['nonraccordée'] : '';
$raccordéenoncom=isset($_POST['raccordéenoncom']) ? $_POST['raccordéenoncom'] : '';
$j3m=isset($_POST['j3m']) ? $_POST['j3m'] : '';
$commercialisable=isset($_POST['commercialisable']) ? $_POST['commercialisable'] : '';

if($nonraccordée==1){
  $changestat=mysqli_query($cnx,"UPDATE pm SET STATUT='non raccordée' ");
}
if($raccordéenoncom==1){
  $changestat2=mysqli_query($cnx,"UPDATE pm SET STATUT='raccordée non commercialisable'");
}
if($j3m==1){
  $changestat3=mysqli_query($cnx,"UPDATE pm SET STATUT='en phase J3M'");
}
if($commercialisable==1){
  $changestat4=mysqli_query($cnx,"UPDATE pm SET STATUT='commercialisable'");
}

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
   src:url('fonts/prototype.ttf');
   font-family: 'prototype';
 }
 body{
   overflow-x: hidden;
   font-size: 20px;
   background-image: url('../images/yellow.jpg');
   background-size: cover;
   background-color:#deeff5;
   font-family: 'prototype';
 }
 a:hover{
     color: white !important;
 }
 a{
     color: rgba(46, 143, 193, 1)!important;
 }
 label{
   color: skyblue;
 }
 .note{
   color:lightgreen;
 }
 .navbar{
    background-color: rgba(46, 138, 191, 0.4);
  }
.newstat{
  width:60%;
  padding-top:4%;
  padding-left: 40%;
}
#search{
  margin-left: 35%;
margin-top:2%;
}
 </style>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
         <!-- Left -->
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="..\index.php">Consultation "déploiement Fibre Optique"</a>
         </div>
         <!-- Right -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right">
                 <li>
                      <a class="btn" href="listPM.php">Liste PM</a>
                 </li>
                 <li>
                 </li>
                 <li>

                 </li>
                 <li>

                 </li>
             </ul>
         </div>
         <!-- /.navbar-collapse -->
     </div>
     <!-- /.container -->
 </nav>
 <body>
<div class="row">
    <!-- Form Column -->
    <div class="newstat col-md-12 ">
        <!-- Contact form -->
        <form  action="modifsave.php" name="sentMessage" id="contactForm"  method="POST">
          <div class="control-group form-group">
              <div class="controls">
                  <label>Entrez le nouveau statut du PM:</label>
                  <p class="note">Statuts possibles: non raccordée, raccordée non commercialisable, en phase J3M ou commercialisable.</P>
                  <input type="text" class="form-control" id="statut" name="statut" required data-validation-required-message="Entrez le nouveau statut.">
                  <button type="submit" id="search" name="search" class="btn btn-primary">Modifier</button>
              </div>
              <?php

             $change= $_GET['modif'];
            echo'<div class="control-group form-group">
                <div class="controls">

                    <input type="hidden" class="form-control" name="id" value="'.$change.'">
                </div>
            </div>';
            ?>
          </div>
        </form>
        </div>
      </div>
      <script src="../js/bootstrap.min.js"></script>
    </body>
    </html>
