<?php
include 'partial/_dbconnect.php';
$upload_alert = false;
?>
<!doctype html>
<html lang="en">
<?php include 'partial/_head_tag.php' ?>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 left-side ">
                <?php include 'partial/_side_panel.php' ?>
            </div>
            <div class="col-lg-10 right-side p-5">
                <div class="d-flex flex-column" id="top-list">
                    <?php
                    if (isset($_GET['top_listed_blog_uploaded'])) {
                        if ($_GET['top_listed_blog_uploaded']) {
                            $upload_alert = true;
                        } else {
                            echo "sory";
                        }
                    }
                    ?>
                    <?php
                    if ($upload_alert) { ?>
                        <div class="alert alert-success alert-dismissible border border-warning bg-dark text-white border-5">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong><i class='fas fa-check-circle me-3'></i>Top Listed Blog Uploaded Successfully!</strong>
                        </div>

                    <?php } ?>
                    <h2>Top listed Blog Post Form</h2>
                    <form action="partial/_top_listed_blog.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 form-div">
                            <label for="title" class="form-label">Top Listed Blog Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 form-div">
                            <label for="des" class="form-label">Blog Description (40 Words)</label>
                            <!-- <input type="text" class="form-control" name="blogDes" id="des"> -->
                            <textarea name="blogDes" id="des" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                        <div class="mb-3 form-div">
                            <label for="b-des-m" class="form-label">Blog Description More (Unlimited Words)</label>
                            <!-- <input type="text" class="form-control" row="3" name="blogDesMore" id="b-des-m"> -->
                            <textarea name="blogDesMore" id="b-des-m" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                        <div class="mb-3 form-div">
                            <label for="img" class="form-label">Image (Size 1278 x 1920)</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>
                        <button type="submit" class="btn upload-blog mt-5">Upload Blog</button>
                    </form>
                </div>
                <h3 class="text-center p-4">Uploaded Blogs</h3>
                <div class="mt-5 container overflow-auto">
                    <table class="table overflow-auto">
                        <tr>
                            <th>S.No</th>
                            <th>Blog Title</th>
                            <th>Blog Description</th>
                            <th>Blog Description More</th>
                            <th>Blog Img</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM top_listed_blog";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td class="fw-bold"><?php echo $row['sno'] ?></td>
                                <td><?php echo $row['top_listed_blog_title'] ?></td>
                                <td><?php echo $row['top_listed_blog_description'] ?></td>
                                <td><?php echo $row['top_listed_blog_more_description'] ?></td>

                                <td>
                                    <div><img src="partial/<?php echo $row['top_listed_blog_img'] ?>" alt="" width="150px" class="img-fluid"></div>
                                </td>
                                <td><?php echo $row['Date'] ?></td>
                                <td><a href="delete/_d_top_listed.php?sno=<?php echo $row['sno'] ?>" class="btn btn-danger m-1"><i class="fa-solid fa-trash"></i></a>
                                    <a href="edit/_e_top_listed_blog.php?esno=<?php echo $row['sno'] ?>" class="btn btn-info m-1"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>