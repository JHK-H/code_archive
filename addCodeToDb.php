<?php

// Referenssi Henkilo-Olioon
include "codeObject.php";
//luodaan henkilo-Olio
$code = new Code();

// Otetaan lomakkeelta tulleet tiedot muuttujiin
$code->setHeadline($_POST['title']);
$code->setDescription($_POST['description']);
$code->setCode($_POST['script']);
$code->setTags($_POST['tags']);

// Pyydetään henkilo-oliota ottamaan yhteys tietokantaan
$code->createConnetionToDatabase();
//Pyydetään henkilo-oliota lisäämään tietua
$addOk = $code->addCode();

if ($addOk > 0) {
    echo "Adding was succestful!";
    
} else {
    echo "Adding failed!";
}
?>