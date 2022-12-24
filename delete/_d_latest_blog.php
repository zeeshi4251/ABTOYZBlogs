<?php
include '/xampp1/htdocs/blog/partial/_dbconnect.php';
$sno = $_GET['sno'];
$result = $conn->query("DELETE FROM latest_blog WHERE sno = $sno");
if ($result) {
    echo "<script>window.location='http://localhost/blog/latest_blog.php?latest_blog_delete=true'</script>";
}
?>