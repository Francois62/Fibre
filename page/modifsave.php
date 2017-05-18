<?php

include_once 'connexion.php';

 $id= $_GET['modif'];




 // echo'<div class="control-group form-group">
 //     <div class="controls">
 //
 //         <input type="hidden" class="form-control" name="id" value="'.$change1.'">
 //     </div>
 // </div>';


  //  header('location:modifsave.php');

$change1=isset($_POST['select']) ? $_POST['select'] : '';
// $raccordéenoncom=isset($_POST['raccordéenoncom']) ? $_POST['raccordéenoncom'] : '';
// $j3m=isset($_POST['j3m']) ? $_POST['j3m'] : '';
// $commercialisable=isset($_POST['commercialisable']) ? $_POST['commercialisable'] : '';

if($change1){
  $changestat=mysqli_query($cnx,"UPDATE pm SET STATUT='$change1' WHERE USERREFERE='$id' ");
}
// if($raccordéenoncom){
//   $changestat2=mysqli_query($cnx,"UPDATE pm SET STATUT='raccordée non commercialisable' WHERE USERREFERE='$change'");
// }
// if($j3m){
//   $changestat3=mysqli_query($cnx,"UPDATE pm SET STATUT='en phase J3M' WHERE USERREFERE='$change'");
// }
// if($commercialisable){
//   $changestat4=mysqli_query($cnx,"UPDATE pm SET STATUT='commercialisable' WHERE USERREFERE='$change'");
// }

//
// $res1 = mysqli_query($cnx, 'SELECT STATUT FROM pm ');

// $statut = isset($_POST['statut']) ? $_POST['statut'] : '';

 //
 // $res1 = mysqli_query($cnx, "UPDATE pm SET STATUT='$statut' WHERE USERREFERE='$change'");

 header('location:listPM.php');
 ?>
