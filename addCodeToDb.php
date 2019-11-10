<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Notification</title>
  </head>
  <body>

<?php
// Referenssi Henkilo-Olioon
include "codeObject.php";
// Luodaan henkilo-Olio
$code = new Code();

// Otetaan lomakkeelta tulleet tiedot muuttujiin
$code->setTitle($_POST['title']);
$code->setDescription($_POST['description']);
$code->setCode($_POST['script']);
$code->setTags($_POST['tags']);
$code->setComments($_POST['comments']);

// Pyydetään henkilo-oliota ottamaan yhteys tietokantaan
$code->createConnetionToDatabase();
//Pyydetään henkilo-oliota lisäämään tietue
$addOk = $code->addCode();

if ($addOk > 0) {
    
    echo "<h3>Adding was succesfull!</h3>";
    
} else {
    echo "<h3>Adding failed!<h3>";
}

?>
    <form action="index.php">
        <button>Continue</button>
    </form>
  </body>
</html>  