<?php
include '_dbconnect.php';

// Images upload system

// echo $_FILES['img'];
$fileName =  $_FILES['img']['name'];
$fileLocation = $_FILES['img']['tmp_name'];
$folder = "Images/" . $fileName;
// echo $folder;
move_uploaded_file($fileLocation,$folder);



if($_SERVER['REQUEST_METHOD'] == "POST"){
$top_listed_blog_title = $_POST['title'];
$top_listed_blog_des = $_POST['blogDes'];
$top_listed_blog_des_more = $_POST['blogDesMore'];
// $top_listed_blog_ = $_POST[''];

$result = $conn->query("INSERT INTO top_listed_blog (top_listed_blog_title,top_listed_blog_description,top_listed_blog_more_description,top_listed_blog_img) VALUES ('$top_listed_blog_title','$top_listed_blog_des','$top_listed_blog_des_more','$folder')");

if($result){
    // echo "Yes";
    header("location:http://localhost/blog/admin.php?top_listed_blog_uploaded=true");
}else{
    echo "Nots";
}

}
?>