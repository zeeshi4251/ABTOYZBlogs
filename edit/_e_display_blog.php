<?php
include '/xampp1/htdocs/blog/partial/_dbconnect.php';
$upload_alert = false;
$sno = $_GET['esno'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $display_blog_title = $_POST['display_title'];
    $display_blog_des = $_POST['display_des'];
    $display_blog_des_more = $_POST['display_des_more'];

    // Images upload system

    // echo $_FILES['img'];
    $fileName =  $_FILES['img']['name'];
    $fileLocation = $_FILES['img']['tmp_name'];
    $folder = "../partial/" . $fileName;
    move_uploaded_file($fileLocation, $folder);

    $result = $conn->query("UPDATE `display_blog` SET `display_blog_image`='$folder',`display_blog_title`='$display_blog_title',`display_blog_description`='$display_blog_des',`display_blog_description_more`='$display_blog_des_more' WHERE sno = $sno");

    if ($result) {
        echo "<script>window.location='http://localhost/blog/display_blog.php?display_blog_edit=success'</script>";
    } else {
        echo "NO";
    }
}
?>
<!doctype html>
<html lang="en">

<?php include '/xampp1/htdocs/blog/partial/_head_tag.php' ?>

<body style="background-color: #2b7a78;">
    <div class="container-fluid">
        <div class="d-flex flex-column p-3 m-3" id="top-list">
            <h2 class="heading text-center m-5">Display Blog Edit Form</h2>
            <form action="" method="POST" class="d-flex justify-content-center align-items-center flex-column" enctype="multipart/form-data">
                <div class="row  d-flex justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php
                            $result = $conn->query("SELECT * FROM display_blog WHERE sno =$sno");
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="mb-3 form-div col-lg-6">
                                    <label for="title" class="form-label">Display Blog Title</label>
                                    <input type="text" class="form-control" value="<?php echo $row['display_blog_title'] ?>" id="title" name="display_title" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 form-div col-lg-6">
                                    <label for="img" class="form-label">Top Listed Blog Image (Size Height-2560 Weight-1920)</label>
                                    <input type="file" class="form-control" name="img" id="img">
                                </div>
                                <div class="mb-3 form-div col-lg-12">
                                    <label for="des" class="form-label">Display Blog Description (40 Words)</label>
                                    <textarea name="display_des" id="" cols="30" class="form-control" rows="3"><?php echo $row['display_blog_description'] ?></textarea>
                                </div>
                                <div class="mb-3 form-div col-lg-12">
                                    <label for="b-des-m" class="form-label">Top Listed Blog Description More (Unlimited
                                        Words)</label>
                                    <textarea name="display_des_more" id="" cols="30" class="form-control" rows="4"><?php echo $row['display_blog_description_more'] ?></textarea>
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