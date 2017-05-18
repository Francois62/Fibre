<?php include_once('connexion.php');

$num=isset($_POST['num']) ? $_POST['num'] : '';
$rue=isset($_POST['rue']) ? $_POST['rue'] : '';
$code=isset($_POST['code']) ? $_POST['code'] : '';
$ville=isset($_POST['ville']) ? $_POST['ville'] : '';


$num=strtoupper($num);
$rue=strtoupper($rue);
$code=strtoupper($code);
$ville=strtoupper($ville);

$adresse=mysqli_query($cnx,"SELECT ADRESSE1 FROM pbositesverticaux WHERE
  ADRESSE1 LIKE '%$num%' AND
  ADRESSE1 LIKE '%$rue%' AND
  ADRESSE1 LIKE '%$ville%' " );
$adresseres=mysqli_fetch_assoc($adresse);


// echo $adresseres['ADRESSE1'];

$res1 = mysqli_query($cnx,"SELECT * FROM pbositesverticaux ");
$data1 = mysqli_fetch_assoc($res1);
$res = mysqli_query($cnx,"SELECT * FROM pm ");
$data = mysqli_fetch_assoc($res);

$refe=mysqli_query($cnx,"SELECT USERREFERE FROM pbositesverticaux
  WHERE ADRESSE1='".$adresseres['ADRESSE1']."'");
  $referes=mysqli_fetch_array($refe);

// $referes=substr($referes[0], 0, 3);

$town=mysqli_query($cnx,"SELECT USERREFERE FROM pm WHERE USERREFERE LIKE 'PM".substr($referes[0], 0, 3)."'" );
$restown=mysqli_fetch_assoc($town);

$statut = mysqli_query($cnx,"SELECT STATUT FROM pm WHERE USERREFERE LIKE 'PM".substr($referes[0], 0, 3)."'");
$stat=mysqli_fetch_array($statut);
// var_dump($restown);

if($num!="" && $rue!="" && $ville!="" && $stat['STATUT']!=""){
  echo '<p class="text-center stat">Le '.$restown['USERREFERE'].' a pour statut '.$stat['STATUT'].'</p>';
}
elseif($num!="" && $rue!="" && $ville!=""){
  echo '<p class="text-center stat">Ce PM est non raccordable</p>';
}

//formulaire searchcommune

$commune=isset($_POST['communes']) ? $_POST['communes'] : '';

$commune=strtoupper($commune);


$statutinput=isset($_POST['statut']) ? $_POST['statut'] : '';

echo $commune;
if($commune!="" && $statutinput==""){
  $refstatut = mysqli_query($cnx,"SELECT USERREFERE FROM pm WHERE ADRESSE1 LIKE '%$commune%' ");
  $resstatut=mysqli_fetch_assoc($refstatut);
}
var_dump($resstatut);
if($commune=="" && $statutinput!=""){
  $refstatut = mysqli_query($cnx,"SELECT USERREFERE FROM pm WHERE STATUT LIKE '%$statutinput%' ");
  $resstatut=mysqli_fetch_assoc($refstatut);
}
var_dump($resstatut);
if($commune!="" && $statutinput!=""){
  $refstatut = mysqli_query($cnx,"SELECT USERREFERE FROM pm WHERE ADRESSE1 LIKE '%$commune%' AND STATUT LIKE '%$statutinput%' ");
  $resstatut=mysqli_fetch_assoc($refstatut);
}
// if($statutinput == '')
// $statutinput = 'noStatut';
var_dump($resstatut);
if($commune=="BOULOGNE SUR MER"){
  $refstatut = mysqli_query($cnx,"SELECT USERREFERE FROM pm WHERE STATUT LIKE '%$statutinput%' AND USERREFERE LIKE 'PM169' UNION SELECT USERREFERE FROM pm WHERE STATUT LIKE '%$statutinput%' AND USERREFERE LIKE 'PM119' ");
  $resstatut=mysqli_fetch_assoc($refstatut);

}
if($commune=="CONDETTE" && $resstatut['USERREFERE']=="PM201"){
  $refstatut = mysqli_query($cnx,"SELECT USERREFERE FROM pm WHERE ADRESSE1 LIKE '4 RUE DE VERDUN 62360 CONDETTE' AND ADRESSE1 LIKE '%$commune%' ");
  $resstatut=mysqli_fetch_assoc($refstatut);
}
echo $commune;
var_dump($resstatut);
 //$resstatut['USERREFERE']=="PM128" || $resstatut['USERREFERE']=="PM115" || $resstatut['USERREFERE']=="PM105");

$refstatut2 = mysqli_query($cnx,"SELECT ADRESSE1 FROM pbositesverticaux WHERE USERREFERE LIKE '".substr($resstatut['USERREFERE'], 2, 3)."-PB%' ");
$resstatut2=mysqli_fetch_assoc($refstatut2);
// var_dump($resrefcomm2);
//echo substr($resstatut['USERREFERE'], 2, 3);


$datepm=mysqli_query($cnx,"SELECT DATECREATE FROM pm WHERE ADRESSE1 LIKE '%$commune%' ");
$pmdate=mysqli_fetch_assoc($datepm);
$datemodifpm=mysqli_query($cnx,"SELECT DATEMODIFI FROM pm WHERE ADRESSE1 LIKE '%$commune%' ");
$pmodifdate=mysqli_fetch_assoc($datemodifpm);

// print_r($pmdate);
// print_r($pmodifdate);

$datepbo=mysqli_query($cnx,"SELECT DATECREATE FROM pbositesverticaux WHERE ADRESSE1 LIKE '%$commune%' ");
$pbodate=mysqli_fetch_assoc($datepbo);
// var_dump($pbodate);
$datemodifpbo=mysqli_query($cnx,"SELECT DATEMODIFI FROM pbositesverticaux WHERE ADRESSE1 LIKE '%$commune%' ");
$pbodifdate=mysqli_fetch_assoc($datemodifpbo);
// var_dump($pbodifdate);

$truedate=date("d-m-y", strtotime("-3 month"));

$convertdatecpm=date('d-m-y',strtotime($pmdate['DATECREATE']));
// echo $convertdatecpm;
$convertdatempm=date('d-m-y',strtotime($pmodifdate['DATEMODIFI']));
// echo $convertdatempm;
 $convertdatempbo=date('d-m-y',strtotime($pbodifdate['DATEMODIFI']));
 // echo $convertdatempbo;
 $convertdatecpbo=date('d-m-y',strtotime($pbodate['DATECREATE']));
 // echo $convertdatecpbo;
// $convert = date('d-m-y', strtotime("$");        DATECREATE<=$truedate AND DATEMODIFI<=$truedate
// $convertdatecpbo=strtotime($pbodate[0]);
// $convertdatempbo=strtotime($pbodifdate[0]);
  // ex input "2010-01-18"
// if($commune==$arraycommune){
// $boulogne=mysqli_query($cnx,"SELECT USERREFERE FROM pbositesverticaux WHERE ADRESSE1 like '%$commune%' and USERREFERE LIKE 'BOULOGNE_%' ");
// $resboulogne=mysqli_fetch_assoc($boulogne);
// var_dump($resboulogne);

 // $adressepmJ3M = mysqli_query($cnx,"SELECT ADRESSE1 FROM pm WHERE $convertdatempm <= $truedate AND $convertdatecpm <= $truedate AND ADRESSE1 LIKE '%$commune%' ");

 // $adresseJ3M = mysqli_query($cnx,"SELECT ADRESSE1 FROM pbositesverticaux WHERE $convertdatempbo <= $truedate AND $convertdatecpbo <= $truedate AND ADRESSE1 LIKE '%$commune%' ");
  //  if($convertdatempm <= $truedate && $convertdatecpm <= $truedate && $convertdatempbo<=$truedate && $convertdatecpbo <= $truedate && $commune){
if($commune!="" || $statutinput!=""){
if($resstatut2['ADRESSE1']==""){
  echo '<p class="text-center stat">Pas d\'adresses encore raccordables liés à la commune entrée</p>';
}

  echo "<div class='container-fluid'>";
   echo "<div class='row'>";
   echo "<div class='text-center list col-xs-12 col-md-12 col-lg-12'>";
   echo "<table class='text-center commercial'>";
      echo "<th class='text-center titre'>Adresses $statutinput de $commune</th>";
      mysqli_data_seek($refstatut2, 0);
         while ($resstatut2=mysqli_fetch_assoc($refstatut2)){
           echo "<tr>";
           foreach ($resstatut2 as $key => $value) {
               echo "<td class='pres'>".$value."</td>";
             }
                echo "</div>";
                echo "</div>";
                echo "</div>";
     }
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
     <link href="..\css\bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="..\css\main.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="..\font-awesome\css\font-awesome.min.css" rel="stylesheet" type="text/css">
   </head>
   <style>
   @@font-face {
     src:url('../fonts/prototype.ttf');
     font-family: 'prototype',
   }
   body{
     overflow-x: hidden;
     background-image: url('../images/clear.jpg');
     background-size:cover;
     background-color:#d6ebf2;
      font-family: 'prototype';
   }
   a:hover{
       color: skyblue !important;
   }
   a{
       color: rgba(0, 93, 187, 1)!important;
   }
   .navbar{
     font-family: 'prototype';
     background-color: rgba(46, 138, 191, 0.4);
   }
   table{
     /*margin-right: 10%;*/
   }
   th{
     font-family: 'prototype';
     font-size: 20px;
   }
   .list{
          display: inline-flex;
   }
   .goto{
     position:fixed;
     float:right;
     bottom: 0;
     right:-60;
   }
   .commercial{
     width:100%;
     margin-left: 2%;
   }
   .pres{
     text-align: justify;
    padding-left:30%;
   }
   .titre{
          color: rgba(0, 93, 187, 1);
     padding:2%;
   }
   tr{

   }
   td{
     padding: 1%;
   }
   .stat{
     font-size: 20px;
     color: rgba(0, 93, 187, 1);
     padding: 2%;
   }
   .fix{
     display: inline-block;
   }
   .fixlink{
     padding-left: 8%;
   }
   .logo{
     padding: 2px;
   }
   </style>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container fix">
        <a class="logo navbar-header navbar-left"><img class="img-responsive" src="..\images\cab.jpg" width="50px"></a>
          <!-- Left -->
          <div class="navbar-header">
              <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button> -->
              <a class="navbar-brand navbar-left fixlink" href="../index.php">Retour à la page d'acceuil</a>
          </div>
          <!-- Right -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a class="btn" href="searchcommune.php">Recherche par Communes</a>
                </li>
                <li>
                  <a class="btn" href="searchstatut.php">Recherche par Adresses</a>
                </li>
                  <li>
                       <a class="btn" href="listPM.php">Liste PM</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>
  <div id="map"></div>


  <div class="row">
    <div class=" goto col-md-2">
      <a href="#" class="js-scrollTo"><i class="fa fa-arrow-circle-o-up fa-3x js-scrollTo" type="submit" class="btn btn-default js-scrollTo" aria-hidden="true"></i></a>
    </div>
</div>
  <script src="..\js\bootstrap.min.js"></script>

<?php
$adressePM = mysqli_query($cnx,"SELECT ADRESSE1 FROM pm WHERE USERREFERE LIKE 'PM".substr($referes[0], 0, 3)."'");
$resadressePM=mysqli_fetch_array($adressePM);
echo $resadressePM['ADRESSE1'];
echo $adresseres['ADRESSE1'];
// $adresseres['ADRESSE1'] = preg_match('/s-/' , $adresseres['ADRESSE1']);
// $adresseres = explode(" ", $adresseres['ADRESSE1']);
$maparray=array();
print_r($adresseres);
$charac = preg_split('/[^A-Z]/', $adresseres['ADRESSE1']);

$i=0;
foreach($charac as $value)
{
    if($charac[$i] == '')
    {
        unset($charac[$i]);

    }
    $i++;
}
print_r($charac);
$adresseres = preg_split('/[^0-9]/', $adresseres['ADRESSE1']);
$i2=0;
foreach($adresseres as $value)
{
    if($adresseres[$i2] == '')
    {
        unset($adresseres[$i2]);

    }
    $i2++;
}


print_r($adresseres);
// $adresseres = explode(" ", $adresseres);
// print_r($adresseres);
// $i = 0;
// foreach($adresseres as $key => $value){
//   array_push($adresseres , $maparray);
//   $i++;
// }




// print_r($numcapt);


 ?>

</body>
</html>
