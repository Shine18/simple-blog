<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit">
    </form>

    
    <?php
        
        
        // username: admin password: 1234
        if( isset( $_POST['user'] ) ) {   # if someone has submitted the form
            
            if( empty($_POST['user']) ) {
                echo "Username is empty";
            } else {

                if( empty($_POST['pass'])) {
                    echo "Password is empty";
                } else {

                    if( $_POST['user'] == "admin" ){

                        if( $_POST['pass'] == "1234" ){

                            echo "You're successfully logged in!";
                            
                        } else {
                            echo "Username/password is wrong";
                        }

                    } else{
                        echo "Username/password is wrong";
                    }
                }

            }
        }

    ?>
</body>
</html>