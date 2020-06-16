<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin = false;
}
echo '<!-- Start NavBar -->
<nav class="navborder navbar navbar-expand-lg navbar-dark navbackcolor sticky-top">
    <a class="navbar-brand mr-5" href="/mytourzilla">
        <img src="https://1.bp.blogspot.com/-Z-6kAzul11c/Xs4HaF7Aq-I/AAAAAAAABCE/SkJFGf3W4SYJ1cMSxP95U8mms1u74GGFACK4BGAsYHg/w200-h73/Logo.png"
            alt="" loading="lazy" width="150px" height="40px" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbar-right">
            <li class="nav-item font-weight-bold">
                <a class="nav-link mr-3" href="#">Hotels</a>
            </li>
            <li class="nav-item font-weight-bold">
                <a class="nav-link mr-3" href="#">Dine-In</a>
            </li>

            <li class="nav-item font-weight-bold">
                <a class="nav-link mr-3" href="#">Offers</a>

            </li>

            <li class="nav-item font-weight-bold">
                <a class="nav-link mr-3" href="/mytourzilla/blog/">Blog</a>

            </li>
            <li class="nav-item font-weight-bold">
                <a class="nav-link mr-3" href="#">Explore
                    India!!</a>

            </li>
            <li class="nav-item font-weight-bold">
                <a class="nav-link mr-3" href="#">About</a>

            </li>
            <li class="nav-item font-weight-bold">
                <a class="nav-link mr-3" href="/mytourzilla/help-centre/">Help Centre</a>

            </li>';
      
      if(!$loggedin){
      echo
      '<li class="nav-item dropdown mr-3 font-weight-bold">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
      </a>
      <div class="dropdown-menu navsub aria-labelledby=" navbarDropdown">
          <a class="dropdown-item font-weight-bold"
              href="/mytourzilla/logsys/login.php">Sign In</a>
          <a class="dropdown-item font-weight-bold"
              href="/mytourzilla/logsys/signup.php">Sign Up</a>
      </div>
  </li>
</ul>
<svg class="bi bi-person-circle" width="3em" height="45px" viewBox="0 0 16 16" fill="currentColor"
xmlns="http://www.w3.org/2000/svg">
<path
    d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
</svg>
<span class="font-weight-bold">&nbsp;&nbsp; Hi, Welcome!!</span>
</div>
</nav>
<!-- End NavBar -->
';

}
    

    if($loggedin){
        echo
        '<li class="nav-item font-weight-bold">
      <a class="nav-link mr-3" href="/mytourzilla/logsys/logout.php">Sign Out</a>

  </li>
  </ul>
  <svg class="bi bi-person-circle" width="3em" height="45px" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
            </svg>
            <span class="font-weight-bold">&nbsp;&nbsp; Welcome Back!!</span>
    </div>
</nav>
<!-- End NavBar -->';
      }
      
?>