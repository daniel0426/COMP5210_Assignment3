<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Assignment 3</title>
  </head>
  
  <body class="container bg-light">
      <?php include "app/connection.php"  ?>
      
      <div class="row">
          
        <div class="col">
            
            <ul class="nav navbar-light bg-light">
                <?php foreach($result as $page): ?>
                    <li class="nav-item active">
                        <a href="index.php?page='<?php echo $page['title'];  ?>'" class="nav-link"><?php echo $page['title'];  ?></a>
                    </li>
                 
                <?php endforeach; ?>
                <li class="nav-item active">
                    <a href="form.php" class="nav-link">New Page Record</a>
                </li>
            
            </ul>

        </div>


      </div>
      
      <div class="row">
          
          <div class="col">
                <?php 
                
                if(isset($_GET['page']))
                {
                     $title = trim($_GET['page'], "'");
                     
                     $record = $connection->query("select * from pages where title='$title'") or die($connection->error());
                     
                     $row = $record->fetch_assoc();
                     
                     $heading1 = $row['heading1'];
                     $heading2 = $row['heading2'];
                     $heading3 = $row['heading3'];
                     
                     $paragraph1 = $row['paragraph1'];
                     $paragraph2 = $row['paragraph2'];
                     $paragraph3 = $row['paragraph3'];
                     
                     $img1 = $row['img1'];
                     $img2 = $row['img2'];
                     $img3 = $row['img3'];
                     
                     $id = $row['id'];
                     $update = "update.php?update=" . $id;
                     $delete = "app/connection.php?delete=" . $id;
                     
                     
                     
                     echo "
                  <h2 class='text-center mt-5 mb-3 '> {$title} </h2>
                  <h4 class='text-center mt-4 mb-5'>{$heading1}</h4>
                  <p class='text-center mt-4 mb-5'><img src='{$img1}' width='400px'></p>
                  <p class='text-center mt-4 mb-4'>{$paragraph1}</p>
                  
                  <h4 class='text-center mt-4 mb-4'>{$heading2}</h4>
                  <p class='text-center mt-3 mb-3'><img src='{$img2}' width='400px'></p>
                  <p class='text-center mt-4 mb-4'>{$paragraph2}</p>
                  
                  <h4 class='text-center mt-4 mb-4'>{$heading3}</h4>
                  <p class='text-center mt-3 mb-3'><img src='{$img3}' width='400px'></p>
                  <p class='text-center mt-4 mb-4'>{$paragraph3}</p>
                    
                    ";
                    
                    echo "
                        <p class='text-center mt-5'>
                            <a href='{$update}' class='btn btn-warning'>Update </a>
                            <a href='{$delete}' class='btn btn-danger'>Delete </a>
                        </p>
                    ";
                }
                else
                {
                    echo "
                        <h1 class='text-center mt-4 text-info'>Welcome to this database driven website </h1>
                        <p class='text-center mt-3 mb-4'>Use the links above to view pages stored in the database</p>
                        <p class='text-center mt-5'><img src='images/logo.jpg' width='500px'> </p>
                    ";
                }
                
                
                ?>
              
              
          </div>
          
      </div>
    

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