<?php 
include("veribagla.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Proje</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">ZERLANIS.COM</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="projephp.php">Home</a>
        <a class="p-2 text-dark" href="discount.php">Discount</a>
        <a class="p-2 text-dark" href="products.php">All Products</a>
        <a class="p-2 text-dark" href="card1.php">Cart</a>
        <a class="p-2 text-dark" href="payment.php">Payment</a>
      </nav>
      <a class="btn btn-outline-primary" href="admin.php">ADMIN</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">DISCOUNT %30</h1>
      <p class="lead">You Can Easily Buy The Cheapest And Reliable APPLE Products At Special Offers.</p>
    </div>
<form action="discount.php" method="post">
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">IPHONE 8</h4>
          </div>
          <div class="card-body">
            <img class="card-img-top" src="r8.jpg" alt="Card image cap"><br><br><br>
            <h1 class="card-title pricing-card-title">$399</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Retina HD display</li>
              <li>32 GB of storage</li>
              <li>A11 Bionic chip</li>
              <li>12MP camera</li>
            </ul>
            <button type="submit" name="button10" class="btn btn-lg btn-block btn-primary">BUY NOW</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">MACBOOK AIR</h4>
          </div>
          <div class="card-body">
            <img class="card-img-top" src="r9.png" alt="Card image cap">
            <h1 class="card-title pricing-card-title">$699 </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>13.3-inch LED display </li>
              <li>128 GB of storage</li>
              <li>1.6GHz  Intel Core i5</li>
              <li>Up to 30 days of standby time</li>
            </ul>
            <button type="submit" name="button11" class="btn btn-lg btn-block btn-primary">BUY NOW</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">MACBOOK PRO</h4>
          </div>
          <div class="card-body">
            <img class="card-img-top" src="r10.jpg" alt="Card image cap">
            <h1 class="card-title pricing-card-title">$899 </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>15-inch HD display</li>
              <li>256 GB of storage</li>
              <li>2.6GHz  Intel Core i7</li>
              <li>Configurable to 16GB of memory</li>
            </ul>
            <button type="submit" name="button12" class="btn btn-lg btn-block btn-primary">BUY NOW</button>
          </div>
        </div>
      </div>

      
    </div>

</form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  

</body></html>