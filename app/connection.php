<?php
    
    //Database credentials
    $user = "a3003548_appuser";
    $pw = "Toiohomai1234";
    $db= "a3003548_app";

    
    $connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));

    
    $result = $connection->query("select * from pages") or die($connection->error());
    
    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        
        $heading1 = $_POST['heading1'];
        $heading2 = $_POST['heading2'];
        $heading3 = $_POST['heading3'];
        
        $paragraph1 = $_POST['paragraph1'];
        $paragraph2 = $_POST['paragraph2'];
        $paragraph3 = $_POST['paragraph3'];
        
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $img3 = $_POST['img3'];
        
        $sql = "insert into pages(title, heading1, heading2, heading3, paragraph1, paragraph2, paragraph3, img1, img2, img3) values('$title', '$heading1', '$heading2', '$heading3','$paragraph1','$paragraph2','$paragraph3','$img1','$img2','$img3')";
        
        if($connection->query($sql) === TRUE){
            echo "
                <h2 class='text-center'> Record added successfully </h2>
                <p class='text-center'>
                    <a href='../index.php'>Back to index page </a>
                </p>
            ";
        }
        else {
            echo "
                <h2 class='text-center'> Error submitting data</h2>
                <p>{$connection->error()}</p>
                <p class='text-center'>
                    <a href='../index.php'>Back to index page</a>   
                </p>
            
            ";
        }
    }
    
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $del = "delete from pages where id=$id";
        
        if($connection->query($del) === TRUE){
            echo "
                    <h3 class='text-center'> Record was deleted.  </h3>
                    <p class='text-center'><a href='../index.php'>Return to Index Page</a> </p>
            ";
            
        }
        else {
            echo "
                <h3 class='text-center'> There was an error deleting this record.</h3>
                <p class='text-center'>{$connection->error()} </p>
                <p class='text-center'><a href='../index.php'>Back to index page</a> </p>
            
            ";
            
        }
    }
    
    if(isset($_POST['update']))
    {   
        $id = $_POST['id'];
        $title = $_POST['title'];
        
        
        $heading1 = $_POST['heading1'];
        $heading2 = $_POST['heading2'];
        $heading3 = $_POST['heading3'];
        
        $paragraph1 = $_POST['paragraph1'];
        $paragraph2 = $_POST['paragraph2'];
        $paragraph3 = $_POST['paragraph3'];
        
        $img1 = $_POST['img1'];
        $img2 = $_POST['img2'];
        $img3 = $_POST['img3'];
        
       $update = "
            update pages set title='$title', heading1='$heading1',heading2='$heading2',
            heading3='$heading3', paragraph1='$paragraph1',paragraph2='$paragraph2',
            paragraph3='$paragraph3',img1='$img1',img2='$img2',img3='$img3'
            where id='$id'
       
       ";
        
        if($connection->query($update) === TRUE){
            echo "
                <h2 class='text-center'> Record updated successfully </h2>
                <p class='text-center'>
                    <a href='../index.php'>Back to index page </a>
                </p>
            ";
        }
        else {
            echo "
                <h2 class='text-center'> Error updating data</h2>
                <p>{$connection->error()}</p>
                <p class='text-center'>
                    <a href='../index.php'>Back to index page</a>   
                </p>
            
            ";
        }
    }
    
?>