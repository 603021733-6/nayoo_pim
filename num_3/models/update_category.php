<?php include "../assets/connectDB/connectDB.php";

    $update = "UPDATE category SET
    category_name = '{$_POST['category_name']}'
    WHERE id = '{$_POST['id']}'";
    $query = $conn->query($update);
    
    if($query){
        header ('Location:../category.php');
    }else{
        echo mysqli_error($conn);exit;
    }
?>
