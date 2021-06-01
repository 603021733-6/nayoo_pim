<?php include "../assets/connectDB/connectDB.php";

    $album = $_POST ;
    $insert = 'INSERT INTO album (album_name, category, tags) VALUE (
        "'.$album['album_name'].'",
        "'.$album['category'].'",
        "'.$album['tags'].'"
    )';
    $query = $conn->query($insert);
    if($query){
        header('location:../album.php');
    }else{
        echo "error jaaa";
    }


?>