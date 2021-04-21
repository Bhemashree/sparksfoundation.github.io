<?php  
$showAlert= false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  include 'partials/_dbconnect.php';
  $Email= $_POST["Email"];
  $money= $_POST["money"];
  {
    $sql = "INSERT INTO `bankuser` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result){
      $showAlert = true;
    }

  }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Money Transfer</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?> 
    <div class="container">
    <h5 class="text-center">Money Transfer</h5>
    </div>
    
       
       
</div> 
   

    <form action="/web/money transfer.php" method="post">
  <div class="form.group">
    <label for="Email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="Email1" name="Email" aria-describedby="emailHelp">
    </div>
    
    
  </div>
  <div class="form.group">
    <label for="money" class="form-label">Money</label>
    <input type="money" class="form-control" id="money" name="money">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit
  <li class="nav-item active">
          <a class="nav-link"  href="/web">click here</a>
        </li></button>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>