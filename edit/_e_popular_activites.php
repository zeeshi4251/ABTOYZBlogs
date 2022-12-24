<?php
include '../partial/_dbconnect.php';
$upload_alert = false;
$sno = $_GET['esno'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $popular_activites_title = $_POST['popular_activites_title'];

    // Images upload system

    // echo $_FILES['img'];
    $fileName =  $_FILES['img']['name'];
    $fileLocation = $_FILES['img']['tmp_name'];
    $folder = "../partial/" . $fileName;
    move_uploaded_file($fileLocation, $folder);

    $result = $conn->query("UPDATE `popular_activites` SET `popular_actvites_image`='$folder',`popular_activites_title`='$popular_activites_title'  WHERE sno=$sno");

    if ($result) {
        echo "<script>window.location='http://localhost/blog/popular_activites.php?popular_activites_edit=success'</script>";
        // echo "yes";
    } else {
        echo "NO";
    }
}
?>
<!doctype html>
<html lang="en">

<?php include '../partial/_head_tag.php' ?>

<body style="background-color: #2b7a78;">
    <div class="container-fluid">
        <div class="d-flex flex-column p-3 m-3" id="top-list">
            <h2 class="heading text-center m-5">Popular Activites Blog Edit Form</h2>
            <form action="" method="POST" class="d-flex justify-content-center align-items-center flex-column" enctype="multipart/form-data">
                <div class="row  d-flex justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php
                            $result = $conn->query("SELECT * FROM popular_activites WHERE sno =$sno");
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="mb-3 form-div col-lg-6">
                                    <label for="title" class="form-label">Popular_Activites Blog Title</label>
                                    <input type="text" class="form-control" value="<?php echo $row['popular_activites_title'] ?>" id="title" name="popular_activites_title" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 form-div col-lg-6">
                                    <label for="img" class="form-label">Top Listed Blog Image (Size Height-1920 Weight-1278)</label>
                                    <input type="file" class="form-control" name="img" id="img">
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn upload-blog mt-5">Upload Blog</button>
            </form>
        </div>
    </div>
</body>

</html>