<?php include "../assets/connectDB/connectDB.php";

    $category = $_POST ;
    $insert = 'INSERT INTO category VALUE (
        null,
        "'.$category['category_name'].'"
    )';
    $query = $conn->query($insert);

    if($query){
        header('location:../category.php');
    }else{
        echo "error jaaa";
    }


?>