<?php
include '/xampp1/htdocs/blog/partial/_dbconnect.php';
$sno = $_GET['sno'];
$result = $conn->query("DELETE FROM display_blog WHERE sno = $sno");
if ($result) {
    echo "<script>window.location='http://localhost/blog/display_blog.php?display_blog_delete=true'</script>";
}
?>