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
         .container{
            max-width: 100%;
            display:flex;
            flex-direction: column;
            height: 87svh;
            /* justify-content:center; */
            align-items:center;
        }
        .container-fluid {
            justify-content: space-between;
            /* background-color: rgb(224, 179, 28); */
            font-size: 1.5rem;
            padding: 15px;
        }
        .navbar{
            width: 100%;
        }
        .navbar-nav {
            margin-left: auto;
            height: auto;
            display: flex;
            align-items:center;
            justify-content:center;
            
        }

        .nav-link:hover {
            color: blue;
        }
        .nav-link {
        transition: color 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: blue;
        }

        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: blue;
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .nav-link.active::after {
            width: 100%;
            animation: underline 2s ease forwards;
        }
        .navbar-brand img{
            width: 130px;
            height:100px;
        }
        @keyframes underline {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }
    </style>
</head>

<body >
        <!-- bg-body-tertiary -->
    <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li> -->
                    </ul>
                </div>
            </div>
    </nav>
    <div class="container">

    <!-- End Example Code -->
</body>
</html>