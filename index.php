<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Script Archive </title>
    <!-- Luodaan yhteys codeObject -luokkaan -->
    <?php include("codeObject.php"); ?>

  </head>
  <body>
    <!-- <h1>Linkkejä tietokannassa!</h1> -->
    <?php include 'navbar/navbar.php';?>
    
    <?php
    //phpinfo();

    //Luodaan code-olio
    $script = new Code();
    
    //Pyydetään Code-oliota ottamaan yhteys tietokantaan
    $script->createConnetionToDatabase();
    
    //pyydetään Code-oliota hakemaan kaikki henkilot tietokannasta
    $scripts = $script->getAllCodes();
?>

<h1></h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Script</th>
      <th scope="col">Tags</th>
      <th scope="col">Comments</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    //tulostetaan kaikki koodi-oliot
    foreach($scripts as $script) {
      $id = $script['id'];
      ?>
      <tr>
        <td><?php echo $script['id'] ?></td>
        <td><?php echo $script['title'] ?></td>
        <td><?php echo $script['description'] ?></td>
        <td><?php echo $script['code'] ?></td>
        <td><?php echo $script['tags'] ?></td>
        <td><?php echo $script['comments'] ?></td>
      </tr>
    <?php
    }
    ?>      
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  </body>
</html>


<!-- <form action="/action_page.php">
            <textarea name="message" rows="10" cols="30">The cat was playing in the garden.</textarea>
            <br><input type="submit">
          </form> -->