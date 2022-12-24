<?php
include '_dbconnect.php';

// Images upload system

// echo $_FILES['img'];
$fileName =  $_FILES['s-image']['name'];
$fileLocation = $_FILES['s-image']['tmp_name'];
$folder = "Images/" . $fileName;
// echo $folder;
move_uploaded_file($fileLocation, $folder);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // $struggle_stories_image = $_POST['s-image'];
    $struggle_stories_title = $_POST['s-title'];
    $struggle_stories_description = $_POST['s-des'];
    $struggle_stories_description_more = $_POST['s-des-m'];

    $result = $conn->query("INSERT INTO struggle_stories_blog (struggle_stories_blog_image,struggle_stories_blog_title,struggle_stories_blog_description,struggle_stories_blog_des_more) VALUES ('$folder','$struggle_stories_title','$struggle_stories_description','$struggle_stories_description_more')");

    if ($result) {
        // echo "Yes";
        header("location:http://localhost/blog/admin.php?struggle_stories_uploaded=true");
    } else {
        echo "Sorry";
    }
}
?>