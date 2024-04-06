<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
  body {
    background-color:#dbb240;
  } 
  .container{
    max-width: 100%;
    display:flex;
    flex-direction: column;
    height: 100svh;
  }
  .row{
    width:55%;
    margin: 0 auto;
  }
  .card-img-left {
    width: 45%;
    /* height:90%; */
    background: scroll center url('images/loginRegiter.jpg');
    background-size: cover;
  }

  .btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
  }

  .btn-google {
    color: white !important;
    background-color: #ea4335;
  }

  .btn-facebook {
    color: white !important;
    background-color: #3b5998;
  }
</style>
</head>
<body>
  <div class="container">
   <?php
    include_once "component/landingNav.php";
   ?>

    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <form>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus>
                <label for="floatingInputUsername">Username</label>
              </div>
              <hr>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Login</button>
              </div>

              <a class="d-block text-center mt-2 small" href="register.php">Don't have an account? Sign Up</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>