<?php include("../connect.php"); ?>
<?php include("include/header.php"); ?>

        <div class="jumbotron">
            <h3 class="text">Create a Blog Post</h3>
            <hr>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <br>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <br>
                    <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Post</button>
            </form>
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