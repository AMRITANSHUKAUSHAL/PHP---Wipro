<?php
$conn = mysqli_connect('localhost','root','','wipro') or die("Database Not Connected");


if(isset($_GET['id'])){
    $id = $_GET['id'];

    //deleting query
    $query = "delete from students where id = $id ";

    $result = mysqli_query($conn,$query);

    if($result){
        header("Location:index.php?deleted=1");
        exit();
    }
    else{
        echo "<p>" . 'Error in Deleteing' . "</p>";
        echo " <a href='index.php' >Back </a>  ";
    }
}

mysqli_close($conn);
?>