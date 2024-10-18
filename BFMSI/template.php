<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="templatestyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
    <?php
        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "ok"){
            echo '<div class="wrapper">';
            include "sidebar.php";
            echo '<div class="main">';
            include "header.php";
            echo '<div class="scrollcontent">';
            if(isset($_GET["route"])){
                if ($_GET["route"] == 'dashboard' ||
                    $_GET["route"] == 'schedule' || 
                    $_GET["route"] == 'inspection' ||
                    $_GET["route"] == 'marketlist' ||
                    $_GET["route"] == 'feedback' ||
                    $_GET["route"] == 'reports' ||
                    $_GET["route"] == 'permits' ||
                    $_GET["route"] == 'notifications' ||
                    $_GET["route"] == 'userboard' ||
                    $_GET["route"] == 'logout'){
                    include "".$_GET["route"].".php";
                }else{
                /*include "modules/404.php";*/
                }

            }else{
            include "dashboard.php";
            }

             include "footer.php";
             echo '</div>';
             echo '</div>';
             echo '</div>';


        }else{
        include "login.php";
        }
            
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="templatescript.js"></script>

</body>
</html>