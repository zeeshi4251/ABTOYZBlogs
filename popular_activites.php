<?php
include 'partial/_dbconnect.php';
$popular_activites_uploaded_alert = false;
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
                <div class="popular-activites m-5" id="popular-activites">
                    <?php
                    if (isset($_GET['popular_activites_uploaded'])) {
                        if ($_GET['popular_activites_uploaded']) {
                            $popular_activites_uploaded_alert = true;
                        } else {
                            echo "sory";
                        }
                    }
                    ?>
                    <?php
                    if ($popular_activites_uploaded_alert) { ?>
                        <div class="alert alert-success alert-dismissible border border-warning bg-dark text-white border-5">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong><i class='fas fa-check-circle me-3'></i>Popular Activites Uploaded Successfully!</strong>
                        </div>

                    <?php } ?>
                    <h2 class="mb-3">Most Popular Activites Form</h2>
                    <form action="partial/_popular_activites.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 form-div">
                            <div class="mb-3 form-div">
                                <label for="p-image" class="form-label">Image (Size 400 x 400)</label>
                                <input type="file" class="form-control" name="p-image" id="p-image">
                            </div>
                            <label for="p-title" class="form-label">Most Popular Only Title</label>
                            <input type="text" class="form-control" id="p-title" name="p-title" aria-describedby="emailHelp">
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
                            <th>Blog Img</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM popular_activites";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td class="fw-bold"><?php echo $row['sno'] ?></td>
                                <td><?php echo $row['popular_activites_title'] ?></td>
                                <td>
                                    <div><img src="partial/<?php echo $row['popular_actvites_image'] ?>" alt="" width="150px" class="img-fluid"></div>
                                </td>
                                <td><?php echo $row['Date'] ?></td>
                                <td><a href="delete/_d_popular_actvites.php?sno=<?php echo $row['sno'] ?>" class="btn btn-danger m-1"><i class="fa-solid fa-trash"></i></a>
                                    <a href="edit/_e_popular_activites.php?esno=<?php echo $row['sno'] ?>" class="btn btn-info m-1"><i class="fa-solid fa-pen-to-square"></i></a>
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