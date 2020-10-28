<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <title>Assignment 3</title>
  </head>
  <body class="container">
      <h1 class="title">Use the form to update a page record </h1>
        <p class='text-center'><a href='index.php' class='btn btn-secondary  mt-3 mb-3'>Back to index page</a></p>
        
        <?php
        
            include 'app/connection.php';
            $id = $_GET['update'];
            $record = $connection->query("select * from pages where id=$id") or die($connection->error());
            $row = $record->fetch_assoc();
            
            
        ?>
        
      <form class="form-group" method="post" action="app/connection.php" >
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
        <label>Page Name</label>
        <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
        <label>Heading One</label>
        <input type="text" class="form-control" name="heading1" value="<?php echo $row['heading1']; ?>">
        <label >Paragraph One</label>
        <textarea class="form-control" name="paragraph1"  rows="6" placeholder="<?php echo $row['paragraph1']; ?>">
                <?php echo $row['paragraph1']; ?>
            
        </textarea>
        <label>Image One</label>
        <input type="text" class="form-control" name="img1" value="<?php echo $row['img1']; ?>">
        <br>
        <hr width="80%">
        
        <label>Heading Two</label>
        <input type="text" class="form-control" name="heading2" value="<?php echo $row['heading2']; ?>" >
        <label >Paragraph Two</label>
        <textarea class="form-control" name="paragraph2"  rows="6" placeholder="<?php echo $row['paragraph2']; ?>">
            <?php echo $row['paragraph2']; ?>
        </textarea>
        <label>Image Two</label>
        <input type="text" class="form-control" name="img2" value="<?php echo $row['img2']; ?>">
        <br>
        <hr width="80%">
        
        <label>Heading Three</label>
        <input type="text" class="form-control" name="heading3" value="<?php echo $row['heading3']; ?>" >
        <label >Paragraph Three</label>
        <textarea class="form-control" name="paragraph3"  rows="6" placeholder="<?php echo $row['paragraph3']; ?>" >
           <?php echo $row['paragraph3']; ?>
            
        </textarea>
        <label>Image Three</label>
        <input type="text" class="form-control" name="img3" value="<?php echo $row['img3']; ?>">
        <br><br>
        <p class='text-center'> <input type="submit" name="update" class="btn btn-warning " value="Update Page Data">
        </p>
        
        

      </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>