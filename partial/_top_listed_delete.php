<?php
include '_dbconnect.php';
$sno = $_GET["sno"];
$result = $conn->query("DELETE FROM top_listed_blog WHERE sno = '$sno'");
if($result){
    echo "Yes";
    header("location:http://localhost/blog/top_listed_blog.php?top_listed_blog_deleted=true");
}



?>