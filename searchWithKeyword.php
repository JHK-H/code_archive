<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<body>

    <?php
        // Navbar
        include("navbar/navbar.php");

        if (isset($_POST['search'])) {
            // Referensi Henkilo-olioon
            require 'codeObject.php';

            // Luodaan henkilo-olio
            $code = new Code();

            // Pyydetään henkilo-oliota ottamaan yhteys tietokantaan
            $code->createConnetionToDatabase();

            // Haetaan tietyn henkilön tiedot taulukkoon
            $keyword = $_POST['keyword'];

            $codes = $code->searchWithKeyword($keyword);
        }
    ?>
    <h3>Search script with keyword</h3>
    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="inputKeyword" class="sr-only"></label>
        <input type="text" name="keyword" id="inputKeyword" class="form-control" placeholder="Enter keyword" required codefocus>
        <button name="search" class="btn btn-primary" type="submit">Search</button>
    </form>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Script</th>
                <th>Tags</th>
                <th>Comments</th>
            </tr>
        </thead>
    <?php
    // Tulostetaan kaikki henkilöt
    foreach ($codes as $code) {
    ?>
        <tr>
            <td><?php echo $code['title'] ?></td>
            <td><?php echo $code['description'] ?></td>
            <td><?php echo $code['code'] ?></td>
            <td><?php echo $code['tags'] ?></td>
            <td><?php echo $code['comments'] ?></td> 
        </tr>
        <?php
            }
        ?>
</table>
</body>
</html>