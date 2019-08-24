<?php 
    $filename = basename($_SERVER['SCRIPT_NAME']);
    
    $logged_in = false;
    $redirect = false;

    if( isset($_SESSION["LOGGED_IN"]) && $_SESSION['LOGGED_IN'] == true) {
        $username = $_SESSION['username'];
        $token = $_SESSION['token'];
        $query = "SELECT * FROM admins WHERE username='$username' AND token='$token'";
        mysqli_query($conn, $query);

        if( !mysqli_affected_rows($conn) > 0){
            session_destroy(); 
        } else {
            $logged_in = true;
        }
    }

    if ($logged_in){
        if ($filename == "login.php"){
            $redirect = "index.php";
        }
    } else {
        if( $filename != "login.php"){
            $redirect = "login.php";
        }
    }

    if ($redirect){
        header("Location: $redirect");
    }
?>