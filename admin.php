
<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        box-sizing: border-box;
    }
        #wrapper{
            max-width: 992px;
            margin: 0px auto;
            padding: 50px 15px;
        }
        h1{
            text-align: center;
        }
        input{
            padding: 15px 20px;
            font-size: 1.2em;
            display: block;
            width: 100%;
        }
        label{
            font-weight: bold;
            font-size: 1em;
            margin-top: 30px;
            margin-bottom: 8px;
            display: block;
        }
        textarea{
            font-size: 1em;
            width: 100%;
            padding: 10px;
        }
        form{
            border: 1px solid #ccc;
            background: #eee;
            padding: 50px;
        }
        button{
            background: #000;
            padding: 15px 20px;
            font-size: 1em;
            border: 1px solid #000;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="wrapper">
    <h1>A Simple Blog</h1>
    <h3>Create a Blog Post</h3>
    <form action="admin.php" method="POST">
        <div>
            <label for="title">Title</label>
            <br>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">Content</label>
            <br>
            <textarea name="content" id="content" cols="30" rows="5"></textarea>
        </div>
        <button type="submit" name="submit" >Post</button>
    </form>
    </div>

    <?php 
        if (isset($_POST['submit'])){
            extract($_POST);

            $today = date('Y-m-d');

            $query = "INSERT INTO posts VALUES(NULL, '$title', '$content','$today')";
            $result = mysqli_query($conn, $query);

            var_dump($result);

        }
    
    ?>
</body>
</html>