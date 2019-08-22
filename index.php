<?php include("connect.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <header class="site-header my-4">
            <div class="jumbotron">
                <h1 class="text-center">Simple Blog</h1>
            </div>
        </header>
        <?php
        $query = "SELECT * FROM posts ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        $rows_count = mysqli_num_rows($result);

        if ($rows_count > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $timestamp = date_create($post['publish_date']);
                $date = date_format($timestamp, "M d, Y");

                ?>
        <article class="post">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title my-0"><?php echo $post['title']; ?></h5>
                </div>
                <div class="card-body">

                    <small><?php echo $date; ?></small>
                    <p class="card-text"><?php echo $post['content']; ?></p>
                </div>

            </div>
        </article>
        <?php
            }
        } else { }
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>