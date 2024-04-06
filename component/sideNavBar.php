<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container {
            max-width: 100%;
        }

        .side-navbar {
            height: 100vh;
            width: 250px;
            position: fixed; 
            left: 0;
            top: 0;
            background-color: rgb(224, 179, 28);
            padding-top: 20px; 
        }

        .side-navbar a {
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2rem; 
            color: #fff;
            display: block; 
            transition: 0.3s; 
        }

        .side-navbar a:hover {
            background-color: rgba(255, 255, 255, 0.3); 
            color: #000; 
        }

        .navbar-brand {
            color: #fff;
            padding: 20px 0;
            font-size: 1.5rem;
            display: block;
            text-align: center;
        }

        .content {
            margin-left: 250px; /* Same as the width of the sidebar */
            padding: 20px;
        }
    </style>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="side-navbar">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <a href="home.php">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Services</a>
                    <a href="login.php">Login</a>
                </div>
            </div>
            <div class="col-9">
                <!-- Content here -->
                <div class="content">
                    <!-- Your content goes here -->
                </div>
            </div>
        </div>
    </div>

    <!-- End Example Code -->
</body>

</html>

