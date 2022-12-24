<?php
include "_dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];

    $result1 = $conn->query("INSERT INTO email (email) VALUES ('$email')");

    if ($result1) {
        session_start();
        $_SESSION['email'] = true;
        echo  "<script>window.location='http://localhost/blog?emailSend=true'</script>";
    } else {
        echo "No";
    }
}
?>