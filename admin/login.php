<?php session_start(); ?>
<?php include("../connect.php"); ?>

<!DOCTYPE html>
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
    <?php var_dump($_SESSION); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-4 col-md-3">
                <div class="jumbotron mt-4">
                    <h2 class="display-4 text-center mb-4">Log In</h2>
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Log In</button>

                    </form>


                    <?php
                    if (isset($_POST['login'])) {
                        extract($_POST);
                        if (!empty($username)) {
                            if (!empty($password)) { 
                                $query = "SELECT * FROM admins WHERE username='$username'";
                                $result = mysqli_query($conn, $query);

                                if( mysqli_affected_rows($conn) > 0) {
                                    $user = mysqli_fetch_assoc($result);
                                    
                                    if( $user['password'] == $password) {
                                        srand(time());
                                        $token = rand(10000,99999);
                                        $query = "UPDATE admins SET token='$token' WHERE username='$username'";
                                        mysqli_query($conn, $query);
                                        $_SESSION['LOGGED_IN'] = true;
                                        $_SESSION['username'] = $username;
                                        $_SESSION['token'] = $token;
                                        header("Location: index.php");   
                                        
                                    } else{
                                        echo "<div class='alert alert-danger'>Username/Password is wrong</div>";
                                    }
                                } else {
                                    echo "<div class='alert alert-danger'>Username/Password is wrong</div>";
                                }
                            } else {
                                echo "<div class='alert alert-danger'>Password is empty</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger'>Username is empty</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>