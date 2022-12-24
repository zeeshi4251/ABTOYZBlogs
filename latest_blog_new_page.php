<?php
include 'partial/_dbconnect.php';
$lsno = $_GET['lsno'];
?>
<?php include 'partial/_head_tag.php' ?>

<body>
    <?php include 'partial/_navbar.php' ?>
    <div class="container">
        <?php
        $result = $conn->query("SELECT * FROM latest_blog WHERE sno = $lsno");
        while ($row = $result->fetch_assoc()) {
        ?>
            <h2 class="mt-2 text-center newPageHeading p-3"><?php echo $row['latest_blog_title'] ?></h2>
            <h5 class="text-center newPageHeading p-4">Blog BY <i class="text-decoration-underline">Zeeshan Hamza</i></h5>
            <p class="fs-4 newPageHeading p-2"><?php echo $row['latest_blog_des'] ?></p>
            <div class="d-flex justify-content-center">
                <img src="./partial/<?php echo $row['latest_blog_image'] ?>" class="img-fluid" alt="" style="max-height:70vh ; ">
            </div>
            <p class="fs-4 newPageHeading p-3" style="letter-spacing: 1px;"><?php echo $row['latest_blog_description_more'] ?></p>

    </div>
<?php
        }
?>



<div class="container">
    <div class="d-flex justify-content-between head mt-5">
        <span>People also like to read this</span>
    </div>
    <div>
        <span class="bor" style="display:block;background-color: #2b7a78; height: 4px; border-radius: 4px; "></span>
    </div>
    <div class="latestpost mt-5">
        <div class="row">
            <?php
            // $result = $conn->query("SELECT * FROM latest_blog ORDER BY sno DESC");
            $result = $conn->query("SELECT * FROM latest_blog WHERE sno != $lsno ORDER BY sno DESC");
            if ($result->num_rows > 0) {
                while ($row3 = $result->fetch_assoc()) { ?>
                    <div class="col-lg-12 d-flex post flex-column">
                        <div class="d-flex latestDiv">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="partial/<?php echo $row3['latest_blog_image'] ?>" alt="" class="img-fluid py-2">
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="p-3">
                                        <?php echo $row3['latest_blog_title'] ?>
                                    </h5>
                                    <p class="p-2" style="color: gray;"><i class="fa-regular fa-user"></i> <i><b>Zeeshan
                                                Hamza</b></i>
                                        <i class="fa-regular fa-clock"></i>
                                        <?php echo $row3['Date'] ?>
                                    </p>
                                    <p class="m-2">
                                        <?php echo $row3['latest_blog_des'] ?><span> . . .</span>
                                    </p>
                                    <a href="latest_blog_new_page.php?lsno=<?php echo $row3['sno'] ?>" target="_black" class="btn rmbut m-2">Read More</a>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        <p class="p-1 lp" id="latest_blog_p" style="display: none;">
                            <?php echo $row3['latest_blog_description_more'] ?>
                        </p>

                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <a href="http://localhost/blog/" class="nav-link newPageHeading fs-5 m-4">If You you want to read more <span class="text-decoration-underline text-info">Click Here</span></a>
</div>
<?php include 'partial/_footer.php' ?>
</body>

</html>