<?php
include '/xampp1/htdocs/blog/partial/_dbconnect.php';
$sno = $_GET['sno'];
$result = $conn->query("DELETE FROM popular_activites WHERE sno = $sno");
if ($result) {
    echo "<script>window.location='http://localhost/blog/popular_activites.php?popular_actvites_delete=true'</script>";
}
?>
