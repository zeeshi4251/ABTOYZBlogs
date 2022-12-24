<?php
include 'partial/_dbconnect.php';
if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true){
    echo "<script>window.location='http://localhost/blog/'</script>";
}
?>
<?php include 'partial/_head_tag.php' ?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 left-side ">
                <?php include 'partial/_side_panel.php' ?>
                <a href="" class="Addional">Log Out</a><a href="" class="Addional" title="Go to Website">User Side</a>
            </div>
            <div class="col-lg-10 right-side" style="min-height: 100vh;">
                <div class="container d-flex justify-content-center align-items-center">
                    <h1>Well Come to AB TO YZ Blog Admin Side</h1>
                </div>
                <div class="container">
                    <h2 class="text-center m-5">Total Upload Blogs</h2>
                    <div class="row d-flex justify-content-enter align-items-center">
                        <div class="col-lg-3 d-flex justify-content-enter align-items-center flex-column">
                            <?php
                            $result = $conn->query("SELECT * FROM top_listed_blog");
                            $num = $result->num_rows;
                            ?>
                            <div class="card ccard d-flex justify-content-enter align-items-center flex-column" style="width:300px;">
                                <h3 class="p-2">Top Listed Blogs</h3>
                                <span class="text-center fs-2 bg-dark text-light w-100">
                                    <?php echo $num ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-enter align-items-center flex-column">
                            <?php
                            $result = $conn->query("SELECT * FROM display_blog");
                            $num1 = $result->num_rows;
                            ?>
                            <div class="card ccard d-flex justify-content-enter align-items-center flex-column" style="width:300px;">
                                <h3 class="p-2">Display Blog</h3>
                                <span class="text-center fs-2 bg-dark text-light w-100">
                                    <?php echo $num1 ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-enter align-items-center flex-column">
                            <?php
                            $result = $conn->query("SELECT * FROM struggle_stories_blog");
                            $num2 = $result->num_rows;
                            ?>
                            <div class="card ccard d-flex justify-content-enter align-items-center flex-column" style="width:300px;">
                                <h3 class="p-2">Struggle Stories</h3>
                                <span class="text-center fs-2 bg-dark text-light w-100">
                                    <?php echo $num2 ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-enter align-items-center flex-column">
                            <?php
                            $result = $conn->query("SELECT * FROM latest_blog");
                            $num3 = $result->num_rows;
                            ?>
                            <div class="card ccard d-flex justify-content-enter align-items-center flex-column" style="width:300px;">
                                <h3 class="p-2">Latest Blog</h3>
                                <span class="text-center fs-2 bg-dark text-light w-100">
                                    <?php echo $num3 ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 d-flex justify-content-enter align-items-center flex-column">
                            <?php
                            $result = $conn->query("SELECT * FROM popular_activites");
                            $num4 = $result->num_rows;
                            ?>
                            <div class="card ccard d-flex justify-content-enter align-items-center flex-column" style="width:300px;">
                                <h3 class="p-2">Popular Stories</h3>
                                <span class="text-center fs-2 bg-dark text-light w-100">
                                    <?php echo $num4 ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>