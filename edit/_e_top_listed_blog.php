<?php
include '/xampp1/htdocs/blog/partial/_dbconnect.php';
$upload_alert = false;
$sno = $_GET['esno'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $top_listed_title = $_POST['title'];
    $top_listed_des = $_POST['top_listed_des'];
    $top_listed_des_more = $_POST['top_listed_des_more'];

    // Images upload system

    // echo $_FILES['img'];
    $fileName =  $_FILES['img']['name'];
    $fileLocation = $_FILES['img']['tmp_name'];
    $folder = "Images/" . $fileName;
    move_uploaded_file($fileLocation, $folder);

    $result = $conn->query("UPDATE top_listed_blog SET top_listed_blog_title='$top_listed_title', top_listed_blog_description= '$top_listed_des', top_listed_blog_more_description='$top_listed_des_more', top_listed_blog_img='$folder' WHERE sno = $sno");

    if ($result) {
        echo "<script>window.location='http://localhost/blog/top_listed_blog.php'</script>";
    }
}



?>
<!doctype html>
<html lang="en">

<?php include '/xampp1/htdocs/blog/partial/_head_tag.php' ?>

<body style="background-color: #2b7a78;">
    <div class="container-fluid">
        <div class="d-flex flex-column p-3 m-3" id="top-list">
            <h2 class="heading text-center m-5">Top Listed Blog Edit Form</h2>
            <form action="" method="POST" class="d-flex justify-content-center align-items-center flex-column" enctype="multipart/form-data">
                <div class="row  d-flex justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php
                            $result = $conn->query("SELECT * FROM top_listed_blog WHERE sno =$sno");
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="mb-3 form-div col-lg-6">
                                    <label for="title" class="form-label">Top Listed Blog Title</label>
                                    <input type="text" class="form-control" value="<?php echo $row['top_listed_blog_title'] ?>" id="title" name="title" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3 form-div col-lg-6">
                                    <label for="img" class="form-label">Top Listed Blog Image (Size Height-1278 Weight-1920)</label>
                                    <input type="file" class="form-control" name="img" id="img">
                                </div>
                                <div class="mb-3 form-div col-lg-12">
                                    <label for="des" class="form-label">Top Listed Blog Description (40 Words)</label>
                                    <textarea name="top_listed_des" id="" cols="30" class="form-control" rows="3"><?php echo $row['top_listed_blog_description'] ?></textarea>
                                </div>
                                <div class="mb-3 form-div col-lg-12">
                                    <label for="b-des-m" class="form-label">Top Listed Blog Description More (Unlimited
                                        Words)</label>
                                    <textarea name="top_listed_des_more" id="" cols="30" class="form-control" rows="4"><?php echo $row['top_listed_blog_more_description'] ?></textarea>
                                </div>
                        </div>

                    </div>
                <?php } ?>
                </div>
                <button type="submit" class="btn upload-blog mt-5">Upload Blog</button>
            </form>
        </div>
    </div>
</body>

</html>