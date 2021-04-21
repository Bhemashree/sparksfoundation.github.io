<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>view customers</title>
    <style>
    body{
        background:url(default.jpg)no-repeat center fixed;
        background-size:cover;

    }
    table, th, tr{
        width: 50%;
        margin: auto;
        border:8px solid black;
        border-collapse:collapse;
        text-align:center;
        font-size:18px;
        table-layout:fixed;
    }
    th, td{
        padding:15px;

    }
    
    </style>
    
  </head>
  <body>
    <?php require 'partials/_nav.php' ?> 
    <div class="table-container">
    <h5 class="text-center">VIEW CUSTOMERS</h5>
    <table  class="table" border=1 cellspacing=0>
    <thead>
    <tr>
    <th>S.no</th>
    <th>Name</th>
    <th>Email</th>
    <th>Bank Balance</th>
    <th>transfer money</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td data-label="S.no">1</td>
    <td data-label="Name">RANI SAHU</td>
    <td data-label="Email">ranisahu16@gmail.com</td>
    <td data-label="Bank Balance">60000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">2</td>
    <td data-label="Name">JANVI SAHU</td>
    <td data-label="Email">janvisahu14@gmail.com</td>
    <td data-label="Bank Balance">56000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">3</td>
    <td data-label="Name">KALPANA</td>
    <td data-label="Email">kalpana03@gmail.com</td>
    <td data-label="Bank Balance">50000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">4</td>
    <td data-label="Name">MEDHA PARWE</td>
    <td data-label="Email">medha09@gmail.com</td>
    <td data-label="Bank Balance">30000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">5</td>
    <td data-label="Name">SHUBHAM</td>
    <td data-label="Email">shubham24@gmail.com</td>
    <td data-label="Bank Balance">48000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">6</td>
    <td data-label="Name">MONICA</td>
    <td data-label="Email">monica15@gmail.com</td>
    <td data-label="Bank Balance">45000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">7</td>
    <td data-label="Name">HIMANSHU SAHU</td>
    <td data-label="Email">himanshu21@gmail.com</td>
    <td data-label="Bank Balance">49000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">8</td>
    <td data-label="Name">TRISHNA NISHAD</td>
    <td data-label="Email">trishnanis@gmail.com</td>
    <td data-label="Bank Balance">35000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">9</td>
    <td data-label="Name">AYESHA SINGH</td>
    <td data-label="Email">ayeshas23@gmail.com</td>
    <td data-label="Bank Balance">42000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
        <tr>
    <td data-label="S.no">10</td>
    <td data-label="Name">DOLLY</td>
    <td data-label="Email">dolly20@gmail.com</td>
    <td data-label="Bank Balance">26000</td>
    <td data-label="transfer money"><a href="transfer money" class="btn"><li class="nav-item">
          <a class="nav-link" href="/web/money transfer.php">money transfer</a>
        </li></a></td>
        </tr>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
</body>
</html>