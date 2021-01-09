<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>ZEDDERP - Best School Management Software - Client Login</title>
  <style>
    .btn-loader {
      width: 50px;

      display: none;
    }

    .btn-mod {
      transition: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row animate__animated animate__bounceInDown alert">
      <div class="col-m-12 col-sm-12">
        <i class="fas alert-icon"></i> &nbsp; <span class="alert-text"></span>
        <i class="fas fa-times float-right close-alert" onclick="closeAlert()"></i>
      </div>
    </div>
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" id="login" class="sign-in-form">
          <h2 class="title"><img src="assets/logo/logo.png" alt=""></h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required />
          </div>
          <button type="submit" class="btn solid"><span class="btn-text">Login</span>

          </button>
          <img src="assets/pink-button-loader.svg" alt="" class="btn-loader">
          <p class="social-text">Follow us on our social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h1>Admin Area, Just for developers for development purposes only</h1>
          <br>
          <h4>
            By a developer , For all developers
          </h4>

        </div>
        <img src="assets/log.svg" class="image" alt="" />
      </div>

    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/alert.js"></script>
  <!-- <script src="js/app.js"></script> -->
  <script>
    $('#login').submit((event) => {
      event.preventDefault();
      $('.btn-loader').show();

      $('.btn-mod').hide();
      let cred = new FormData(document.getElementById('login'));

      $.ajax({

        url: "php/login.php",
        type: "POST",
        data: cred,
        cache: false,
        processData: false,
        contentType: false,
        success: (resp) => {
          if (resp == 0) {
            window.location.href = "index";
          } else {
            setAlert(warning, "Username or password is wrong.", true)
            $('.btn-loader').hide();
            $('.btn-mod').show('btn-gone');

          }
        }
      })
    })
  </script>
</body>

</html>