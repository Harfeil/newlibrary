<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.84.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/dashboard/"
    />

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.min.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="styles/mydash.css" rel="stylesheet" />
  </head>
  <body>
    <header
      id = "headerNav"class="backgroundTopBar navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow"
    >
      <a id = "title" class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"
        >LIBRARY</a
      >
      <input
        class="form-control"
        type="text"
        placeholder="Search"
        aria-label="Search"
        id = "searchInput"
      />
      <div class="navbar-nav">
          <button id = "notifBtn" type="button" class="icon-button">
            <span class="material-icons">notifications</span>
            <span class="icon-button__badge">2</span>
          </button>
      </div>
      <div class="navbar-nav">
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav
          class="col-md-3 col-lg-2 d-md-block sidebar collapse"
          id = "sidebarNavMenu"
        >
          <div id = "sidebarNav" class="position-sticky pt-3">
            <ul class="nav flex-column"> 
              <li id = "dashboardLink" class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Dashboard
                </a>
              <li class="nav-item" id = "dashboardBtn">
                <a id = "displayGuide" class="nav-link" aria-current="page" href="#">
                  Book Management
                  <!-- <div id = "lineDivide"></div> -->
                </a>
              </li>
              <ul id = "dashboardDropdown" class = "dashboardDropdown nav flex-column">
                <li>  
                  <a id = "insideLink" class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    LIST OF BOOKS
                  </a>
                </li>
                <li>  
                  <a id = "insideLink" class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    RESERVATION LIST
                  </a>
                </li>
                <li>  
                  <a id = "insideLink" class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    BORROW LIST
                  </a>
                </li>
              </ul>
              </li>
              <li id = "staffBtn" class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Staff Management
                   <!-- <div id = "lineDivide"></div> -->
                </a>
              </li>
              <ul id = "staffDropdown" class = "staffDropdown nav flex-column">
                <li>  
                  <a id = "insideLink" class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    LIST OF STAFFS
                  </a>
                </li>
                <li>  
                  <a id = "insideLink" class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    ARCHIVE LIST
                  </a>
                </li>
              </ul>
              <li id = "supplierBtn" class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Acquisition Management
                   <!-- <div id = "lineDivide"></div> -->
                </a>
              </li>
              <ul id = "supplierDropdown" class = "supplierDropdown nav flex-column">
                <li class="nav-item">
                  <a id = "insideLink" class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    SUPPLIER LIST
                  </a>
                </li>
                <li  class="nav-item">
                  <a id = "insideLink" class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    ARCHIVE LIST
                  </a>
                </li>
              </ul>
              <li id = "libraryBtn" class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Library Management
                   <!-- <div id = "lineDivide"></div> -->
                </a>
              </li>
              <ul id = "libraryDropdown" class = "libraryDropdown nav flex-column">
                <li class="nav-item">
                  <a id = "insideLink" class="nav-link" href="#">
                    <span data-feather="users"></span>
                    LIBRARY LIST
                  </a>
                </li>
                <li class="nav-item">
                  <a id = "insideLink" class="nav-link" href="#">
                    <span data-feather="users"></span>
                    ARCHIVED LIST
                  </a>
                </li>
              </ul>
              <li id = "historyLogsBtn" class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  History/Logs
                </a>
              </li>
              <li id = "profileBtn" class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Settings
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Export
                </button>
              </div>
              <button
                type="button"
                class="btn btn-sm btn-outline-secondary dropdown-toggle"
              >
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <canvas
            class="my-4 w-100"
            id="myChart"
            width="900"
            height="380"
          ></canvas>

          <h2>Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                  <th scope="col">Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>visual</td>
                  <td>layout</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>data</td>
                  <td>rich</td>
                  <td>dashboard</td>
                  <td>tabular</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>information</td>
                  <td>placeholder</td>
                  <td>illustrative</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>text</td>
                  <td>random</td>
                  <td>layout</td>
                  <td>dashboard</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>dashboard</td>
                  <td>irrelevant</td>
                  <td>text</td>
                  <td>placeholder</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>dashboard</td>
                  <td>illustrative</td>
                  <td>rich</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>placeholder</td>
                  <td>tabular</td>
                  <td>information</td>
                  <td>irrelevant</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                  <td>text</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>placeholder</td>
                  <td>irrelevant</td>
                  <td>visual</td>
                  <td>layout</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>data</td>
                  <td>rich</td>
                  <td>dashboard</td>
                  <td>tabular</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>information</td>
                  <td>placeholder</td>
                  <td>illustrative</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>text</td>
                  <td>placeholder</td>
                  <td>layout</td>
                  <td>dashboard</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>dashboard</td>
                  <td>irrelevant</td>
                  <td>text</td>
                  <td>visual</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>dashboard</td>
                  <td>illustrative</td>
                  <td>rich</td>
                  <td>data</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>random</td>
                  <td>tabular</td>
                  <td>information</td>
                  <td>text</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="javascripts/bootstrap.bundle.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
      integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
      crossorigin="anonymous"
    ></script>
    <script src="dashboard.js"></script>
  </body>
</html>
