<?php
include 'partial/_dbconnect.php';
$latest_blog_uploaded_alert = false;

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
            <div class="col-lg-10 right-side">
                <!-- Top Listed Blog Section Start -->

                <!-- Latest Blog Section Start-->

                <div class="Latest-blog m-5" id="Latest-blog">
                    <?php
                    if (isset($_GET['latest_blog_uploaded'])) {
                        if ($_GET['latest_blog_uploaded']) {
                            $latest_blog_uploaded_alert = true;
                        } else {
                            echo "sory";
                        }
                    }
                    ?>
                    <?php
                    if ($latest_blog_uploaded_alert) { ?>
                        <div class="alert alert-success alert-dismissible border border-warning bg-dark text-white border-5">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong><i class='fas fa-check-circle me-3'></i>Latest Blog Uploaded Successfully!</strong>
                        </div>

                    <?php 
                      } 
                   ?>
                    <h2 class="mb-3">Latest Blog Form</h2>
                    <form action="partial/_latest_blog.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 form-div">
                            <div class="mb-3 form-div">
                                <label for="s-image" class="form-label">Image (Size 2400 x 3840)</label>
                                <input type="file" class="form-control" name="l-image" id="s-image">
                            </div>
                            <label for="l-title" class="form-label">Latest Blog Title</label>
                            <input type="text" class="form-control" id="l-title" name="l-title" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 form-div">
                            <label for="l-des" class="form-label">Latest Blog Description (40 Words)</label>
                            <input type="text" class="form-control" name="l-des" id="l-des">
                        </div>
                        <div class="mb-3 form-div">
                            <label for="l-des-m" class="form-label">Latest Blog Description More (Unlimited
                                Words)</label>
                            <input type="text" class="form-control" row="3" name="l-des-m" id="l-des-m">
                        </div>
                        <button type="submit" class="btn upload-blog mt-4">Upload latest Blog</button>
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
                        $sql = "SELECT * FROM latest_blog";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td class="fw-bold"><?php echo $row['sno'] ?></td>
                                <td><?php echo $row['latest_blog_title'] ?></td>
                                <td><?php echo $row['latest_blog_des'] ?></td>
                                <td><?php echo $row['latest_blog_description_more'] ?></td>

                                <td>
                                    <div><img src="partial/<?php echo $row['latest_blog_image'] ?>" alt="" width="150px" class="img-fluid"></div>
                                </td>
                                <td><?php echo $row['Date'] ?></td>
                                <td>
                                    <a href="delete/_d_latest_blog.php?sno=<?php echo $row['sno'] ?>" class="btn btn-danger m-1"><i class="fa-solid fa-trash"></i></a>
                                    <a href="edit/_e_latest_blog.php?esno=<?php echo $row['sno'] ?>" class="btn btn-info m-1"><i class="fa-solid fa-pen-to-square"></i></a>
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