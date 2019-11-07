<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Code Archive </title>
    <!-- Luodaan yhteys henkilö -luokkaan -->
    <?php include("codeObject.php"); ?>
    <link href="footer/footer.css" rel="stylesheet">
  </head>
  <body>
    <!-- <h1>Linkkejä tietokannassa!</h1> -->
    <?php include 'navbar/navbar.php';?>
    
    <?php
    //phpinfo();
    // Referenssi Henkilo-oloioon
    

    //Luodaan code-olio
    // $code = new code(1, "hfifhiheifh", "fifjei", "jeof", "fjiefj");
    $code = new Code();
   echo "Hello Hello :)";
    //Pyydetään henkilo-oliota ottamaan yhteys tietokantaan
    $code->createConnetionToDatabase();
    
    //pyydetään henkilo-oliota hakemaan kaikki henkilot tietokannasta
    $codes = $code->getAllCodes();
  
    // $ekacode = new code("1","http://www.mysql.com", "MySQL-tietokannan kotisivu",
    // "Relaatiotietokanta", "mysql");

    // $ekacode->tulostaTiedot();   
?>

    

<h1>Scripts</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Script</th>
      <th scope="col">Tags</th>
      <!-- <th scope="col">Avainsana</th> -->
      <th scope="col">Functions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //tulostetaan kaikki koodit
    foreach($codes as $code) {
      //$id = $code['id'];
      //$url = $code['code'];
      ?>
      <tr>
        <td><?php echo $code['headline'] ?></td>
        <td><?php echo $code['description'] ?></td>
        <td><?php echo $code['code'] ?></td>
        <td><?php echo $code['tags'] ?></td>
        <td>buttons</td>
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