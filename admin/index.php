<?php session_start(); ?>
<?php include("../connect.php"); ?>
<?php include("auth.php"); ?>
<?php include("include/header.php"); ?>


<?php var_dump($_SESSION); 
?>
    <div class="jumbotron">
        <div class="text-center">
            <p class="display-4">Manage Your blog from here</p>
            <a href="posts.php" class="btn btn-primary">Manage Posts</a>
            <a href="logout.php" class="btn btn-info">Log Out</a>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);

        $today = date('Y-m-d');

        $query = "INSERT INTO posts VALUES(NULL, '$title', '$content','$today')";
        $result = mysqli_query($conn, $query);

        var_dump($result);
    }

    ?>

<?php include("include/footer.php"); ?>