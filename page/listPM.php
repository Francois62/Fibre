<?php include_once('connexion.php');


$res = mysqli_query($cnx,"SELECT USERREFERE, STATUT, ADRESSE1 FROM pm ORDER BY USERREFERE");
$data = mysqli_fetch_assoc($res);

$commune=isset($_POST['communes']) ? $_POST['communes'] : '';
$statut=isset($_POST['statut']) ? $_POST['statut'] : '';
 $id= $_GET['modif'];

  ?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Changement du statut PM"</title>

     <!-- Bootstrap Core CSS -->
     <link href="..\css\bootstrap.min.css" rel="stylesheet">
     <!-- Custom CSS -->
     <link href="..\css\main.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="..\font-awesome\css\font-awesome.min.css" rel="stylesheet" type="text/css">

   </head>
   <style>
   @@font-face {
     src:url('fonts/prototype.ttf');
     font-family: 'prototype';
   }
   .welcome{
     border-radius: 2%;
   }
   body{
     overflow: auto;
     overflow-x: hidden;
     /*font-size: 20px;*/
     background-repeat: no-repeat;
     /*background-image:url('../images/yellow.jpg');
     background-size: cover;
     background-repeat:repeat-y;*/
     background-color: rgba(0, 144, 255, 0.4);
     font-family: 'prototype';
   }
   a{
       color: rgba(10, 120, 200, 1)!important;
   }
   a:hover{
       color: skyblue !important;
   }
    .navbar{
      color: rgba(10, 120, 200, 1)!important;
      border: none;
      display: inline-block;
      padding-left: 5%;
       background-color: rgba(46, 138, 191, 0.6)!important;
     }

   table{
     overflow: auto;
     display: block;
      width: 70%;
      margin-left: 16%;
      border: solid black 1px;
      background-color: rgba(46, 138, 205, 0.5);
      overflow: hidden;
    }
    td{
      height:70px;
      padding: 1%;
      /*border: solid grey 1px;
      border-radius: 2%;*/
    }
    th{
      width:auto;
      border:solid grey 1px;
      background-color: lightblue;
    }
    tr{
      height:70px;
      border-radius: 2%;
      border: solid grey 1px;
    }
    tr:hover{
      background-color: skyblue;
    }
    .nav{
       padding-left: 10%;
  display: inline-flex;
      }
      .goto{
        position:fixed;
        float:right;
        padding-bottom: 2%;
        bottom: 0;
        right:0;
      }
      .logo{
        padding-top: 1%;
        padding-left: 2%;
        top:0;
        left:0;
      }
      .col{
        width:20%;
      }
      /*#modif{
        width:100px;
  	background:#fafafa;
  	box-shadow:2px 2px 8px #aaa;
  	font:bold 13px Arial;
  	border-radius:50%;
    margin-right: 5%;
  	/*color:#555;*/
        /*background-color: rgba(46, 143, 205, 0.8);*/


      .change:hover{
        background-color: white;
      }
      .fix{
        display: inline-block;
      }
      .fixlink{
          display: inline-block;
        padding-left:40px;
      }
      .fixNavigation{
 z-index: 9999;
 position: fixed;
 padding-top: 4%;
top:0;
 border:none;
 width:65%;
 /* Mise en forme */ /* <-- Largeur de votre site */
 }
 .fixfilterNavigation{
z-index: 9999;
position: fixed;
top:3;
padding-top: 10%;
border:none;
padding-left: 1%;
/* Mise en forme */ /* <-- Largeur de votre site */
}
 .filter{
   padding-top: 3%;
 }
 label{
   margin-left: 3%;
   font-size: 20px;
   color: rgba(10, 120, 200, 1)!important;
 }

        </style>
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
           <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
         </head>
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
                     <a class="navbar-brand fixlink " href="../index.php">Retour à la page d'accueil</a>
                 </div>
                 <!-- Right -->
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-right">
                       <li>
                            <a  class="btn" href="update.php" data-toggle="modal" data-target="#myModal" >Mettre à jour la base de donnée</a>
                       </li>
                     </ul>
                 </div>
                 <!-- /.navbar-collapse -->
             </div>
             <!-- /.container -->
         </nav>
         <form action="listPM.php" class="filter"name="sentMessage" id="contactForm"  method="POST">
           <div class="control-group form-group">
               <div class="controls">
                   <label>Filtre par Communes:</label>
                   <select name="communes">
                     <option value=""></option>
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
                     <option value="ST MARTIN BOULOGNE">ST MARTIN BOULOGNE</option>
                     <option value="OUTREAU">OUTREAU</option>
                     <option value="EQUIHEN PLAGE">EQUIHEN PLAGE</option>
                     <option value="SAINT LEONARD">SAINT LEONARD</option>
                     <option value="ECHINGHEN">ECHINGHEN</option>
                     <option value="HESDIN L ABBEE">HESDIN L ABBEE</option>
                     <option value="HESDIGNEUL LES BOULOGNE">HESDIGNEUL LES BOULOGNE</option>
                     <option value="NEUFCHATEL HARDELOT">NEUFCHATEL HARDELOT</option>
                   </select>
                    <!-- <button type="submit" id="search" name="search" class="btn btn-primary searchcom">Rechercher</button> -->
                   <br>
               </div>

                 <!-- <form action="listPM.php" class="filter"name="sentMessage" id="contactForm"  method="POST"> -->
                   <div class="control-group form-group">
                       <div class="controls">
                   <label>Filtre par Statut:</label>
                   <select name="statut">
                     <option value=""></option>
                     <option value="non raccordée">non raccordée</option>
                     <option value="raccordée non commercialisable">raccordée non commercialisable</option>
                     <option value="en phase J3M">en phase J3M</option>
                     <option value="commercialisable">commercialisable</option>
                   </select>

                 </div>

               </div>
                <button type="submit" id="search" name="search" class="btn btn-primary searchcom">Rechercher</button>

                 </div>
                     </form>
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
          <div class='row'>"
          <?php
          $filtercommune = mysqli_query($cnx,"SELECT USERREFERE, STATUT, ADRESSE1 FROM pm WHERE ADRESSE1 LIKE '%$commune%' ORDER BY USERREFERE ");
          $resfiltercommune = mysqli_fetch_assoc($filtercommune);

          $filterstatut = mysqli_query($cnx,"SELECT USERREFERE, STATUT, ADRESSE1 FROM pm WHERE STATUT Like '%$statut%' ORDER BY USERREFERE ");
          $resfilterstatut = mysqli_fetch_assoc($filterstatut);

          if($commune!="" && $statut!=""){
            $filterstatutall = mysqli_query($cnx,"SELECT USERREFERE, STATUT, ADRESSE1 FROM pm WHERE STATUT='$statut' AND ADRESSE1 LIKE '%$commune%' ORDER BY USERREFERE ");
            $resfilterstatutall = mysqli_fetch_assoc($filterstatutall);
            var_dump($resfilterstatutall);
          echo "<div class='text-center col-xs-12 col-md-12 col-lg-12'>";
           echo "<table class='text-center'>";
           echo "<tr class='help'>";
           echo "<th class='text-center col'>Liste des Points de Mutualisation</th>";
           echo "<th class='text-center col'>Statut actuel</th>";
           echo "<th class='text-center col '>Commune</th>";
           echo "<th class='text-center col '>Statut non raccordée</th>";
           echo "<th class='text-center col '>Statut raccordée non commercialisable</th>";
           echo "<th class='text-center col '>Statut en phase J3M</th>";
           echo "<th class='text-center col '>Statut commercialisable</th>";
           echo "</tr>";
          //  foreach ($resfilterstatut as $key => $value) {
          //     // echo "<th class='text-center'>Statut actuel</th>";
          //     // echo "<th class='text-center'>Commune</th>";
          //     // echo "<tr></tr>";
          //   }
           mysqli_data_seek($filterstatutall, 0);
              while ($resfilterstatutall = mysqli_fetch_assoc($filterstatutall)){
                echo "<tr>";
                foreach ($resfilterstatutall as $key => $value) {
                    echo "<td class='col'>".$value."</td>";
                  }
                echo '<form class="text-center" action="modifsave.php?modif='.$resfilterstatutall['USERREFERE'].'" method="post">';
                echo '<td><input class=" change btn btn-primary" type="radio" id="nonraccordée" name="select" value="non raccordee"></button></td>';
                echo '<td><input class=" change btn btn-primary" type="radio" id="raccordéenoncom" name="select" value="raccordee non commercialisable"></button></td>';
                echo '<td><input class=" change btn btn-primary" type="radio" id="j3m" name="select" value="en phase J3M"></button></td>';
                echo '<td><input class=" change btn btn-primary" type="radio" id="commercialisable" name="select" value="commercialisable"></button></td>';
                echo '<td><input class=" change btn btn-primary" type="submit" id="valid" name="valider" ></button></td>';
                echo '</form>';

                  echo "</tr>";

                   echo "</div>";
                }
}
          if($commune=="" && $statut==""){
        echo "<div class='text-center col-xs-12 col-md-12 col-lg-12'>";
         echo "<table class='text-center'>";
         echo "<tr class='help'>";
         echo "<th class='text-center col'>Liste des Points de Mutualisation</th>";
         echo "<th class='text-center col'>Statut actuel</th>";
         echo "<th class='text-center col '>Commune</th>";
         echo "<th class='text-center col '>Statut non raccordée</th>";
         echo "<th class='text-center col '>Statut raccordée non commercialisable</th>";
         echo "<th class='text-center col '>Statut en phase J3M</th>";
         echo "<th class='text-center col '>Statut commercialisable</th>";
         echo "</tr>";
        //  foreach ($data as $key => $value) {
        //   //  echo "<th class='text-center'>Statut actuel</th>";
        //   //  echo "<th class='text-center'>Commune</th>";
        //     //echo "<tr></tr>";
        //   }
         mysqli_data_seek($res, 0);
            while ($data = mysqli_fetch_assoc($res)){
              echo "<tr>";
              foreach ($data as $key => $value) {
                  echo "<td class='col'>".$value."</td>";
                }
              echo '<form class="text-center" action="modifsave.php?modif='.$data['USERREFERE'].'" method="post">';
              echo '<td><input class=" change btn btn-primary" type="radio" id="nonraccordée" name="select" value="non raccordee"></button></td>';
              echo '<td><input class=" change btn btn-primary" type="radio" id="raccordéenoncom" name="select" value="raccordee non commercialisable"></button></td>';
              echo '<td><input class=" change btn btn-primary" type="radio" id="j3m" name="select" value="en phase J3M"></button></td>';
              echo '<td><input class=" change btn btn-primary" type="radio" id="commercialisable" name="select" value="commercialisable"></button></td>';
              echo '<td><input class=" change btn btn-primary" type="submit" id="valid" name="valider" ></button></td>';
              echo '</form>';

                echo "</tr>";

                 echo "</div>";
              }
            }
            if($commune!="" && $statut==""){
              echo "<div class='text-center col-xs-12 col-md-12 col-lg-12'>";
               echo "<table class='text-center'>";
               echo "<tr class='help'>";
               echo "<th class='text-center col'>Liste des Points de Mutualisation</th>";
               echo "<th class='text-center col'>Statut actuel</th>";
               echo "<th class='text-center col '>Commune</th>";
               echo "<th class='text-center col '>Statut non raccordée</th>";
               echo "<th class='text-center col '>Statut raccordée non commercialisable</th>";
               echo "<th class='text-center col '>Statut en phase J3M</th>";
               echo "<th class='text-center col '>Statut commercialisable</th>";
               echo "</tr>";
              //  foreach ($resfiltercommune as $key => $value) {
              //   //  echo "<th class='text-center'>Statut actuel</th>";
              //   //  echo "<th class='text-center'>Commune</th>";
              //     //echo "<tr></tr>";
              //   }
               mysqli_data_seek($filtercommune, 0);
                  while ($resfiltercommune = mysqli_fetch_assoc($filtercommune)){
                    echo "<tr>";
                    foreach ($resfiltercommune as $key => $value) {
                        echo "<td class='col'>".$value."</td>";
                      }
                    echo '<form class="text-center" action="modifsave.php?modif='.$resfiltercommune['USERREFERE'].'" method="post">';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="nonraccordée" name="select" value="non raccordee"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="raccordéenoncom" name="select" value="raccordee non commercialisable"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="j3m" name="select" value="en phase J3M"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="commercialisable" name="select" value="commercialisable"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="submit" id="valid" name="valider" ></button></td>';
                    echo '</form>';

                      echo "</tr>";

                       echo "</div>";
                    }
            }
            elseif($statut!="" && $commune==""){
              if($statut==="commercialisable"){
                $filterstatut = mysqli_query($cnx,"SELECT USERREFERE, STATUT, ADRESSE1 FROM pm WHERE STATUT = 'commercialisable' ORDER BY USERREFERE ");
                $resfilterstatut = mysqli_fetch_assoc($filterstatut);
              }
              echo "<div class='text-center col-xs-12 col-md-12 col-lg-12'>";
               echo "<table class='text-center'>";
               echo "<tr class='help'>";
               echo "<th class='text-center col'>Liste des Points de Mutualisation</th>";
               echo "<th class='text-center col'>Statut actuel</th>";
               echo "<th class='text-center col '>Commune</th>";
               echo "<th class='text-center col '>Statut non raccordée</th>";
               echo "<th class='text-center col '>Statut raccordée non commercialisable</th>";
               echo "<th class='text-center col '>Statut en phase J3M</th>";
               echo "<th class='text-center col '>Statut commercialisable</th>";
               echo "</tr>";
              //  foreach ($resfilterstatut as $key => $value) {
              //     // echo "<th class='text-center'>Statut actuel</th>";
              //     // echo "<th class='text-center'>Commune</th>";
              //     // echo "<tr></tr>";
              //   }
               mysqli_data_seek($filterstatut, 0);
                  while ($resfilterstatut = mysqli_fetch_assoc($filterstatut)){
                    echo "<tr>";
                    foreach ($resfilterstatut as $key => $value) {
                        echo "<td class='col'>".$value."</td>";
                      }
                    echo '<form class="text-center" action="modifsave.php?modif='.$resfilterstatut['USERREFERE'].'" method="post">';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="nonraccordée" name="select" value="non raccordee"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="raccordéenoncom" name="select" value="raccordee non commercialisable"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="j3m" name="select" value="en phase J3M"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="radio" id="commercialisable" name="select" value="commercialisable"></button></td>';
                    echo '<td><input class=" change btn btn-primary" type="submit" id="valid" name="valider" value="'.$id.'"></button></td>';
                    echo '</form>';

                      echo "</tr>";

                       echo "</div>";
                    }
            }
              ?>
              </div>
                <div class="row">
                  <div class=" goto col-md-2">
                    <a href="#" class="js-scrollTo"><i class="fa fa-arrow-circle-o-up fa-3x js-scrollTo" type="submit" class="btn btn-default js-scrollTo" aria-hidden="true"></i></a>
                  </div>
         </div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(function(){
  $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
     if ($(this).scrollTop() > 110) { //si on a défilé de plus de 150px du haut vers le bas
         $('.help').addClass("fixNavigation"); //on ajoute la classe "fixNavigation" à <div id="navigation">
     } else {
     $('.help').removeClass("fixNavigation");//sinon on retire la classe "fixNavigation" à <div id="navigation">
     }
  });
});
$(function(){
  $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
     if ($(this).scrollTop() > 110) { //si on a défilé de plus de 150px du haut vers le bas
         $('.filter').addClass("fixfilterNavigation"); //on ajoute la classe "fixNavigation" à <div id="navigation">
     } else {
     $('.filter').removeClass("fixfilerNavigation");//sinon on retire la classe "fixNavigation" à <div id="navigation">
     }
  });
});
</script>

   <script src="..\js\bootstrap.min.js"></script>
 </body>
</html>
