<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
 /* body{margin-top:20px;} */

.feature-box-1 {
  padding: 32px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  margin: 15px 0;
  position: relative;
  z-index: 1;
  border-radius: 10px;
  overflow: hidden;
  -moz-transition: ease all 0.35s;
  -o-transition: ease all 0.35s;
  -webkit-transition: ease all 0.35s;
  transition: ease all 0.35s;
  top: 0;
}
.feature-box-1 * {
  -moz-transition: ease all 0.35s;
  -o-transition: ease all 0.35s;
  -webkit-transition: ease all 0.35s;
  transition: ease all 0.35s;
}
.feature-box-1 .icon {
  width: 70px;
  height: 70px;
  line-height: 70px;
  background: #fc5356;
  color: #ffffff;
  text-align: center;
  border-radius: 50%;
  margin-bottom: 22px;
  font-size: 27px;
}
.feature-box-1 .icon i {
  line-height: 70px;
}
.feature-box-1 h5 {
  color: #20247b;
  font-weight: 600;
}
.feature-box-1 p {
  margin: 0;
}
.feature-box-1:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: auto;
  right: 0;
  border-radius: 10px;
  width: 0;
  background: #20247b;
  z-index: -1;
  -moz-transition: ease all 1s;
  -o-transition: ease all 1s;
  -webkit-transition: ease all 1s;
  transition: ease all 1s;
}
.feature-box-1:hover {
  top: -5px;
}
.feature-box-1:hover h5 {
  color: #ffffff;
}
.feature-box-1:hover p {
  color: rgba(255, 255, 255, 0.8);
}
.feature-box-1:hover:after {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  left: 0;
  right: auto;
}

.section-title {
    padding-bottom: 45px;
}
.section-title h2 {
    font-weight: 700;
    color: black;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}

    </style>
</head>
<body>
  <?php
      include_once "component/landingNav.php";
    ?>
    <!-- <section class="section services-section" id="services"> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                <h2>SERVICES</h2>
                <h5>What we offer?</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="feature-content">
                    <h5>Book Borrowing</h5>
                    <p> Libraries allow patrons to borrow books for a certain period. They often have a system in place for borrowing and returning books, including membership registration.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="feature-content">
                    <h5>Study Spaces</h5>
                    <p> Libraries offer quiet study spaces for individuals or groups, as well as meeting rooms that can be booked for study sessions or events.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-comment"></i>
                    </div>
                    <div class="feature-content">
                      <h5>Special Collections</h5>
                      <p>Many libraries have special collections or archives that contain rare books, manuscripts, historical documents, and other valuable materials.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-image"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Responsiveness</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-th"></i>
                    </div>
                    <div class="feature-content">
                      <h5>Computer and Internet Access</h5>
                      <p>Libraries often provide computer workstations with internet access for patrons who may not have access to such resources at home.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="feature-box-1">
                    <div class="icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Advanced Options</h5>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </section> -->
</body>
</html>