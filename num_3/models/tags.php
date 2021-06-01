<?php include "../assets/connectDB/connectDB.php";

    $tags = $_POST ;
    $insert = 'INSERT INTO tags VALUE (
        null,
        "'.$tags['tags_name'].'"
    )';
    $query = $conn->query($insert);

    if($query){
        header('location:../tags.php');
    }else{
        echo "error jaaa";
    }


?>