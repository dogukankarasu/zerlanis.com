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
      <h1 class="display-4">YOUR CART</h1>
      <p class="lead">YOUR SELECTION APPEAR HERE</p>
    </div>

  <table class="table">
  <thead class="thead-dark">
    <tr >
      
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRICE</th>
      
    
    </tr>
  </thead>
    <?php

    $db= mysqli_connect('localhost','root','123456789','denemeproje1');
    
    $sql=("SELECT productname1,price1 FROM sepet");
    $result=$db->query($sql);
   if($result-> num_rows > 0){
      while ($row=$result->fetch_assoc()) {
        echo "<tr><td>".$row["productname1"]."</td><td>".$row["price1"]."</td></tr>";

        # code...
      }
      echo"</table>";
      
   }
    
    ?>
  </table>

<br><br><br><br>
<table class="table">
  <thead class="thead-dark">
    <tr >
      <th scope="col">TOTAL PAYMENT</th>
     <tr>

 <?php

    $db= mysqli_connect('localhost','root','123456789','denemeproje1');
    $sql1=("SELECT SUM(price1) AS total FROM sepet");
    $result1=$db->query($sql1);
    if($result1-> num_rows > 0){
      while ($row=$result1->fetch_assoc()) { 
        echo "<tr><td>".$row["total"]."$</td></tr>";
      }
      echo "</table>";
    
}
?>
     </table>
     </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster-->
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