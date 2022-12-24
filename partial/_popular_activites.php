<?php
include '_dbconnect.php';

// Images upload system

// echo $_FILES['img'];
$fileName =  $_FILES['p-image']['name'];
$fileLocation = $_FILES['p-image']['tmp_name'];
$folder = "Images/" . $fileName;
// echo $folder;
move_uploaded_file($fileLocation, $folder);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $popular_activites_title = $_POST['p-title'];


    $result = $conn->query("INSERT INTO popular_activites (popular_actvites_image,popular_activites_title) VALUES ('$folder','$popular_activites_title')");

    if($result){
        // echo "Yes";
        header("location:http://localhost/blog/admin.php?popular_activites_uploaded=true");
    }else{
        echo "Sorry";
    }

}

?>