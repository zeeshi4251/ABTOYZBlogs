<?php
include 'partial/_dbconnect.php';
?>
<?php include 'partial/_head_tag.php' ?>

<body>
    <div class="container mt-4">
        <h3 class="p-4">Admin Sign Up Form</h3>
            <form action="partial/_admin_signup.php" method="POST">
                <div>
                    <label for="">Admin_User_Name</label>
                    <input type="text" class="form-control" name="admin_userName" placeholder="Admin_User_Name">
                </div>
                <div class="mt-3">
                    <label for="">Admin_User_Password</label>
                    <input type="text" class="form-control" name="admin_password" placeholder="Admin_User_Password">
                </div>
                <button type="submit" class="rbmut m-4">New Admin Login</button>
            </form>
    </div>
</body>

</html>