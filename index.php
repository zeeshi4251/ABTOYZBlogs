<?php
include 'partial/_dbconnect.php';
// $detailSubmitAlert = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userName = $_POST['userName'];
    $number = $_POST['number'];
    $thing = $_POST['thing'];

    if ($userName != 1) {
        $result = $conn->query("INSERT INTO user (User_Name,Number,Thing) VALUES ('$userName','$number','$thing')");
        if ($result) {
            $detailSubmitAlert =  true;
        } else {
            echo "NO";
        }
    } else {
        echo "User Name Already Exiest";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABTOYZ_info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="shortcut icon" href="./img/ABTOYZ.png" type="image/x-icon">
    <!-- Foont Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'partial/_navbar.php' ?>
    <!-- <div class="container mt-3 first d-flex justify-content-center align-items-center flex-column">
        <h1>ABTOYZ_info</h1>
        <p>Here we can give you a to z information about our Bloges</p>
    </div> -->

    <!-- Top Listed Blog Section Start -->

    <?php
    $result = $conn->query("SELECT * FROM top_listed_blog ORDER BY sno DESC");
    if ($result->num_rows > 0) {
        ($row = $result->fetch_assoc())
    ?>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-6 fblogimg">
                    <img src="partial/<?php echo $row['top_listed_blog_img'] ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h4 class="mt-3 mb-3 fblogheading" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        <?php echo $row['top_listed_blog_title'] ?>
                    </h4>
                    <span class="p-4" style="color: gray;font-weight:600">By <i><b>Zeeshan Hamza</b></i>: at
                        <?php echo $row['Date'] ?>
                    </span>
                    <p class="mt-3 text-justify" style="letter-spacing: 1px; font-size:larger;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        <?php echo $row['top_listed_blog_description'] ?> <span class="text-decoration-underline" style="cursor: pointer; color:#3aafa9" id="readmore" onclick="readMore()">Read More</span>
                    </p>
                </div>
                <p class="text-justify" id="topMore" style="display: none ;letter-spacing: 1px; font-size:larger;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?php echo $row['top_listed_blog_more_description'] ?></p>

            </div>
        </div>
    <?php
    } ?>

    <!-- Top Listed Blog Section End -->


    <!-- This is for advertisement only -->

    <!-- <div class="container d-flex justify-content-center align-items-center border border-dark">
        <p class="p-3">Reserve for advertisment</p>
    </div> -->



    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex justify-content-between head">
                    <span>Travel the World</span>
                    <span><a href="">View All</a></span>
                </div>
                <div>
                    <span class="bor"></span>
                </div>
                <div class="sblogimg mt-4 d-flex justify-content-center flex-column text-center">

                    <!-- Display Blog Section Start -->

                    <?php
                    $result = $conn->query("SELECT * FROM display_blog ORDER BY sno DESC");
                    if ($result->num_rows > 0) {
                        $row1 = $result->fetch_assoc() ?>

                        <img src="partial/<?php echo $row1['display_blog_image'] ?>" alt="" class="img-fluid">
                        <h4 class="mt-3">
                            <?php echo $row1['display_blog_title'] ?>
                        </h4>
                        <p class="" style="color: gray;"><i class="fa-regular fa-user"></i> Blog by <i><b>Zeeshan
                                    Hamza</b></i> <i class="fa-regular fa-clock"></i>
                            <?php echo $row1['Date'] ?>
                        </p>
                        <p>
                            <?php echo $row1['display_blog_description'] ?><span id="dots">...</span>
                        </p>
                        <a class="btn rmbut" id="display_read" onclick="display_read_btn()">Read More</a>
                        <p style="text-align: start; display: none;" id="display_more_p" class="newPageHeading">
                            <?php echo $row1['display_blog_description_more'] ?>
                        </p>
                    <?php
                    }
                    ?>

                    <!-- Display Blog Section End -->

                    <div class="mt-4">
                        <div class="head later">
                            <span class="text-align">Old Proverbs</span>
                            <span class="bor"></span>
                        </div>

                        <div class="row mt-3 justify-content-around align-items-center">

                            <!-- Old Proverbs Section Start -->
                            <?php
                            $result = $conn->query("SELECT * FROM struggle_stories_blog order by sno desc");
                            if ($result->num_rows > 0) {
                                $counter = 0;
                                $max = 4;
                                    while ($row2 = $result->fetch_assoc() and ($counter < $max)) {
                                        $counter++; ?>
                                    <div class="col-md-6 d-flex mini justify-content-start align-items-center pt-2">
                                        <img src="partial/<?php echo $row2['struggle_stories_blog_image'] ?>" alt="" class="img-fluid m-1">
                                        <div>
                                            <h5 class="">
                                                <?php echo $row2['struggle_stories_blog_title'] ?>
                                            </h5>
                                            <p class="" style="color: gray;">
                                                <!-- <i class="fa-regular fa-user"></i>
                                                <i class="fa-regular fa-clock"></i> -->
                                            </p>
                                        </div>
                                    </div>

                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between head mt-5">
                    <span>Latest Blog</span>
                </div>
                <div>
                    <span class="bor"></span>
                </div>

                <div class="latestpost mt-5">
                    <div class="row">

                        <!-- latest Blog Section Start -->
                        <?php
                        $result = $conn->query("SELECT * FROM latest_blog ORDER BY sno DESC");
                        if ($result->num_rows > 0) {
                            while ($row3 = $result->fetch_assoc()) { ?>
                                <div class="col-lg-12 d-flex post flex-column pt-2">
                                    <div class="d-flex latestDiv">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <img src="partial/<?php echo $row3['latest_blog_image'] ?>" alt="" class="img-fluid" style="width: 100%; height: auto;">
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div>
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
                                        </div>
                                    </div>
                                    <p class="p-1 lp" id="latest_blog_p" style="display: none;">
                                        <?php echo $row3['latest_blog_description_more'] ?>
                                    </p>

                                </div>
                        <?php }
                        } ?>

                        <!-- latest Blog Section End -->

                    </div>
                </div>
                <!-- <div class="d-flex jutify-content-center align-items-center flex-column mt-5">
                    <div>
                        <span>1</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>3</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>4</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>Next &nbsp;&nbsp;<i class="fa-sharp fa-solid fa-arrow-right"></i></span>
                    </div>
                </div> -->
            </div>
            <div class="col-md-4">
                <!-- Reserve for right Side Working -->
                <!-- <div class="d-flex justify-content-center flex-column">
                    <div class="head">
                        <span class="">Advertisement</span>
                        <span class="bor"></span>
                    </div>
                    <div class="ad mt-4 d-flex justify-content-center">
                        <img src="./img/ad.png" alt="" class="img-fluid">
                    </div>
                </div> -->
                <div class="">

                    <!-- Popular Activites Section Start -->
                    <div class="head">
                        <span class="">Most Popular</span>
                        <span class="bor"></span>
                    </div>
                    <?php
                    $result = $conn->query("SELECT * FROM popular_activites order by sno desc");

                    if ($result->num_rows > 0) {
                        $counter = 0;
                        $max = 4;
                        while ($row4 = $result->fetch_assoc() and ($counter < $max)) {
                            $counter++; ?>
                            <div class="poimg d-flex mt-2">
                                <img src="partial/<?php echo $row4['popular_actvites_image'] ?>" alt="">
                                <p class="p-3">
                                    <?php echo $row4['popular_activites_title'] ?>
                                </p>
                            </div>
                    <?php }
                    } else {
                        echo "yes";
                    }
                    ?>
                    <!-- Popular Activites Section End -->
                </div>
                <div class="head mt-5">
                    <span class="">Subscribe For Latest</span>
                    <span class="bor"></span>
                    <form action="partial/_email_submit.php" method="POST" class="mt-2">
                        <input type="email" name="email" class="form-control" placeholder="abc@gmail.com">
                        <button class="btn rmbut mt-2" type="submit">Submit</button>
                    </form>
                </div>
                <div class="head mt-5">
                    <span class="">Comments</span>
                    <span class="bor"></span>
                    <form action="" class="mt-2">
                        <?php
                        if ($_SESSION['email'] = true) {
                        ?>
                            <textarea name="" id="" cols="" rows="4" class="form-control" placeholder="PLease Add Your Feedback about this website"></textarea>
                        <?php } else {
                        ?>
                            <textarea name="" id="" type="dis" cols="" rows="4"  class="form-control" placeholder="PLease Add Your Feedback about this website"> Please first submit your Email</textarea>

                        <?php
                        } ?>
                        <a href="#" class="btn rmbut mt-2">Send</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="head">
                        <span class="">Contect From</span>
                        <span class="bor"></span>
                        <div>

                            <form action="" method="POST" class="mt-3 d-flex flex-column">
                                <input type="text" class="form-control" name="userName" id="" required placeholder="Enter Your Full Name"><br>
                                <input type="text" name="number" id="" class="form-control" placeholder="+923xx-xxxxxxxx"><br>
                                <input type="text" name="thing" id="" placeholder="Your Faviourt Thing (Optional)" class="form-control"><br>
                                <!-- <a href="#" class="btn rmbut mt-2">Send</a> -->
                                <button type="submit" class="btn rmbut mt-2">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'partial/_footer.php' ?>
    <script>
        function readMore() {
            const x = document.getElementById("topMore");
            const y = document.getElementById("readmore");
            // x.style.display="none";
            if (x.style.display === "none") {
                x.style.display = "block";
                y.innerHTML = "Read Less"
            } else {
                x.style.display = "none";
                y.innerHTML = "Read More"
            }
        }

        function display_read_btn() {
            const display_read_btn = document.getElementById("display_read");
            const display_more_p = document.getElementById("display_more_p");
            const dots = document.getElementById("dots");
            if (display_more_p.style.display === "none") {
                display_more_p.style.display = "block";
                display_read_btn.innerHTML = "Read Less";
                display_read_btn.style.display = "none";
                dots.style.display = "none";
            }
            // else {
            //     display_more_p.style.display = "none";
            //     display_read_btn.innerHTML = "Read More";
            // }
        }

        function latest_blog() {
            const latest_blog_btn = document.getElementById("latest_blog_btn");
            const latest_blog_p = document.getElementById("latest_blog_p");
            if (latest_blog_p.style.display === "none") {
                latest_blog_p.style.display = "block";
                latest_blog_btn.innerHTML = "Read Less";
            } else {
                latest_blog_p.style.display = "none";
                latest_blog_btn.innerHTML = "Read More";
            }
        }
    </script>
</body>

</html>