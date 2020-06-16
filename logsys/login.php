<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In: TourZilla</title>

    <!-- Start Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://1.bp.blogspot.com/-H6yIJEZyilk/XtJ85UGC1dI/AAAAAAAABDw/W3xceDuoXVMyyleCqaZLwtBxICyi2revgCK4BGAsYHg/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://1.bp.blogspot.com/-IDzFUTi2F-4/XtJ8Zi09aVI/AAAAAAAABDY/sf-gCRDwxVMnhJM7O47UNIgjgjGRyPJzQCK4BGAsYHg/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://1.bp.blogspot.com/-HcV2D-ldlAk/XtJ8SH9ZqmI/AAAAAAAABDM/pT0GSdCw2LAZj6khbejhXwBgqarxC2g2QCK4BGAsYHg/favicon-16x16.png">
    <!-- End Favicon -->

    <!-- Start CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- End CSS -->

    <!-- Start JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- End JS -->

    <style>
        .formback {
            background-image: linear-gradient(#bdc3c7, #2c3e50);

        }

        .para1 {
            color: white;
            text-align: center;
        }

        .zillacolor {
            color: #f27926;
        }
    </style>

</head>

<body class="bg-light">
    <?php require 'partials/_nav.php' ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <section>
        <div class="container-fluid pb-5">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5 formback">
                        <div class="card-title">
                            <h1 class="text-center"><a href="/mytourzilla/logsys/login.php"
                                    class="text-decoration-none text-dark">Sign In: TourZilla</a></h1>
                        </div>

                        <div class="container">
                            <h1 class="text-center">"You Don't Need Magic To Disappear, All You Need Is A Destination"
                            </h1>

                            <div class="card-body">
                                <form action="login.php" method="post">
                                    <div class="form-group">

                                        <input type="text" class="form-control mb-2 text-center" name="username"
                                            aria-describedby="emailHelp" placeholder="UserName or Email address">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control mb-2 text-center" name="password"
                                            placeholder="Password">
                                    </div>

                                    <span class="para1 text-center mt-2"><a href="/mytourzilla/help-centre/"
                                            class="reference text-decoration-none zillacolor">Forgot your
                                            password?</a></span>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary mr-2 mb-2">Sign In</button>
                                        <input class="btn btn-primary mb-2" type="reset" value="Reset">
                                    </div>
                                </form>
                                <span class="para1 mb-2 text-center">New to TourZilla? <a href="/mytourzilla/logsys/signup.php"
                                        class="reference text-decoration-none  zillacolor">Create an
                                        account</a></span>
                            </div>
                            
                        </div>

                    </div>

    </section>

    <!-- footer -->
    <footer class="footer bg-dark text-white p-1 pt-3">
        <center>
            <p><a href="https://www.facebook.com" target="_blank"><i
                        class="fa fa-facebook text-primary fa-2x ml-3"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i
                        class="fa fa-instagram text-danger fa-2x ml-3"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter text-info fa-2x ml-3"></i></a>
                <a href="https://in.linkedin.com" target="_blank"><i
                        class="fa fa-linkedin text-primary fa-2x ml-3"></i></a>
            </p>
            <h5 class="text-center">Copyright © 2020, Designed by <a href="/mytourzilla"
                    class="tourcolor font-weight-bolder text-decoration-none text-link footfontsize"
                    rel="noopener noreferrer" target="_blank">Tour<span class="zillacolor">Zilla</span></a> Team — <a
                    href="http://www.drinkingcode.tech"
                    class="zillacolor font-weight-bolder text-decoration-none text-link footfontsize"
                    rel="noopener noreferrer" target="_blank">@drinkingcode.tech</a>
            </h5>
        </center>

    </footer>
    <!-- end footer -->
</body>

</html>