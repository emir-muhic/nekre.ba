<?php include "../php/db.php";?>
<?php include "../php/function.php";?>
<?php session_start();?>
<?php ob_start();?>
<?php

$_SESSION['naslov'] = $naslov = $_POST['naslov'];
$_SESSION['opis'] = $opis = $_POST['opis'];
$_SESSION['cijena'] = $cijena = $_POST['cijena'];
$_SESSION['sifra'] = $sifra = $_POST['sifra'];
$_SESSION['povrsina'] = $povrsina = $_POST['povrsina'];
$_SESSION['vrsta'] = $vrsta = $_POST['vrsta'];
$_SESSION['kategorija'] = $kategorija = $_POST['kategorija'];
$_SESSION['naselje'] = $naselje = $_POST['naselje'];
$_SESSION['grad'] = $grad = $_POST['grad'];
$_SESSION['godina'] = $godina = $_POST['godina'];
$_SESSION['latitude'] = $latitude = $_POST['latitude'];
$_SESSION['longitude'] = $longitude = $_POST['longitude'];
$_SESSION['izdvoji_nekretninu'] = $izdvoji_nekretninu = $_POST['izdvoji_nekretninu'];

if(empty($naslov) || empty($cijena) || empty($sifra) || empty($povrsina) || $vrsta == "Izaberi" || $kategorija == "Izaberi" || empty($grad)){
    header("Location: uredi.php?err=empty&edit=$sifra");
}

$sifrirani_folder = "../fotografije/" . $sifra;
//mkdir($sifrirani_folder);

$filename1 = $_FILES["fetured_image"]["name"];
$tempname = $_FILES["fetured_image"]["tmp_name"]; 
$lokacija_slike = $sifrirani_folder . "/" . $filename1;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT featured_image FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename1)){ $filename1 = urlToImg($row['featured_image']); } else{ unlink('../'.$row['featured_image']); }
$filename1 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename1);

/* $sourceS = "../fotografije/04-43/dnevna43.jpg";
$sourceW = "../fotografije/04-43/logo.png";
$target = "../fotografije/04-43/dnevna432.jpg";
$quality = 85;
$posX = 0;
$posY = 0;
$imgS = imagecreatefromjpeg($sourceS);
$imgW = imagecreatefrompng($sourceW);
imagecopy($imgS, $imgW, $posX, $posY, 0, 0, imagesx($imgW), imagesY($imgW));
imagejpeg($imgS, $target, $quality); */


$filename2 = $_FILES["slika1"]["name"];
$tempname = $_FILES["slika1"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename2;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika1 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename2)){ $filename2 = urlToImg($row['slika1']); } else{ unlink('../'.$row['slika1']); }
$filename2 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename2);

$filename3 = $_FILES["slika2"]["name"];
$tempname = $_FILES["slika2"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename3;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika2 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename3)){ $filename3 = urlToImg($row['slika2']); } else{ unlink('../'.$row['slika2']); }
$filename3 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename3);

$filename4 = $_FILES["slika3"]["name"];
$tempname = $_FILES["slika3"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename4;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika3 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename4)){ $filename4 = urlToImg($row['slika3']); } else{ unlink('../'.$row['slika3']); }
$filename4 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename4);

$filename5 = $_FILES["slika4"]["name"];
$tempname = $_FILES["slika4"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename5;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika4 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename5)){ $filename5 = urlToImg($row['slika4']); } else{ unlink('../'.$row['slika4']); }
$filename5 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename5);

$filename6 = $_FILES["slika5"]["name"];
$tempname = $_FILES["slika5"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename6;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika5 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename6)){ $filename6 = urlToImg($row['slika5']); } else{ unlink('../'.$row['slika5']); }
$filename6 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename6);

$filename7 = $_FILES["slika6"]["name"];
$tempname = $_FILES["slika6"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename7;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika6 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename7)){ $filename7 = urlToImg($row['slika6']); } else{ unlink('../'.$row['slika6']); }
$filename7 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename7);

