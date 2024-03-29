<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/feedingCode.css">
    <title>Add script</title>
  </head>
  <body>
    <?php include 'navbar/navbar.php';?>
    
    <form class="form-signin" action="addCodeToDb.php" method="POST">
  
        <h4 class="h3 mb-3 font-weight-normal">Add script</h2>

        <label for="inputTitle" class="sr-only">Title</label>
        <textarea name="title" rows="1" cols="80" id="inputTitle" class="form-control" placeholder="Title" required></textarea>

        <label for="inputDescription" class="sr-only">Description</label>
        <textarea name="description" rows="3" cols="80" id="inputDescription" class="form-control" placeholder="Description" required></textarea>

        <label for="inputScript" class="sr-only">Script</label>
        <textarea name="script" rows="5" cols="80" id="inputScript" class="form-control" placeholder="Script" required></textarea>

        <label for="inputTags" class="sr-only">Tags</label>
        <textarea name="tags" rows="1" cols="80" id="inputTags" class="form-control" placeholder="Tags" required></textarea>

        <label for="inputComments" class="sr-only">Comments</label>
        <textarea name="comments" rows="5" cols="80" id="inputComments" class="form-control" placeholder="Comments" required></textarea>
  
        <button class="btn btn-lg btn-info btn-block" type="submit">Save</button>
  
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>