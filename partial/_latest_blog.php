<?php
include  '_dbconnect.php';

// Images upload system

// echo $_FILES['img'];
$fileName =  $_FILES['l-image']['name'];
$fileLocation = $_FILES['l-image']['tmp_name'];
$folder = "Images/" . $fileName;
// echo $folder;
move_uploaded_file($fileLocation, $folder);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $image = $_POST['l-image'];
    $latest_blog_title = $_POST['l-title'];
    $latest_blog_description = $_POST['l-des'];
    $latest_blog_title_description_more = $_POST['l-des-m'];

    $result = $conn->query("INSERT INTO latest_blog (latest_blog_image,latest_blog_title,latest_blog_des,latest_blog_description_more) VALUES ('$folder','$latest_blog_title','$latest_blog_description','$latest_blog_title_description_more')");

    if ($result) {
        echo "Yes";
        header("location:http://localhost/blog/admin.php?latest_blog_uploaded=true");
    } else {
        echo "sorry";
    }
}
