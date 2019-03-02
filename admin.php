
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
      <h1 class="display-4">ADMIN</h1>
      <p class="lead">Only Authorized People Can Log In To Admin Page.</p>
    </div>

  <section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Login Now</h2>
        <form class="login-form" method="post" action="adminpage.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="" id="username" name="username" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="" id="password" name="password" >
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <a class="btn btn-outline-primary float-right" href="adminpage.php">LOGIN</a>
       
     </button>
  
    
  </div>
  

</form>
<?php 

$username=$_POST['username'];
$password=$_POST['password'];

$username=stripslashes($username);
$password=stripslashes($password);


mysql_connect("localhost","root","123456789");
mysql_select_db("denemeproje1");

$result=mysql_query("select * from login where username='$username' and password ='$password'")
or die("failed to query database".mysql_error());

$row=mysql_fetch_array($result);
if($row['username']==$username&& $row['password']==$password){
      echo "<p><font style= sans-serif; font color=white>LOG IN SUCCESSFULL, WELCOME  ADMIN   ! </font> </p>";
}
else{
    echo "failed to login!"  ;
}

 ?>

</div>
</section>
     
    </div>


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