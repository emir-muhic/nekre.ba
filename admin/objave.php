<?php include "../php/db.php";?>
<?php ob_start();?>
<?php session_start();?>
<?php include "../php/function.php";?>
<?php

if(!isset($_SESSION['username'])){
  header("Location: login.php");
}

if(isset($_GET['del'])){
    $brisanje = $_GET['del'];
    $query = "DELETE FROM nekretnine WHERE sifra='$brisanje';";
    $result = mysqli_query($conn, $query);
    header("Location: objave.php");
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

    <title>Dashboard Template for Bootstrap</title>

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
                <a class="nav-link active" href="objave.php">
                  <span data-feather="file"></span>
                  Objave
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Objave</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a href="postavi.php"><button class="btn btn-sm btn-outline-secondary">Postavi nekretinu</button></a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Naslov</th>
                  <th>Opis</th>
                  <th>Cijena</th>
                  <th>Šifra</th>
                  <th>Površina</th>
                  <th>Vrsta</th>
                  <th>Kategorija</th>
                  <th>Naselje</th>
                  <th>Grad</th>
                  <th>Godina izgradnje</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Izdvojena slika</th>
                  <th>Slika #1</th>
                  <th>Slika #2</th>
                  <th>Slika #3</th>
                  <th>Slika #4</th>
                  <th>Slika #5</th>
                  <th>Slika #6</th>
                  <th>Slika #7</th>
                  <th>Slika #8</th>
                  <th>Slika #9</th>
                  <th>Slika #10</th>
                  <th>Slika #11</th>
                  <th>Slika #12</th>
                  <th>Slika #13</th>
                  <th>Slika #14</th>
                  <th>Izdvojeno</th>
                  <th>Broj pregleda</th>
                  <th>Uredi</th>
                  <th>Izbriši</th>
                  <th>Pogledaj</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * FROM nekretnine";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['naslov']; ?></td>
                    <td class="description"><?php echo $row['opis']; ?></td>
                    <td><?php echo toPrice($row['cijena']); ?></td>
                    <td><?php echo $row['sifra']; ?></td>
                    <td><?php echo $row['povrsina']; ?></td>
                    <td><?php echo $row['vrsta']; ?></td>
                    <td><?php echo $row['kategorija']; ?></td>
                    <td><?php echo $row['naselje']; ?></td>
                    <td><?php echo $row['grad']; ?></td>
                    <td><?php echo $row['godina_izgradnje']; ?></td>
                    <td><?php echo $row['latitude']; ?></td>
                    <td><?php echo $row['longitude']; ?></td>
                    <td><img src="../<?php echo $row['featured_image']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika1']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika2']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika3']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika4']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika5']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika6']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika7']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika8']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika9']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika10']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika11']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika12']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika13']; ?>" alt=""></td>
                    <td><img src="../<?php echo $row['slika14']; ?>" alt=""></td>
                    <td><?php echo $row['izdvojeno']; ?></td>
                    <td><?php echo $row['broj_pregleda']; ?></td>
                    <td><a href="uredi.php?edit=<?php echo $row['sifra']; ?>">Uredi</a></td>
                    <td><a href="?del=<?php echo $row['sifra']; ?>">Izbriši</a></td>
                    <td><a href="../nekretnina/?post=<?php echo $row['sifra']; ?>">Pogledaj</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
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
    <script src="js/custom.js"></script>
  </body>
</html>
