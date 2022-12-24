<?php
include '/xampp1/htdocs/blog/partial/_dbconnect.php';
$sno = $_GET['sno'];
$result = $conn->query("DELETE FROM top_listed_blog WHERE sno = $sno");
if ($result) {
    echo "<script>window.location='http://localhost/blog/top_listed_blog.php?top_listed_blog_delete=true'</script>";
}

?>