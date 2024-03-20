<?php
session_start();
    
    if(isset($_GET['logout'])){

        session_destroy();
        header("location:login.php");

    }

    else{

        header("location:General Forum.php");

    }

?>

<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$_SESSION = array();

session_destroy();

header("Location: login.php");
exit;
?>
