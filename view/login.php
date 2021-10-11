<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/login.css" rel="stylesheet" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link
      rel="stylesheet"
      href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />  

</head>
<body>
    <div class="header-absoute">
        <div class="header">
          <button class="nav-toggle" id="clickable" aria-label="open navigation">
            <span class="hamburger"></span>
          </button>
          <div class="title" onClick="redirectFunction()">
            <div class="titles">
              <img src="../assets/Images/MainPage/logo.png" class="logo" alt="AirPlane Logo" />
              <h1>Travel Vibes</h1>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBody">
            <div class="form__align">
                <div>
                    <div>Login Page</div>
                    <div class="underline"></div>
                   
                </div>
                <form class="rightForm"  action="../model/UserLogin.php" method="post">
                    <input type="email" name="email" placeholder="Enter Email" />
                    <input type="password" name="password" placeholder="Enter Password" />
                    <input type="submit" value="Login" name="login"/>
                  </form>
            </div>
      </div>
        <!--                                                  FOOTER       -->
          <!--                                                  FOOTER       -->
          <footer class="footer-section">
      <br><br><br>
      <div class="topFooter">
        <div class="titles" onClick="redirectFunction()">
          <img src="../assets/Images/MainPage/logo.png" class="logo" alt="AirPlane Logo" />
          <h1>Travel Vibes</h1>
        </div>
        <div class="footer-nav">
          <li class="nav__item" onClick="redirectFunction()"><a class="nav__link" href="MainPage.php">Home</a></li>
          <li class="nav__item"><a class="nav__link" href="MainPage.php#aboutUs">About Us</a></li>
          <li class="nav__item"><a class="nav__link" href="UserSection/ViewHotels.php">Hotels</a></li>
          <li class="nav__item"><a class="nav__link" href="UserSection/ViewPackage.php">Packages</a></li>
          <li class="nav__item"><a class="nav__link" href="MainPage.php#contact-us">Contact Us</a></li>
          <li class="nav__item"><a class="nav__link" href="login.php">Login</a></li>
          <li class="nav__item"><a class="nav__link" href="signin.php">Signin</a></li>
        </div>
      </div>
      <div
        class="underline"
        style="width: 80%; background-color: rgb(49, 48, 48)"
      ></div>
      <div class="social-links">
        <a href="https://linkedin.com/in/mitansh-gor-90a6201b3/"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/login/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/watch?v=eZLJnSoTWOI"><i class="fab fa-youtube"></i></a>
        <a href="https://github.com/MitanshGor"><i class="fab fa-github"></i></a>
      </div>
      <br><br><br>
    </footer>

    <script src="../assets/js/MoveToMainPage.js"></script>
</body>
</html>