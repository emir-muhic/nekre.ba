<?php include "../php/db.php";?>
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
    header("Location: postavi.php?err=empty");
}

$sifrirani_folder = "../fotografije/" . $sifra;
mkdir($sifrirani_folder);

$filename1 = $_FILES["fetured_image"]["name"];
$tempname = $_FILES["fetured_image"]["tmp_name"]; 
$lokacija_slike = $sifrirani_folder . "/" . $filename1;
move_uploaded_file($tempname, $lokacija_slike);
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

// Upload images




// $filename2 = $_FILES["slika1"]["name"];
// $tempname = $_FILES["slika1"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename2;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename2 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename2);

// $filename3 = $_FILES["slika2"]["name"];
// $tempname = $_FILES["slika2"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename3;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename3 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename3);

// $filename4 = $_FILES["slika3"]["name"];
// $tempname = $_FILES["slika3"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename4;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename4 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename4);

// $filename5 = $_FILES["slika4"]["name"];
// $tempname = $_FILES["slika4"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename5;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename5 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename5);

// $filename6 = $_FILES["slika5"]["name"];
// $tempname = $_FILES["slika5"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename6;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename6 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename6);

// $filename7 = $_FILES["slika6"]["name"];
// $tempname = $_FILES["slika6"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename7;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename7 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename7);

// $filename8 = $_FILES["slika7"]["name"];
// $tempname = $_FILES["slika7"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename8;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename8 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename8);

// $filename9 = $_FILES["slika8"]["name"];
// $tempname = $_FILES["slika8"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename9;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename9 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename9);

// $filename10 = $_FILES["slika9"]["name"];
// $tempname = $_FILES["slika9"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename10;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename10 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename10);

// $filename11 = $_FILES["slika10"]["name"];
// $tempname = $_FILES["slika10"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename11;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename11 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename11);

// $filename12 = $_FILES["slika11"]["name"];
// $tempname = $_FILES["slika11"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename12;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename12 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename12);

// $filename13 = $_FILES["slika12"]["name"];
// $tempname = $_FILES["slika12"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename13;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename13 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename13);

// $filename14 = $_FILES["slika13"]["name"];
// $tempname = $_FILES["slika13"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename14;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename14 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename14);

// $filename15 = $_FILES["slika14"]["name"];
// $tempname = $_FILES["slika14"]["tmp_name"];
// $lokacija_slike = $sifrirani_folder . "/" . $filename15;
// move_uploaded_file($tempname, $lokacija_slike);
// $filename15 = mysqli_real_escape_string($conn, "fotografije/" . $sifra . "/" . $filename15);


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

$query = "INSERT INTO objave(naslov, opis, cijena, sifra, povrsina, vrsta, kategorija, naselje, grad, godina_izgradnje, latitude, longitude, featured_image, izdvojeno)VALUES('$naslov', '$opis', '$cijena', '$sifra', '$povrsina', '$vrsta', '$kategorija', '$naselje', '$grad', '$godina', '$latitude', '$longitude', '$filename1', '$izdvoji_nekretninu')";
$result = mysqli_query($conn, $query);

$countfiles = count($_FILES['slika']['name']);
for($i=1;$i<$countfiles;$i++){
    $filename[$i] = $_FILES['slika']['name'][$i];
    move_uploaded_file($_FILES['slika']['tmp_name'][$i], $sifrirani_folder . "/" . $filename[$i]);
    $query = "UPDATE objave SET slika" . [$i] . " = '$filename[$i]' WHERE sifra = $sifra";
    $result = mysqli_query($conn, $query);
}

if(!$result){
    die("Greška prilikom ubacivanja u bazu podataka!!!");
}

echo "Upiješno postavljeno!!!";
//header("Location: index.php");