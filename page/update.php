<?php include_once('connexion.php');

$fichier = "../PM.csv";
$fichier = new SplFileObject('../PM.csv', 'r');
$fichier->setFlags(SplFileObject::READ_CSV);
$fichier->setCsvControl(';','"');

$arrayKey = array();

$i = 0;
foreach($fichier as $value)
{
  // Keys
  if($i == 0){
    foreach ($value as $value2) {
      array_push($arrayKey, explode(',', $value2)[0]);
      // echo explode(',', $value2)[0] . '<br />';
    }
  }
  // Values
  if($i != 0){
    $i2 = 0;
    foreach ($value as $value2) {
      if($i2 != 0)
      mysqli_query($cnx, "UPDATE pm SET ".$arrayKey[$i2]." = '$value2' WHERE OBJECTID=".$value[0]);
      // echo "UPDATE pm SET ".$arrayKey[$i2]." = '$value2' WHERE OBJECTID=".$value[0] . '<br />';
       $i2 ++;
    }
  }
  $i++;
}

$req_tmpold2 = "DROP TABLE IF EXISTS PBOSITESVERTICAUX; ";
// $req_tmpold3 = "DROP TABLE IF EXISTS Pbo; ";

$fichier2 = new SplFileObject('../PBO_-_Site_Verticauxt.csv', 'r');
$fichier2->setFlags(SplFileObject::READ_CSV);
 $fichier2->setCsvControl(';','"');

 // $create=array('OBJECTID','ANCILLARYR','ENABLED','CREATIONUS','DATECREATE','DATEMODIFI','LASTUSER','COMMENTS','INSTALLDAT','WORKORDERI','STATUS','OWNER','CLLI_CODE','MIC_CODE','ACCOUNTCOD','IDCODE','LOCATION','MANUFACTUR','EQUIPMENTT','MODELNUMBE','PRODUCTURL','REFERENCE','USERREFERE','USERCOMPLE',
 // 'UTILIZATIO','DISTANCETO','GPSCOORD1','GPSCOORD2','GPSCOORD3','ANNOPC','COREPAIRCO','ROTATIONAN','SUBTYPEID','HUBSITETYP','PROPRIETAI','GESTIONNAI','ADRESSE1','ADRESSE2','ADRESSE3',
 //  'IDADRESSE1','IDADRESSE2','PRECISION','NOMBRE_LOG','BAILLEUR','PROPRIET_1','STATUT_IMM','SITE_RADIO','SERIALNUMB','CODE_G2R','STRUCTURE_','FONCTION_D','ANCIEN_COD','CODE_PROJE','RESEAU','POP_ZV','PROPRIET_2','PROPRIET_3','MIGRATION_');
$arrayKey2 = array();
 $i = 0;
 foreach($fichier2 as $value)
 {
   // Keys
   if($i == 0){
     foreach ($value as $value2) {
       array_push($arrayKey2, explode(' ', $value2)[0]);
      //  echo explode(' ', $value2)[0] . '<br />';
     }
   }
   // Values
   if($i != 0){
     $i2 = 0;
     foreach ($value as $value2) {
       if($i2 != 0)
       mysqli_query($cnx, "UPDATE pbositesverticaux SET ".$arrayKey2[$i2]." = '$value2' WHERE OBJECTID=".$value[0]);
         //echo "UPDATE pbositesverticaux SET ".$arrayKey2[$i2]." = '$value2' WHERE OBJECTID=".$value[0] . '<br />';
        $i2 ++;
     }
   }
   $i++;
 }
echo "Mise à jour bien effectuée.";
// header('location:listPM.php');
?>
