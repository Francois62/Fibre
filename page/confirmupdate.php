<?php include('connexion.php');

$res = mysqli_query($cnx,"SELECT * FROM PM ");
$data = mysqli_fetch_assoc($res);

$res1 = mysqli_query($cnx,"SELECT * FROM PBOSITEVERTICAUX ");
$data1 = mysqli_fetch_assoc($res1);

$numid=$_GET['modif'];

$newpm = isset($_POST['newpm']) ? $_POST['newpm'] : '';
$newpbo = isset($_POST['newpbo']) ? $_POST['newpbo'] : '';
$newadresse = isset($_POST['newadresse']) ? $_POST['newadresse'] : '';
$newadresse1 = isset($_POST['newadressepbo']) ? $_POST['newadressepbo'] : '';

$res = mysqli_query($cnx,"INSERT INTO PM SET USERREFERE='$newpm', ADRESSE1='$newadresse' ");
$res1 = = mysqli_query($cnx,"INSERT INTO PBOSITEVERTICAUX SET USERREFERE='$newpbo', ADRESSE1='$newadressepbo' ");
echo (int)$res;
?>
