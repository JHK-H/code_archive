<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Harjoitus 9 (kanta ja linkkejä) </title>
    <!-- Luodaan yhteys henkilö -luokkaan -->
    <?php include("linkkikanta.php"); ?>
    <link href="footer/footer.css" rel="stylesheet">
  </head>
  <body>
    <!-- <h1>Linkkejä tietokannassa!</h1> -->
    <?php include 'navbar/navbar.php';?>
    
    <?php
    //phpinfo();
    // Referenssi Henkilo-oloioon
    

    //Luodaan henkilo-olio
    // $linkki = new Linkki(1, "hfifhiheifh", "fifjei", "jeof", "fjiefj");
    $linkki = new Linkki();
   echo "Hello Hello :)";
    //Pyydetään henkilo-oliota ottamaan yhteys tietokantaan
    $linkki->luoYhteysTietokantaan();
    
    //pyydetään henkilo-oliota hakemaan kaikki henkilot tietokannasta
    $linkit = $linkki->haeKaikkiLinkit();
  
    // $ekaLinkki = new Linkki("1","http://www.mysql.com", "MySQL-tietokannan kotisivu",
    // "Relaatiotietokanta", "mysql");

    // $ekaLinkki->tulostaTiedot();   
?>

    

<h1>Kaikki linkit</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Otsikko</th>
      <th scope="col">Linkki</th>
      <th scope="col">Kuvaus</th>
      <!-- <th scope="col">Avainsana</th> -->
      <th scope="col">Toiminnot</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //tulostetaan kaikki henkilöt
    foreach($linkit as $linkki) {
      $id = $linkki['id'];
      $url = $linkki['linkki'];
      ?>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $linkki['otsikko'] ?></td>
        <td><a href=<?php echo $url ?>><?php echo $linkki['linkki'] ?></a></td>
        <td><?php echo $linkki['kuvaus'] ?></td>
        <!-- <td><?php echo $linkki['avainsana'] ?></td> -->
        <td><button muuta-id="<?php echo $id ?>" class="btn btn-primary muuta-object">Muuta</button>
        <button poista-id="<?php echo $id ?>" class="btn btn-danger poista-object">Poista</button></td>
      </tr>
    <?php
    }
    ?>      
  </tbody>
</table>

<?php include 'footer/footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="muutaPoista.js"></script>
  </body>
</html>