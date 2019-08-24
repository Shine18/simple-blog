<?php session_start(); ?>
<?php include("../connect.php"); ?>
<?php include("auth.php"); ?>
<?php include("include/header.php"); ?>


<?php
    if (isset($_POST['create'])) {
        extract($_POST);

        $today = date('Y-m-d');

        $query = "INSERT INTO posts VALUES(NULL, '$title', '$content','$today')";
        $result = mysqli_query($conn, $query);
    } 
    elseif( isset($_POST['update'])){
        extract($_POST);
        $title = mysqli_real_escape_string($conn, $title);
        $content = mysqli_real_escape_string($conn, $content);
        $query = "UPDATE posts SET title='$title',content='$content' WHERE id=$id";
        $result = mysqli_query($conn, $query);
        
    }
?>

<?php 
    if (isset($_GET['action']) && $_GET['action'] == "delete"){
        mysqli_query($conn, "DELETE FROM posts WHERE id=" . $_GET['id']);
        // echo mysqli_error($conn);
    }
?>


<?php if (isset($_GET['action']) && $_GET['action'] == "new") : ?>
<div class="jumbotron">
    <h3 class="text">Create a Blog Post</h3>
    <hr>
    <form action="posts.php" method="POST">
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
        <button class="btn btn-primary" type="submit" name="create">Post</button>
    </form>
</div>

<?php elseif(isset($_GET['action']) && $_GET['action'] == "edit"): ?>
<div class="jumbotron">
    <?php 
        $id = $_GET['id'];
        $query = "SELECT * FROM posts WHERE id=" . $id;
        $results = mysqli_query($conn, $query);
    
        if( mysqli_num_rows($results) > 0){
            $post = mysqli_fetch_assoc($results);
        }
    ?>
    <h3 class="text">Edit</h3>
    <hr>
    <form action="posts.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];  ?>" />
        <div class="form-group">
            <label for="title">Title</label>
            <br>
            <input type="text" class="form-control" value="<?php echo $post['title']; ?>" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <br>
            <textarea name="content" class="form-control" id="content" cols="30" rows="5"><?php echo $post['content']; ?></textarea>
        </div>
        <button class="btn btn-primary" type="submit" name="update">Update</button>
    </form>
</div>


<?php else : ?>
<div class="posts-data">
    <div>
        <a href="posts.php?action=new" class="btn btn-primary">New Post</a>
    </div>
    <?php
        $result = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");
        if (mysqli_num_rows($result) > 0) : ?>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Published Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($post = mysqli_fetch_assoc($result)) : ?>
            <?php
                        $timestamp = date_create($post['publish_date']);
                        $date = date_format($timestamp, "M d, Y");
                        ?>

            <tr>
                <td><a href="?action=edit&id=<?php echo $post["id"]; ?>"><?php echo $post['title']; ?></a></td>
                <td><?php echo $date; ?></td>
                <td>
                    <a href="?action=edit&id=<?php echo $post['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="?action=delete&id=<?php echo $post['id']; ?>" class="btn btn-danger">Remove</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php else : ?>
    <h3>No Posts Data</h3>
    <?php endif;  ?>
</div>
<?php endif; ?>





<?php include("include/footer.php");