$filename8 = $_FILES["slika7"]["name"];
$tempname = $_FILES["slika7"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename8;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika7 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename8)){ $filename8 = urlToImg($row['slika7']); } else{ unlink('../'.$row['slika7']); }
$filename8 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename8);

$filename9 = $_FILES["slika8"]["name"];
$tempname = $_FILES["slika8"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename9;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika8 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename9)){ $filename9 = urlToImg($row['slika8']); } else{ unlink('../'.$row['slika8']); }
$filename9 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename9);

$filename10 = $_FILES["slika9"]["name"];
$tempname = $_FILES["slika9"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename10;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika9 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename10)){ $filename10 = urlToImg($row['slika9']); } else{ unlink('../'.$row['slika9']); }
$filename10 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename10);

$filename11 = $_FILES["slika10"]["name"];
$tempname = $_FILES["slika10"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename11;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika10 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename11)){ $filename11 = urlToImg($row['slika10']); } else{ unlink('../'.$row['slika10']); }
$filename11 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename11);

$filename12 = $_FILES["slika11"]["name"];
$tempname = $_FILES["slika11"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename12;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika11 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename12)){ $filename12 = urlToImg($row['slika11']); } else{ unlink('../'.$row['slika11']); }
$filename12 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename12);

$filename13 = $_FILES["slika12"]["name"];
$tempname = $_FILES["slika12"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename13;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika12 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename13)){ $filename13 = urlToImg($row['slika12']); } else{ unlink('../'.$row['slika12']); }
$filename13 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename13);

$filename14 = $_FILES["slika13"]["name"];
$tempname = $_FILES["slika13"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename14;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika13 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename14)){ $filename14 = urlToImg($row['slika13']); } else{ unlink('../'.$row['slika13']); }
$filename14 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename14);

$filename15 = $_FILES["slika14"]["name"];
$tempname = $_FILES["slika14"]["tmp_name"];
$lokacija_slike = $sifrirani_folder . "/" . $filename15;
move_uploaded_file($tempname, $lokacija_slike);
$query = "SELECT slika14 FROM objave WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result); 
if(empty($filename15)){ $filename15 = urlToImg($row['slika14']); } else{ unlink('../'.$row['slika14']); }
$filename15 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename15);


$naslov = mysqli_real_escape_string($conn, $naslov);
$opis = mysqli_real_escape_string($conn, $opis);
$cijena = mysqli_real_escape_string($conn, $cijena);
$sifra = mysqli_real_escape_string($conn, $sifra);
$povrsina = mysqli_real_escape_string($conn, $povrsina);
$vrsta = mysqli_real_escape_string($conn, $vrsta);
$kategorija = mysqli_real_escape_string($conn, $kategorija);
$naselje = mysqli_real_escape_string($conn, $naselje);
$grad = mysqli_real_escape_string($conn, $grad);
$godina = mysqli_real_escape_string($conn, $godina);
$latitude = mysqli_real_escape_string($conn, $latitude);
$longitude = mysqli_real_escape_string($conn, $longitude);
$izdvoji_nekretninu = mysqli_real_escape_string($conn, $izdvoji_nekretninu);

$query = "UPDATE objave SET naslov = '$naslov', opis = '$opis', cijena = '$cijena', sifra = '$sifra', povrsina = '$povrsina', vrsta = '$vrsta', kategorija = '$kategorija', naselje = '$naselje', grad = '$grad', godina_izgradnje = '$godina', latitude = '$latitude', longitude = '$longitude', featured_image = '$filename1', slika1 = '$filename2', slika2 = '$filename3', slika3 = '$filename4', slika4 = '$filename5', slika5 = '$filename6', slika6 = '$filename7', slika7 = '$filename8', slika8 = '$filename9', slika9 = '$filename10', slika10 = '$filename11', slika11 = '$filename12', slika12 = '$filename13', slika13 = '$filename14', slika14 = '$filename15', izdvojeno = '$izdvoji_nekretninu' WHERE sifra='$sifra'";
$result = mysqli_query($conn, $query);

if(!$result){
    die("Greška prilikom mijenjanja podataka u bazi podataka!!!");
}

echo "Upiješno uređeno!!!";
header("Location: index.php");