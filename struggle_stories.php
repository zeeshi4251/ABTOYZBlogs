<?php
include 'partial/_dbconnect.php';
$struggle_stories_upload_alert = false;
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

                <!-- Struggle Stories Blog Section Start-->
                <div class="struggle-stories m-5" id="struggle-stories">
                    <?php
                    if (isset($_GET['struggle_stories_uploaded'])) {
                        if ($_GET['struggle_stories_uploaded']) {
                            $struggle_stories_upload_alert = true;
                        } else {
                            echo "sory";
                        }
                    }
                    ?>
                    <?php
                    if ($struggle_stories_upload_alert) { ?>
                        <div class="alert alert-success alert-dismissible border border-warning bg-dark text-white border-5">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong><i class='fas fa-check-circle me-3'></i>Old Proverbs Uploaded Successfully!</strong>
                        </div>

                    <?php } ?>
                    <h2 class="mb-3">Old Proverbs Form</h2>
                    <form action="partial/_struggle_stories_blog.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 form-div">
                            <div class="mb-3 form-div">
                                <label for="s-image" class="form-label">Image (Size 400 x 400)</label>
                                <input type="file" class="form-control" name="s-image" id="s-image">
                            </div>
                            <label for="s-title" class="form-label">Struggle Stories Title</label>
                            <input type="text" class="form-control" id="s-title" name="s-title" aria-describedby="emailHelp">
                        </div>
                        <!-- <div class="mb-3 form-div">
                            <label for="d-des" class="form-label">Display Blog Description (40 Words)</label>
                            <input type="text" class="form-control" name="s-des" id="d-des">
                        </div>
                        <div class="mb-3 form-div">
                            <label for="d-des-m" class="form-label">Display Blog Description More (Unlimited
                                Words)</label>
                            <input type="text" class="form-control" row="3" name="s-des-m" id="d-des-m">
                        </div> -->
                        <button type="submit" class="btn upload-blog mt-4">Upload Proverbs</button>
                    </form>
                </div>
                <h3 class="text-center p-4">Uploaded Blogs</h3>
                <div class="mt-5 container overflow-auto">
                    <table class="table overflow-auto">
                        <tr>
                            <th>S.No</th>
                            <th>Blog Title</th>
                            <!-- <th>Blog Description</th> -->
                            <!-- <th>Blog Description More</th> -->
                            <th>Blog Img</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM struggle_stories_blog";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td class="fw-bold"><?php echo $row['sno'] ?></td>
                                <td><?php echo $row['struggle_stories_blog_title'] ?></td>
                                <!-- <td><?php// echo $row['struggle_stories_blog_description'] ?></td> -->
                                <!-- <td><?php// echo $row['struggle_stories_blog_des_more'] ?></td> -->

                                <td>
                                    <div><img src="partial/<?php echo $row['struggle_stories_blog_image'] ?>" alt="" width="150px" class="img-fluid"></div>
                                </td>
                                <td><?php echo $row['Date'] ?></td>
                                <td><a href="delete/_d_struggle_stories.php?sno=<?php echo $row['sno'] ?>" class="btn btn-danger m-1"><i class="fa-solid fa-trash"></i></a>
                                    <a href="edit/_e_struggle_stories.php?esno=<?php echo $row['sno'] ?>" class="btn btn-info m-1"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- Struggle Stories Blog Section End-->
    </div>
</body>

</html>