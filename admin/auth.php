<?php 
    if( isset($_SESSION["LOGGED_IN"]) && $_SESSION['LOGGED_IN'] == true) {
        $username = $_SESSION['username'];
        $token = $_SESSION['token'];
        $query = "SELECT * FROM admins WHERE username='$username' AND token='$token'";
        mysqli_query($conn, $query);

        if( !mysqli_affected_rows($conn) > 0){
            session_destroy();
            header("Location: login.php");    
        }
    } else {
        header("Location: login.php");
    }
?>