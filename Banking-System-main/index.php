<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style>
    .carousel-caption {
          
          position: absolute;
          right: 12%;
          bottom: 208px;
          left: 15%;
          z-index: 10;
          padding-top: 20px;
          padding-bottom: 20px;
          color: #fff;
          text-align: center;
    }
    h1{
      color: #b7db27;
      text-shadow: 2px 2px 8px #000000;
    }
    h3{
      color: #b7db27;
    }
    </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
       <div id="about" class="container-fluid">      
      <!-- Introduction section -->
      <div class="container-fluid position-relative"> 
            <div class="row">
                <div class="row-md-6">
                <img src="img/green.jpg" class="img-fluid pt-2">
                  <div class="carousel-caption">
                  <h3><b>Welcome to</b></h3> 
                  <h1><b>EVERGREEN BANK</b></h1>
                  </div> 
                </div>
            </div>  
            </div> 


      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #1fb824;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #1fb824;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #1fb824;">Transaction History</button></a>
                  </div>
            </div>

            <br>
            <br>
            <div id="about" class="container-fluid bg-light">
            <div class="row">
              <div class="col-sm-8">
              <br>
              <br>
                <h2>About Company Page</h2><br>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <br><button class="btn btn-default btn-lg bg-success">Get in Touch</button>
              
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/3.png" class="img-fluid pt-2">
              </div>
                 </div>
            </div>

      </div>          
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>ADITYA SINGH</b> <br> ADITYA FOUNDATION</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>