<?php
$showAlert = false;
$showError = false;
// $showError2 = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    
    // if(empty($username) && empty($password) && empty($cpassword))
    //    {
    //        header('location:signup.php?error');
    //    }
    //    else{
    //     $showError2 = "Please Fill All Details!!";
    // }

    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
    
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up: TourZilla</title>

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
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success! </strong>Your account is now created and you can login by <span><a href="/mytourzilla/logsys/login.php"
            class="reference text-decoration-none">Clicking Here!!</a></span>
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
                            <h1 class="text-center"><a href="/mytourzilla/logsys/signup.php"
                                    class="text-decoration-none text-dark">Sign Up: TourZilla</a></h1>
                        </div>

                        <div class="container">
                            <h1 class="text-center">Be a Part of Emerging Family by just creating an account!!</h1>

                            <div class="card-body">
                                <form action="signup.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-2 text-center" name="username"
                                            aria-describedby="emailHelp" placeholder="UserName or Email address">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control mb-2 text-center" name="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control mb-2 text-center" name="cpassword"
                                            placeholder="Confirm Password">
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2 mb-2">Sign Up</button>
                                    <input class="btn btn-primary mb-2" type="reset" value="Reset">
                                </form>
                                <span class="para1 text-center mt-2"><a href="/mytourzilla/logsys/login.php"
                                        class="reference text-decoration-none zillacolor">Already have an
                                        account?</a></span>
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