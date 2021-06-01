<?php include "../assets/connectDB/connectDB.php";

    $update = "UPDATE tags SET
    tags_name = '{$_POST['tags_name']}'
    WHERE id = '{$_POST['id']}'";
    $query = $conn->query($update);
    
    if($query){
        header ('Location:../tags.php');
    }else{
        echo mysqli_error($conn);exit;
    }
?>
