<?php include "../php/db.php";?>
<?php session_start();?>
<?php

if(!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Postavi nekretninu - Agencija za nekretnine Tuzla</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Ahencija "Nekre"</a>
      <!-- <<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="odjava.php">Odjavi se</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span data-feather="home"></span>
                  Nadzorna ploča <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="objave.php">
                  <span data-feather="file"></span>
                  Objave
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Postavljanje nekretnine</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>
            </div>
          </div>
          <?php
          
          if(isset($_GET['err'])){
            if($_GET['err'] == "empty"){ ?>
                <div class="alert alert-danger" role="alert">
                    Popunite obavezna polja! Obavezna polja su: naslov, cijena, šifra, površina, vrsta, kategorija i grad.
                </div> <?php
            }
          }
          
          ?>

            <form action="postavljanje.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Naziv nekretnine</label>
                    <input type="text" class="form-control" name="naslov" value="<?php if(isset($_SESSION['naslov'])){echo $_SESSION['naslov'];} ?>" placeholder="Unesite naziv nekretnine">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Opis nekretnine</label>
                    <textarea class="form-control" name="opis" rows="6"><?php if(isset($_SESSION['opis'])){echo $_SESSION['opis'];} ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Cijena nekretnine</label>
                    <input type="text" class="form-control" name="cijena" value="<?php if(isset($_SESSION['cijena'])){echo $_SESSION['cijena'];} ?>" placeholder="Primjer: 170.000,00 KM">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Šifra nekretnine</label>
                    <input type="text" class="form-control" name="sifra" value="<?php if(isset($_SESSION['sifra'])){echo $_SESSION['sifra'];} ?>" placeholder="Primjer: 02-34">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Površina nekretnine (m2)</label>
                    <input type="text" class="form-control" name="povrsina" value="<?php if(isset($_SESSION['povrsina'])){echo $_SESSION['povrsina'];} ?>" placeholder="Primjer: 125.44">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Vrsta nekretnine</label>
                    <select class="form-control" name="vrsta">
                        <?php
                        if($_SESSION['vrsta'] == "stan"){ ?>
                            <option value="stan">Stan</option>
                            <option value="kuca">Kuća</option>
                            <option value="zemljiste">Zemljište</option>
                            <option value="garaza">Garaža</option>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="vikendica">Vikendica</option>
                            <option value="parkingmjesto">Parking mjesto</option>
                        <?php } else if($_SESSION['vrsta'] == "kuca"){ ?>
                            <option value="kuca">Kuća</option>
                            <option value="stan">Stan</option>
                            <option value="zemljiste">Zemljište</option>
                            <option value="garaza">Garaža</option>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="vikendica">Vikendica</option>
                            <option value="parkingmjesto">Parking mjesto</option>
                        <?php } else if($_SESSION['vrsta'] == "zemljiste"){ ?>
                            <option value="zemljiste">Zemljište</option>
                            <option value="stan">Stan</option>
                            <option value="kuca">Kuća</option>
                            <option value="garaza">Garaža</option>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="vikendica">Vikendica</option>
                            <option value="parkingmjesto">Parking mjesto</option>
                        <?php } else if($_SESSION['vrsta'] == "garaza"){ ?>
                            <option value="garaza">Garaža</option>
                            <option value="stan">Stan</option>
                            <option value="kuca">Kuća</option>
                            <option value="zemljiste">Zemljište</option>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="vikendica">Vikendica</option>
                            <option value="parkingmjesto">Parking mjesto</option>
                        <?php } else if($_SESSION['vrsta'] == "poslovniprostor"){ ?>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="stan">Stan</option>
                            <option value="kuca">Kuća</option>
                            <option value="zemljiste">Zemljište</option>
                            <option value="garaza">Garaža</option>
                            <option value="vikendica">Vikendica</option>
                            <option value="parkingmjesto">Parking mjesto</option>
                        <?php } else if($_SESSION['vrsta'] == "vikendica"){ ?>
                            <option value="vikendica">Vikendica</option>
                            <option value="stan">Stan</option>
                            <option value="kuca">Kuća</option>
                            <option value="zemljiste">Zemljište</option>
                            <option value="garaza">Garaža</option>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="parkingmjesto">Parking mjesto</option>
                        <?php } else if($_SESSION['vrsta'] == "parkingmjesto"){ ?>
                            <option value="parkingmjesto">Parking mjesto</option>
                            <option value="stan">Stan</option>
                            <option value="kuca">Kuća</option>
                            <option value="zemljiste">Zemljište</option>
                            <option value="garaza">Garaža</option>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="vikendica">Vikendica</option>
                        <?php } else{ ?>
                            <option>Izaberi</option>
                            <option value="stan">Stan</option>
                            <option value="kuca">Kuća</option>
                            <option value="zemljiste">Zemljište</option>
                            <option value="garaza">Garaža</option>
                            <option value="poslovniprostor">Poslovni prostor</option>
                            <option value="vikendica">Vikendica</option>
                            <option value="parkingmjesto">Parking mjesto</option>
                        <?php } ?>
                    </select>
                </div>  
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategorija nekretnine</label>
                    <select class="form-control" name="kategorija">
                        <?php
                        if($_SESSION['kategorija'] == "Prodaja"){ ?>
                            <option value="Prodaja">Prodaja</option>
                            <option value="Iznajmljivanje">Iznajmljivanje</option>
                        <?php } else if($_SESSION['kategorija'] == "Iznajmljivanje"){ ?>
                            <option value="Iznajmljivanje">Iznajmljivanje</option>
                            <option value="Prodaja">Prodaja</option>
                        <?php } else{ ?>
                            <option>Izaberi</option>
                            <option value="Prodaja">Prodaja</option>
                            <option value="Iznajmljivanje">Iznajmljivanje</option>
                        <?php } ?>
                    </select>
                </div>   
                <div class="form-group">
                    <label for="exampleFormControlInput1">Naselje nekretnine</label>
                    <input type="text" class="form-control" name="naselje" value="<?php if(isset($_SESSION['naselje'])){echo $_SESSION['naselje'];} ?>" placeholder="Unesite naselje u kojem se nalazi nekretnina">
                </div>   
                <div class="form-group">
                    <label for="exampleFormControlInput1">Grad nekretnine</label>
                    <input type="text" class="form-control" name="grad" value="<?php if(isset($_SESSION['grad'])){echo $_SESSION['grad'];} ?>" placeholder="Unesite grad u kojem se nalazi nekretnina">
                </div>     
                <div class="form-group">
                    <label for="exampleFormControlInput1">Godina izgradnje</label>
                    <input type="number" class="form-control" name="godina" value="<?php if(isset($_SESSION['godina'])){echo $_SESSION['godina'];} ?>" placeholder="Primjer: 2025">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Latitude nekretnine</label>
                    <input type="text" class="form-control" name="latitude" value="<?php if(isset($_SESSION['latitude'])){echo $_SESSION['latitude'];} ?>" placeholder="Unesite latitude">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Longitude nekretnine</label>
                    <input type="text" class="form-control" name="longitude" value="<?php if(isset($_SESSION['longitude'])){echo $_SESSION['longitude'];} ?>" placeholder="Unesite longitude">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Odaberite izdvojenu sliku nekretnine</label>
                    <input class="form-control" type="file" name="fetured_image">
                </div>
                <div class="mb-3 mr-5">
                    <label for="formFileLg" class="form-label">Odaberite sliku #1</label>
                    <input class="form-control form-control-lg" name="slika[]" type="file" multiple>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlSelect1">Izdvoji nekretninu</label>
                    <select class="form-control" name="izdvoji_nekretninu">
                        <?php
                        if($_SESSION['izdvoji_nekretninu'] == "Da"){ ?>
                            <option value="Da">Da</option>
                            <option value="Ne">Ne</option>
                        <?php } else if($_SESSION['izdvoji_nekretninu'] == "Ne"){ ?>
                            <option value="Ne">Ne</option>
                            <option value="Da">Da</option>
                        <?php } else { ?>
                            <option>Izaberi</option>
                            <option value="Da">Da</option>
                            <option value="Ne">Ne</option>
                        <?php } ?>
                    </select>
                </div> 
                <button type="submit" class="btn btn-primary mb-5">Postavi nekretninu</button>  
            </form>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <?php session_destroy(); ?>
  </body>
</html>
