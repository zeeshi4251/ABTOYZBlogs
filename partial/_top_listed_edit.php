<?php
include '_dbconnect.php';


$sno = $_GET['esno'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $blog_title = $_POST['title'];
    $blog_des = $_POST['blogDes'];
    $blog_more_des = $_POST['blogDesMore'];
    // $blog_img = $_POST['img'];
    // Images upload system

    // echo $_FILES['img'];
    $fileName =  $_FILES['img']['name'];
    $fileLocation = $_FILES['img']['tmp_name'];
    $folder = "Images/" . $fileName;
    // echo $folder;
    move_uploaded_file($fileLocation, $folder);

    $result = $conn->query("UPDATE `top_listed_blog` SET `top_listed_blog_title`='$blog_title',`top_listed_blog_description`='$blog_des',`top_listed_blog_more_description`='$blog_more_des',`top_listed_blog_img`='$folder' WHERE sno =$sno ");

    if ($result) {
        echo "Yes";
        header("location:http://localhost/blog/top_listed_blog.php?record_edit_successfully=true");
    } else {
        echo 'No';
    }
}
?>
<!doctype html>
<html lang="en">
<?php include '_head_tag.php' ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 left-side ">
            </div>
            <div class="col-lg-10 right-side p-5">
                <div class="d-flex flex-column" id="top-list">
                    <h2>Top listed Blog Edit Form</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php
                        $result = $conn->query("SELECT * FROM top_listed_blog WHERE sno = $sno");
                        while ($row = $result->fetch_assoc()) { ?>

                            <div class="mb-3 form-div">
                                <label for="title" class="form-label">Top Listed Blog Title</label>
                                <input type="text" class="form-control" value="<?php echo $row['top_listed_blog_title'] ?>" id="title" name="title" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 form-div">
                                <label for="des" class="form-label">Blog Description</label>
                                <textarea name="blogDes" id="des" class="form-control" cols="30" rows="3"><?php echo $row['top_listed_blog_description'] ?></textarea>
                            </div>
                            <div class="mb-3 form-div">
                                <label for="b-des-m" class="form-label">Blog Description More</label>
                                <textarea name="blogDesMore" id="b-des-m" class="form-control" cols="30" rows="5"><?php echo $row['top_listed_blog_more_description'] ?></textarea>
                            </div>
                            <div class="mb-3 form-div">
                                <label for="img" class="form-label">Image (Size 1920 x 1278)</label><br>
                                <input type="file" class="form-control" name="img" id="img">
                                <img src="<?php echo $row['top_listed_blog_img'] ?>" alt="" class="img-fluid mt-3" width="300px">
                            </div>
                            <button type="submit" class="btn upload-blog mt-5">Update Blog</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>