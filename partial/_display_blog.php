<?php
include '_dbconnect.php';

// Images upload system

// echo $_FILES['img'];
$fileName =  $_FILES['d-image']['name'];
$fileLocation = $_FILES['d-image']['tmp_name'];
$folder = "Images/" . $fileName;
// echo $folder;
move_uploaded_file($fileLocation, $folder);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $display_blog_title = $_POST['d-title'];
    $display_blog_description = $_POST['d-des'];
    $display_blog_more_description = $_POST['d-des-m'];

    $result = $conn->query("INSERT INTO display_blog (display_blog_image,display_blog_title,display_blog_description,display_blog_description_more) VALUES ('$folder','$display_blog_title','$display_blog_description','$display_blog_more_description')");

    if ($result) {
        // echo 'Yes';
        header("location:http://localhost/blog/admin.php?display_blog_uploaded=true");
    }else{
        echo "Sorry your display blog did not upload";
    }
}
?>
