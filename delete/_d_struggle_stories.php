<?php
include '/xampp1/htdocs/blog/partial/_dbconnect.php';
$sno = $_GET['sno'];
$result = $conn->query("DELETE FROM struggle_stories_blog WHERE sno = $sno");
if ($result) {
    echo "<script>window.location='http://localhost/blog/struggle_stories.php?struggle_stories_delete=true'</script>";
}
?>