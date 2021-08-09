<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>GRIP Bank</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" style="width:40px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href=" index.php ">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <section class="topContent">
        <div class="mainHeading">
            <div><span class="main-content" style="color: #4eb14e;">Basic Banking System</span></div>
            <div style="margin-top: 12px;"><span class="sub-content">A Basic Banking System for making money transactions between users. 
              <br>No login system. 
              <br>No user creation. 
              <br>Direct transfer between existing users.</span></div>
            <a href="#services" class="btn btn-outline-success mt-3">Get Started</a>
        </div>
        <!--<div class="topContentImg">
            <img src="images/banking_homepage.jpg" alt="Banking">
        </div>-->
    </section>

  <section class="container" id="services">
    <h2 class="heading">Our Services</h2>

    <div class="container  text-center">
      <div class="row">
        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/customer.png" class="card-img-top mt-3 img" alt="Responsive Image">
          <div class="card-body">
            <h5 class="card-title">View Users</h5>
            <p class="card-text">View all Users</p>
            <a href="transfermoney.php" class="btn btn-success">Go</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/transactions.png" class="card-img-top mt-3 img" alt="Responsive Image">
          <div class="card-body">
            <h5 class="card-title">View Transactions</h5>
            <p class="card-text">View all the past transactions happened between different accounts</p>
            <a href="transactionhistory.php" class="btn btn-success">GO</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="images/transfer.png" class="card-img-top mt-3 img" alt="Responsive Image">
          <div class="card-body">
            <h5 class="card-title" id="harry">Transfer Money</h5>
            <p class="card-text"> Transfer Money between multiple accounts</p>
            <a href="transfermoney.php" class="btn btn-success">Go</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Services -->

  <!-- Footer -->
  <footer>
    <div class="follow">
      <h3 style="color: black; font-family: 'Baloo Bhai 2', cursive; font-size: 25px;">Source Code</h3>
      <div class="social">
        <a href="https://www.github.com">
          <i class="fa fa-github"></i>
        </a>
      </div>
    </div>
    <p class="text-copy">
      Copyright &copy; 2021 All rights reserved.
    </p>
  </footer>
  <!-- End Footer -->

  <!-- Javascript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
  crossorigin="anonymous"></script>

</body>

</html>